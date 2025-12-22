<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\LoanApplicationMail;

/**
 * LoanApplicationController
 *
 * Handles multi-step loan application form submission for Vision Plus Wealth
 * - No database persistence
 * - Generates PDF matching original form
 * - Emails PDF to admin
 *
 * @package App\Http\Controllers
 */
class LoanApplicationController extends Controller
{
    /**
     * Display the loan application form
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('loan-application.index');
    }

    /**
     * Process and submit the loan application
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Comprehensive validation rules matching the PDF form
        $validated = $request->validate([
            // Personal Details
            'surname' => 'required|string|max:255',
            'first_names' => 'required|string|max:255',
            'title' => 'required|in:Mr.,Mrs.,Ms.,Dr.',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date|before:today',
            'nationality' => 'required|string|max:255',
            'identity_number' => 'required|string|max:50',
            'marital_status' => 'required|in:Single,Married,Divorced,Widowed',

            // Contact Details
            'residential_address' => 'required|string|max:500',
            'postal_address' => 'nullable|string|max:500',
            'contact_home' => 'nullable|string|max:50',
            'contact_business' => 'nullable|string|max:50',
            'contact_cell' => 'required|string|max:50',
            'email' => 'required|email|max:255',

            // Employment Details
            'employer_name' => 'required|string|max:255',
            'employer_address' => 'required|string|max:500',
            'occupation_department' => 'required|string|max:255',
            'manager_name_contact' => 'required|string|max:255',
            'employment_status' => 'required|in:Permanent,Casual,Contract',
            'date_of_employment' => 'required|date',
            'date_contract_expires' => 'nullable|date|after:today',
            'employee_number' => 'required|string|max:100',
            'leave_days_payslip' => 'nullable|string|max:50',
            'gross_monthly_income' => 'required|numeric|min:0',
            'net_monthly_income' => 'required|numeric|min:0',
            'next_pay_date' => 'required|date|after:today',

            // Next of Kin 1
            'nok1_full_name' => 'required|string|max:255',
            'nok1_relationship' => 'required|string|max:100',
            'nok1_phone_home' => 'nullable|string|max:50',
            'nok1_phone_business' => 'nullable|string|max:50',
            'nok1_phone_cell' => 'required|string|max:50',
            'nok1_employer_address' => 'required|string|max:500',

            // Next of Kin 2
            'nok2_full_name' => 'required|string|max:255',
            'nok2_relationship' => 'required|string|max:100',
            'nok2_phone_home' => 'nullable|string|max:50',
            'nok2_phone_business' => 'nullable|string|max:50',
            'nok2_phone_cell' => 'required|string|max:50',
            'nok2_employer_address' => 'required|string|max:500',

            // Loan Details
            'loan_amount' => 'required|numeric|min:1',
            'repayment_period' => 'required|integer|min:1',
            'repayment_period_other' => 'nullable|integer|min:1',
            'reason_for_loan' => 'required|string|max:1000',

            // Existing Loans/Credit
            'existing_loan_institution' => 'nullable|string|max:255',
            'existing_loan_branch' => 'nullable|string|max:255',
            'existing_loan_amount' => 'nullable|numeric|min:0',

            // Banking Details
            'bank_name' => 'required|string|max:255',
            'bank_branch' => 'required|string|max:255',
            'account_number' => 'required|string|max:100',

            // Referrals (optional)
            'referral1_name' => 'nullable|string|max:255',
            'referral1_contact' => 'nullable|string|max:50',
            'referral2_name' => 'nullable|string|max:255',
            'referral2_contact' => 'nullable|string|max:50',
            'referral3_name' => 'nullable|string|max:255',
            'referral3_contact' => 'nullable|string|max:50',

            // Terms acceptance
            'terms_accepted' => 'required|accepted',
        ], [
            // Custom error messages
            'surname.required' => 'Surname is required',
            'first_names.required' => 'First names are required',
            'date_of_birth.before' => 'Date of birth must be in the past',
            'contact_cell.required' => 'Cell phone number is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Please provide a valid email address',
            'loan_amount.required' => 'Loan amount is required',
            'loan_amount.min' => 'Loan amount must be greater than zero',
            'terms_accepted.accepted' => 'You must accept the terms and conditions',
        ]);

        // Sanitize all input data (XSS protection)
        $sanitized = $this->sanitizeInput($validated);

        // Generate application number (timestamp-based)
        $sanitized['application_number'] = 'VPW-' . now()->format('YmdHis') . '-' . rand(1000, 9999);
        $sanitized['submission_date'] = now()->format('d/m/Y');

        try {
            // Generate PDF from the loan application data
            $pdf = $this->generatePDF($sanitized);

            // Send email with PDF attachment
            $this->sendEmail($pdf, $sanitized);

            // Redirect back to form with success message (like payhouse_finance)
            return redirect()->route('loan-application.index')
                ->with('success', 'Your loan application has been submitted successfully! Application Number: ' . $sanitized['application_number'] . '. You will receive a confirmation email shortly. Our team will contact you within 24-48 hours.');

        } catch (\Exception $e) {
            // Log error and return with error message
            \Log::error('Loan Application Error: ' . $e->getMessage());

            return back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while processing your application. Please try again.']);
        }
    }

    /**
     * Generate PDF from loan application data
     *
     * @param array $data
     * @return \Barryvdh\DomPDF\PDF
     */
    private function generatePDF(array $data)
    {
        // Generate PDF matching the original form layout
        $pdf = Pdf::loadView('loan-application.pdf', ['data' => $data]);

        // Set paper size and orientation to match original form
        $pdf->setPaper('A4', 'portrait');

        // Set options for better rendering
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => false,
            'defaultFont' => 'Arial'
        ]);

        return $pdf;
    }

    /**
     * Send email with PDF attachment
     *
     * @param \Barryvdh\DomPDF\PDF $pdf
     * @param array $data
     * @return void
     */
    private function sendEmail($pdf, array $data)
    {
        $adminEmail = config('mail.loan_admin_email');

        if (!$adminEmail) {
            throw new \Exception('Admin email not configured. Please set LOAN_ADMIN_EMAIL in .env');
        }

        // Generate PDF output for attachment
        $pdfOutput = $pdf->output();
        $pdfFileName = 'Loan_Application_' . $data['application_number'] . '.pdf';

        // Send email
        Mail::to($adminEmail)->send(new LoanApplicationMail($pdfOutput, $pdfFileName, $data));
    }

    /**
     * Sanitize input data to prevent XSS attacks
     *
     * @param array $data
     * @return array
     */
    private function sanitizeInput(array $data): array
    {
        $sanitized = [];

        foreach ($data as $key => $value) {
            if (is_string($value)) {
                // Strip tags and encode special characters
                $sanitized[$key] = htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8');
            } else {
                $sanitized[$key] = $value;
            }
        }

        return $sanitized;
    }
}
