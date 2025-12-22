<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * LoanApplicationMail
 *
 * Mailable class for sending loan application PDF to admin
 * Uses in-memory PDF (no file storage)
 *
 * @package App\Mail
 */
class LoanApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfOutput;
    public $pdfFileName;
    public $applicationData;

    /**
     * Create a new message instance.
     *
     * @param string $pdfOutput - PDF binary content
     * @param string $pdfFileName - Name for the PDF attachment
     * @param array $applicationData - Form submission data
     */
    public function __construct(string $pdfOutput, string $pdfFileName, array $applicationData)
    {
        $this->pdfOutput = $pdfOutput;
        $this->pdfFileName = $pdfFileName;
        $this->applicationData = $applicationData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fullName = trim(
            ($this->applicationData['first_names'] ?? '') . ' ' .
            ($this->applicationData['surname'] ?? '')
        );

        $applicationNumber = $this->applicationData['application_number'] ?? 'N/A';

        return $this->view('emails.loan-application')
            ->subject('New Loan Application – Vision Plus Wealth [' . $applicationNumber . ']')
            ->with([
                'application' => $this->applicationData,
                'fullName' => $fullName,
                'applicationNumber' => $applicationNumber
            ])
            ->attachData($this->pdfOutput, $this->pdfFileName, [
                'mime' => 'application/pdf',
            ]);
    }
}
