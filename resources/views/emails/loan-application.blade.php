<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Loan Application — {{ $applicationNumber }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f0f2f5; font-family: -apple-system, BlinkMacSystemFont, 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f0f2f5;">
        <tr>
            <td align="center" style="padding: 48px 20px;">

                <!-- Email Card -->
                <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 8px 24px rgba(10, 31, 63, 0.12);">

                    <!-- Top Accent Bar -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); height: 4px; font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 48px 28px 48px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div style="font-size: 18px; font-weight: 800; color: #0a1f3f; letter-spacing: -0.3px;">Vision Plus Wealth</div>
                                        <div style="font-size: 11px; font-weight: 500; color: #a8b2c1; letter-spacing: 0.8px; text-transform: uppercase; margin-top: 3px;">Empowering Your Financial Journey</div>
                                    </td>
                                    <td style="text-align: right; vertical-align: top;">
                                        <span style="display: inline-block; background-color: #f0f2f5; color: #0a1f3f; padding: 5px 14px; border-radius: 100px; font-size: 11px; font-weight: 700; letter-spacing: 0.6px; text-transform: uppercase; border: 1px solid #e2e6ed;">New Application</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                        <td style="padding: 0 48px;">
                            <div style="height: 1px; background-color: #e2e6ed;"></div>
                        </td>
                    </tr>

                    <!-- Title Block -->
                    <tr>
                        <td style="padding: 28px 48px 0 48px;">
                            <h1 style="margin: 0 0 6px 0; font-size: 24px; font-weight: 700; color: #0f172a; letter-spacing: -0.4px; line-height: 1.3;">Loan Application Received</h1>
                            <p style="margin: 0; font-size: 14px; color: #64748b; line-height: 1.5;">
                                Submitted {{ now()->format('l, F j, Y') }} at {{ now()->format('g:i A') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Application Reference -->
                    <tr>
                        <td style="padding: 24px 48px 0 48px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f8f9fb; border: 1px solid #e2e6ed; border-radius: 6px;">
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <span style="font-size: 11px; font-weight: 700; color: #a8b2c1; text-transform: uppercase; letter-spacing: 1.2px; display: block; margin-bottom: 6px;">Application Reference</span>
                                        <span style="font-size: 18px; font-weight: 700; color: #0a1f3f; font-family: 'Courier New', 'Lucida Console', monospace; letter-spacing: 1px;">{{ $applicationNumber }}</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Applicant Details -->
                    <tr>
                        <td style="padding: 28px 48px 0 48px;">
                            <p style="margin: 0 0 14px 0; font-size: 11px; font-weight: 700; color: #a8b2c1; text-transform: uppercase; letter-spacing: 1.2px;">Applicant Details</p>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #e2e6ed; border-radius: 6px; overflow: hidden;">

                                <tr style="background-color: #f8f9fb;">
                                    <td width="34%" style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Full Name</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <span style="font-size: 14px; color: #0f172a; font-weight: 600;">{{ $fullName }}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">ID Number</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 14px; color: #334155; font-weight: 500;">{{ $application['identity_number'] ?? '—' }}</span>
                                    </td>
                                </tr>

                                <tr style="background-color: #f8f9fb;">
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Phone</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <a href="tel:{{ $application['contact_cell'] ?? '' }}" style="font-size: 14px; color: #4a6fa5; text-decoration: none; font-weight: 500;">{{ $application['contact_cell'] ?? '—' }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 13px 16px; background-color: #ffffff;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Email</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-left: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <a href="mailto:{{ $application['email'] ?? '' }}" style="font-size: 14px; color: #4a6fa5; text-decoration: none; font-weight: 500;">{{ $application['email'] ?? '—' }}</a>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- Loan Request -->
                    <tr>
                        <td style="padding: 24px 48px 0 48px;">
                            <p style="margin: 0 0 14px 0; font-size: 11px; font-weight: 700; color: #a8b2c1; text-transform: uppercase; letter-spacing: 1.2px;">Loan Request</p>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #e2e6ed; border-radius: 6px; overflow: hidden;">

                                <tr style="background-color: #f8f9fb;">
                                    <td width="34%" style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Amount Requested</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <span style="font-size: 15px; font-weight: 700; color: #0a1f3f;">US$ {{ isset($application['loan_amount']) ? number_format($application['loan_amount'], 2) : '0.00' }}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Repayment Period</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 14px; color: #334155; font-weight: 500;">
                                            @if(isset($application['repayment_period_other']) && $application['repayment_period_other'])
                                                {{ $application['repayment_period_other'] }} month(s)
                                            @else
                                                {{ $application['repayment_period'] ?? '—' }} month(s)
                                            @endif
                                        </span>
                                    </td>
                                </tr>

                                <tr style="background-color: #f8f9fb;">
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Employer</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <span style="font-size: 14px; color: #334155; font-weight: 500;">{{ $application['employer_name'] ?? '—' }}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 13px 16px; background-color: #ffffff; vertical-align: top;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Purpose</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-left: 1px solid #e2e6ed; background-color: #ffffff; vertical-align: top;">
                                        <span style="font-size: 14px; color: #334155; line-height: 1.6;">{{ $application['reason_for_loan'] ?? '—' }}</span>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- PDF Attachment Notice -->
                    <tr>
                        <td style="padding: 24px 48px 0 48px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f8f9fb; border: 1px solid #e2e6ed; border-radius: 6px;">
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <span style="font-size: 13px; font-weight: 600; color: #0a1f3f; display: block; margin-bottom: 4px;">PDF Application Attached</span>
                                        <span style="font-size: 13px; color: #64748b; line-height: 1.5;">The complete application form is attached as a PDF. Please review all details in the attached document before contacting the applicant.</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- CTA Buttons -->
                    <tr>
                        <td style="padding: 28px 48px 8px 48px;">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding-right: 12px;">
                                        <a href="mailto:{{ $application['email'] ?? '' }}?subject=Re: Your Loan Application {{ $applicationNumber }} - Vision Plus Wealth&body=Dear {{ $fullName }},%0D%0A%0D%0AThank you for submitting your loan application to Vision Plus Wealth.%0D%0A%0D%0A"
                                           style="display: inline-block; background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px; font-weight: 600; letter-spacing: 0.2px;">
                                            Reply to Applicant
                                        </a>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $application['contact_cell'] ?? '' }}"
                                           style="display: inline-block; background-color: #ffffff; color: #0a1f3f; text-decoration: none; padding: 11px 24px; border-radius: 6px; font-size: 14px; font-weight: 600; letter-spacing: 0.2px; border: 1px solid #c8cfd9;">
                                            Call Applicant
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Helper note -->
                    <tr>
                        <td style="padding: 12px 48px 40px 48px;">
                            <p style="margin: 0; font-size: 13px; color: #a8b2c1; line-height: 1.6;">
                                Please contact the applicant within 24–48 hours to confirm receipt and arrange the next steps.
                            </p>
                        </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                        <td style="padding: 0 48px;">
                            <div style="height: 1px; background-color: #e2e6ed;"></div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 28px 48px 36px 48px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <span style="font-size: 13px; font-weight: 700; color: #0a1f3f;">Vision Plus Wealth</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="margin: 0; font-size: 12px; color: #a8b2c1; line-height: 1.8;">
                                            Suite EF05-09 Lonrho Building, 90 Nelson Mandela Avenue, Harare, Zimbabwe<br>
                                            <a href="tel:+263777229401" style="color: #a8b2c1; text-decoration: none;">+263 (777) 229 401</a>
                                            &nbsp;&middot;&nbsp;
                                            <a href="mailto:info@visionpluswealth.com" style="color: #a8b2c1; text-decoration: none;">info@visionpluswealth.com</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 14px;">
                                        <p style="margin: 0; font-size: 12px; color: #c8cfd9;">
                                            Automated notification from the Vision Plus Wealth loan application system &nbsp;&middot;&nbsp; &copy; {{ date('Y') }} Vision Plus Wealth. All rights reserved.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
                <!-- /Email Card -->

            </td>
        </tr>
    </table>

</body>
</html>
