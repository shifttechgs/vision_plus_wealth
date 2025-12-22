<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Loan Application</title>
</head>
<body style="margin: 0; padding: 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f5f5f5;">

<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f5f5f5; padding: 40px 40px;">
    <tr>
        <td align="center">
            <!-- Email Container -->
            <table cellpadding="0" cellspacing="0" border="0" width="600" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td style="background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); padding: 40px 30px; text-align: center;">
                        <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 600;">Vision Plus Wealth</h1>
                        <p style="margin: 8px 0 0 0; color: rgba(255,255,255,0.9); font-size: 14px;">New Loan Application Received</p>
                    </td>
                </tr>

                <!-- Alert -->
                <tr>
                    <td style="padding: 30px 30px 20px 30px;">
                        <div style="background-color: #fff3cd; border-left: 4px solid #ffc107; padding: 16px; border-radius: 4px;">
                            <p style="margin: 0; color: #856404; font-size: 14px; line-height: 1.5;">
                                <strong>⚠️ Action Required:</strong> A new loan application has been submitted and requires your review.
                            </p>
                        </div>
                    </td>
                </tr>

                <!-- Application Number -->
                <tr>
                    <td style="padding: 0 30px 20px 30px;">
                        <div style="background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%); border: 2px dashed #667eea; border-radius: 8px; padding: 20px; text-align: center;">
                            <p style="margin: 0 0 8px 0; color: #718096; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Application Number</p>
                            <p style="margin: 0; color: #667eea; font-size: 24px; font-weight: 700; font-family: 'Courier New', monospace;">{{ $applicationNumber }}</p>
                        </div>
                    </td>
                </tr>

                <!-- Applicant Info -->
                <tr>
                    <td style="padding: 0 30px 30px 30px;">
                        <h2 style="margin: 0 0 20px 0; color: #2d3748; font-size: 18px; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid #e2e8f0;">
                            📋 Applicant Information
                        </h2>

                        <table cellpadding="8" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600; width: 140px;">Full Name:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #2d3748; font-size: 14px; font-weight: 500;">{{ $fullName }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600;">ID Number:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #2d3748; font-size: 14px;">{{ $application['identity_number'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600;">Phone:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #2d3748; font-size: 14px;">{{ $application['contact_cell'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600;">Email:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #2d3748; font-size: 14px;">{{ $application['email'] ?? 'N/A' }}</td>
                            </tr>
                        </table>

                        <!-- Loan Details -->
                        <h2 style="margin: 30px 0 20px 0; color: #2d3748; font-size: 18px; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid #e2e8f0;">
                            💰 Loan Request
                        </h2>

                        <table cellpadding="8" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600; width: 140px;">Requested Amount:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
                                    <span style="background-color: #48bb78; color: #ffffff; padding: 6px 12px; border-radius: 6px; font-size: 15px; font-weight: 700;">
                                        US$ {{ isset($application['loan_amount']) ? number_format($application['loan_amount'], 2) : '0.00' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #4a5568; font-size: 13px; font-weight: 600;">Repayment Period:</td>
                                <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0; color: #2d3748; font-size: 14px;">
                                    @if(isset($application['repayment_period_other']) && $application['repayment_period_other'])
                                        {{ $application['repayment_period_other'] }} month(s)
                                    @else
                                        {{ $application['repayment_period'] ?? 'N/A' }} month(s)
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; color: #4a5568; font-size: 13px; font-weight: 600;">Employer:</td>
                                <td style="padding: 12px 0; color: #2d3748; font-size: 14px;">{{ $application['employer_name'] ?? 'N/A' }}</td>
                            </tr>
                        </table>

                        <!-- Attachment Notice -->
                        <div style="background: #e7f3ff; border: 2px solid #667eea; border-radius: 8px; padding: 20px; margin-top: 30px; text-align: center;">
                            <p style="margin: 0; color: #2d3748; font-size: 14px; font-weight: 600;">
                                📎 Complete application form attached as PDF
                            </p>
                            <p style="margin: 8px 0 0 0; color: #718096; font-size: 13px;">
                                Please review all details in the attached document
                            </p>
                        </div>

                        <!-- Next Steps -->
                        <div style="background-color: #f7fafc; border-radius: 8px; padding: 20px; margin-top: 20px;">
                            <p style="margin: 0 0 12px 0; color: #2d3748; font-size: 14px; font-weight: 600;">Next Steps:</p>
                            <ul style="margin: 0; padding-left: 20px; color: #4a5568; font-size: 13px; line-height: 1.8;">
                                <li>Review the attached application form</li>
                                <li>Verify applicant information</li>
                                <li>Contact applicant within 24-48 hours</li>
                                <li>Update application status in system</li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e2e8f0;">
                        <p style="margin: 0 0 8px 0; color: #2d3748; font-size: 14px; font-weight: 600;">Vision Plus Wealth (Pvt) Ltd</p>
                        <p style="margin: 0 0 12px 0; color: #718096; font-size: 13px;">Financial Services | Loan Solutions</p>
                        <p style="margin: 0; color: #a0aec0; font-size: 12px;">
                            This is an automated notification from the Vision Plus Wealth loan application system.
                        </p>
                        <p style="margin: 8px 0 0 0; color: #cbd5e0; font-size: 11px;">
                            © {{ date('Y') }} Vision Plus Wealth. All rights reserved.
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
