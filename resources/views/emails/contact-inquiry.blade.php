<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Inquiry — {{ $data['fullname'] ?? 'Customer' }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f0f2f5; font-family: -apple-system, BlinkMacSystemFont, 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f0f2f5;">
        <tr>
            <td align="center" style="padding: 48px 20px;">

                <!-- Email Card -->
                <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 8px 24px rgba(10, 31, 63, 0.12);">

                    <!-- Top Accent Bar (brand primary gradient) -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); height: 4px; font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 48px 28px 48px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <!-- Brand wordmark -->
                                        <div style="font-size: 18px; font-weight: 800; color: #0a1f3f; letter-spacing: -0.3px;">Vision Plus Wealth</div>
                                        <div style="font-size: 11px; font-weight: 500; color: #a8b2c1; letter-spacing: 0.8px; text-transform: uppercase; margin-top: 3px;">Empowering Your Financial Journey</div>
                                    </td>
                                    <td style="text-align: right; vertical-align: top;">
                                        <span style="display: inline-block; background-color: #f0f2f5; color: #0a1f3f; padding: 5px 14px; border-radius: 100px; font-size: 11px; font-weight: 700; letter-spacing: 0.6px; text-transform: uppercase; border: 1px solid #e2e6ed;">New Lead</span>
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
                            <h1 style="margin: 0 0 6px 0; font-size: 24px; font-weight: 700; color: #0f172a; letter-spacing: -0.4px; line-height: 1.3;">New Inquiry Received</h1>
                            <p style="margin: 0; font-size: 14px; color: #64748b; line-height: 1.5;">
                                {{ $data['loanType'] ?? 'Loan Inquiry' }} &nbsp;&middot;&nbsp; {{ now()->format('l, F j, Y') }} at {{ now()->format('g:i A') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Customer Details -->
                    <tr>
                        <td style="padding: 28px 48px 0 48px;">
                            <p style="margin: 0 0 14px 0; font-size: 11px; font-weight: 700; color: #a8b2c1; text-transform: uppercase; letter-spacing: 1.2px;">Contact Details</p>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #e2e6ed; border-radius: 6px; overflow: hidden;">

                                <!-- Full Name -->
                                <tr style="background-color: #f8f9fb;">
                                    <td width="34%" style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Full Name</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <span style="font-size: 14px; color: #0f172a; font-weight: 600;">{{ $data['fullname'] ?? '—' }}</span>
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Email</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <a href="mailto:{{ $data['email'] ?? '' }}" style="font-size: 14px; color: #4a6fa5; text-decoration: none; font-weight: 500;">{{ $data['email'] ?? '—' }}</a>
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr style="background-color: #f8f9fb;">
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Phone</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed;">
                                        <a href="tel:{{ $data['phone'] ?? '' }}" style="font-size: 14px; color: #4a6fa5; text-decoration: none; font-weight: 500;">{{ $data['phone'] ?? '—' }}</a>
                                    </td>
                                </tr>

                                <!-- Loan Type -->
                                <tr>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Loan Type</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-bottom: 1px solid #e2e6ed; border-left: 1px solid #e2e6ed; background-color: #ffffff;">
                                        <span style="font-size: 14px; color: #0f172a; font-weight: 500;">{{ $data['loanType'] ?? '—' }}</span>
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr style="background-color: #f8f9fb;">
                                    <td style="padding: 13px 16px; vertical-align: top;">
                                        <span style="font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Message</span>
                                    </td>
                                    <td style="padding: 13px 16px; border-left: 1px solid #e2e6ed; vertical-align: top;">
                                        <span style="font-size: 14px; color: #334155; line-height: 1.7;">{{ $data['message'] ?? '—' }}</span>
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
                                        <a href="mailto:{{ $data['email'] ?? '' }}?subject=Re: Your {{ $data['loanType'] ?? 'Loan' }} Inquiry - Vision Plus Wealth&body=Dear {{ $data['fullname'] ?? 'Valued Customer' }},%0D%0A%0D%0AThank you for reaching out to Vision Plus Wealth.%0D%0A%0D%0A"
                                           style="display: inline-block; background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px; font-weight: 600; letter-spacing: 0.2px;">
                                            Reply to Customer
                                        </a>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $data['phone'] ?? '' }}"
                                           style="display: inline-block; background-color: #ffffff; color: #0a1f3f; text-decoration: none; padding: 11px 24px; border-radius: 6px; font-size: 14px; font-weight: 600; letter-spacing: 0.2px; border: 1px solid #c8cfd9;">
                                            Call Customer
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
                                Responding within 2 hours significantly increases conversion. Please follow up promptly.
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
                                            Automated notification from the Vision Plus Wealth contact form &nbsp;&middot;&nbsp; &copy; {{ date('Y') }} Vision Plus Wealth. All rights reserved.
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
