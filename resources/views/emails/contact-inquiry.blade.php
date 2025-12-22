<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Lead - {{ $data['fullname'] ?? 'Customer' }} - Vision Plus Wealth</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f7fa; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;">
    <!-- Main Container -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f4f7fa;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <!-- Email Wrapper -->
                <table width="650" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);">

                    <!-- Header Section -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); padding: 35px 40px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <!-- Brand and Badge Row -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="text-align: left;">
                                                    <div style="font-size: 24px; font-weight: 800; color: #ffffff; margin-bottom: 4px;"> Vision Plus Wealth</div>
                                                    <div style="font-size: 11px; font-weight: 600; color: #ffffff; text-transform: uppercase; letter-spacing: 1.2px;">Our Promise To You</div>
                                                </td>
                                                <td style="text-align: right;">
                                                    <span style="display: inline-block; background: #ff4444; color: #ffffff; padding: 8px 16px; border-radius: 20px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px;">ACTION REQUIRED</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Title Row -->
                                <tr>
                                    <td>
                                        <h1 style="margin: 0 0 8px 0; font-size: 28px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">New Customer Inquiry</h1>
                                        <p style="margin: 0; font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.85);">
                                            {{ $data['loanType'] ?? 'Loan Inquiry' }} • {{ now()->format('M j, Y') }} • {{ now()->format('g:i A') }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Priority Banner -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #fff8e1 0%, #fffbea 100%); border-left: 4px solid #ffc107; padding: 16px 40px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="text-align: left;">
                                        <span style="font-size: 18px; margin-right: 8px;">⚡</span>
                                        <span style="font-size: 14px; font-weight: 700; color: #856404;">High Priority Lead - Immediate Response Required</span>
                                    </td>
                                    <td style="text-align: right; white-space: nowrap;">
                                        <span style="font-size: 12px; font-weight: 600; color: #856404; background: rgba(255, 193, 7, 0.2); padding: 6px 12px; border-radius: 12px;">Response Time: &lt; 2 hours</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Main Body -->
                    <tr>
                        <td style="padding: 40px;">

                            <!-- Customer Information Card -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 24px;">
                                <tr>
                                    <td style="padding: 32px;">
                                        <!-- Card Header -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #f7fafc;">
                                            <tr>
                                                <td>
                                                    <span style="display: inline-block; width: 44px; height: 44px; background: linear-gradient(135deg, #0A4D8C 0%, #07294e 100%); border-radius: 12px; text-align: center; line-height: 44px; font-size: 20px; margin-right: 12px; vertical-align: middle;">👤</span>
                                                    <span style="font-size: 18px; font-weight: 700; color: #1a202c; vertical-align: middle;">Customer Information</span>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Customer Fields -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="12">
                                            <!-- Full Name -->
                                            <tr>
                                                <td style="padding: 12px 0;">
                                                    <div style="font-size: 11px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">Full Name</div>
                                                    <div style="font-size: 15px; font-weight: 600; color: #1a202c;">{{ $data['fullname'] ?? 'N/A' }}</div>
                                                </td>
                                            </tr>
                                            <!-- Email -->
                                            <tr>
                                                <td style="padding: 12px 0;">
                                                    <div style="font-size: 11px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">Email Address</div>
                                                    <div style="font-size: 15px; font-weight: 600;">
                                                        <a href="mailto:{{ $data['email'] ?? '' }}" style="color: #07294e; text-decoration: none;">{{ $data['email'] ?? 'N/A' }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Phone -->
                                            <tr>
                                                <td style="padding: 12px 0;">
                                                    <div style="font-size: 11px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">Phone Number</div>
                                                    <div style="font-size: 15px; font-weight: 600;">
                                                        <a href="tel:{{ $data['phone'] ?? '' }}" style="color: #07294e; text-decoration: none;">{{ $data['phone'] ?? 'N/A' }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Loan Type -->
                                            <tr>
                                                <td style="padding: 12px 0;">
                                                    <div style="font-size: 11px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">Loan Type of Interest</div>
                                                    <div style="font-size: 15px; font-weight: 600; color: #1a202c;">
                                                        <span style="display: inline-block; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); color: #ffffff; padding: 6px 14px; border-radius: 8px; font-size: 13px; font-weight: 700; margin-right: 8px;">{{ $data['loanType'] ?? 'N/A' }}</span>
                                                        <span style="display: inline-block; background: linear-gradient(135deg, #ffc107 0%, #ffb300 100%); color: #000000; padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; text-transform: uppercase;">New Lead</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Date -->
                                            <tr>
                                                <td style="padding: 12px 0;">
                                                    <div style="font-size: 11px; font-weight: 600; color: #718096; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">Inquiry Date & Time</div>
                                                    <div style="font-size: 15px; font-weight: 600; color: #1a202c;">{{ now()->format('l, F j, Y \a\t g:i A') }}</div>
                                                </td>
                                            </tr>
                                        </table>

                                        @if(!empty($data['message']))
                                        <!-- Message Card -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: linear-gradient(135deg, #f0f4ff 0%, #f0f4ff 100%); border: 1px solid #d6e0ff; border-left: 4px solid #07294e; border-radius: 12px; margin-top: 20px;">
                                            <tr>
                                                <td style="padding: 20px 24px;">
                                                    <div style="font-size: 12px; font-weight: 700; color: #07294e; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">💬 Customer's Message</div>
                                                    <div style="font-size: 15px; font-weight: 500; color: #475569; line-height: 1.8; font-style: italic; padding: 12px; background: rgba(255, 255, 255, 0.7); border-radius: 8px; border-left: 3px solid #07294e;">
                                                        "{{ $data['message'] }}"
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        @endif
                                    </td>
                                </tr>
                            </table>

                            <!-- Action Section -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: linear-gradient(135deg, #f0fdf4 0%, #0A4D8C 100%); border: 2px solid #07294e; border-radius: 16px; margin: 24px 0;">
                                <tr>
                                    <td style="padding: 28px 32px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding-bottom: 12px;">
                                                    <span style="font-size: 20px; margin-right: 8px;">🎯</span>
                                                    <span style="font-size: 17px; font-weight: 800; color: #07294e;">Quick Action Required</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 20px;">
                                                    <p style="margin: 0; font-size: 14px; font-weight: 500; color: #07294e; line-height: 1.6;">
                                                        Respond within <strong>2 hours</strong> to maximize conversion rate (65% higher) and deliver exceptional customer service.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!-- Buttons -->
                                                    <table border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td style="padding-right: 12px; padding-bottom: 12px;">
                                                                <a href="mailto:{{ $data['email'] ?? '' }}?subject=Re: Your Loan Inquiry - Vision Plus Wealth&body=Dear {{ $data['fullname'] ?? 'Valued Customer' }},%0D%0A%0D%0AThank you for your interest in  Vision Plus Wealth.%0D%0A%0D%0A" style="display: inline-block; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); color: #ffffff; text-decoration: none; padding: 14px 28px; border-radius: 10px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px #0a4d8c;">
                                                                    ✉️ Reply via Email
                                                                </a>
                                                            </td>
                                                            <td style="padding-bottom: 12px;">
                                                                <a href="tel:{{ $data['phone'] ?? '' }}" style="display: inline-block; background: linear-gradient(135deg, #1e293b 0%, #334155 100%); color: #ffffff; text-decoration: none; padding: 14px 28px; border-radius: 10px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(30, 41, 59, 0.3);">
                                                                    📞 Call Customer Now
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Next Steps -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
                                <tr>
                                    <td style="padding: 24px 28px;">
                                        <div style="font-size: 16px; font-weight: 700; color: #1a202c; margin-bottom: 16px;">
                                            📋 Recommended Next Steps
                                        </div>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="6">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <span style="display: inline-block; width: 20px; height: 20px; background: #07294e; color: #ffffff; border-radius: 50%; text-align: center; line-height: 20px; font-size: 11px; font-weight: 700; margin-right: 12px;">✓</span>
                                                    <span style="font-size: 14px; font-weight: 500; color: #475569;">Contact the customer within 2 hours for best conversion rate</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <span style="display: inline-block; width: 20px; height: 20px; background: #07294e; color: #ffffff; border-radius: 50%; text-align: center; line-height: 20px; font-size: 11px; font-weight: 700; margin-right: 12px;">✓</span>
                                                    <span style="font-size: 14px; font-weight: 500; color: #475569;">Review their loan type interest and prepare relevant product information</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <span style="display: inline-block; width: 20px; height: 20px; background: #07294e; color: #ffffff; border-radius: 50%; text-align: center; line-height: 20px; font-size: 11px; font-weight: 700; margin-right: 12px;">✓</span>
                                                    <span style="font-size: 14px; font-weight: 500; color: #475569;">Have eligibility criteria and documentation requirements ready</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <span style="display: inline-block; width: 20px; height: 20px; background: #07294e; color: #ffffff; border-radius: 50%; text-align: center; line-height: 20px; font-size: 11px; font-weight: 700; margin-right: 12px;">✓</span>
                                                    <span style="font-size: 14px; font-weight: 500; color: #475569;">Schedule a follow-up meeting or call if needed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <span style="display: inline-block; width: 20px; height: 20px; background: #07294e; color: #ffffff; border-radius: 50%; text-align: center; line-height: 20px; font-size: 11px; font-weight: 700; margin-right: 12px;">✓</span>
                                                    <span style="font-size: 14px; font-weight: 500; color: #475569;">Log this inquiry in your CRM system for tracking</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); padding: 40px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <!-- Footer Columns -->
                                <tr>
                                    <td width="50%" style="padding-right: 20px; vertical-align: top;">
                                        <div style="font-size: 18px; font-weight: 800; color: #ffffff; margin-bottom: 8px;"> Vision Plus Wealth</div>
                                        <p style="margin: 0; font-size: 13px; color: #a0aec0; line-height: 1.8;">Instant Cash Loans for Your Financial Needs</p>
                                        <p style="margin: 12px 0 0 0; font-size: 13px; color: #a0aec0; line-height: 1.8;">Trusted by thousands across Zimbabwe</p>
                                    </td>
                                    <td width="50%" style="padding-left: 20px; vertical-align: top;">
                                        <div style="font-size: 13px; font-weight: 700; color: #ffffff; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 1px;">Contact Information</div>
                                        <p style="margin: 6px 0; font-size: 13px; color: #a0aec0; line-height: 1.8;">Suite EF05-09 Lonrho Building<br>90 Nelson Mandela Avenue</p>
                                        <p style="margin: 6px 0; font-size: 13px; line-height: 1.8;">
                                            <a href="tel:+263777157102" style="color: #ffffff; text-decoration: none; font-weight: 600;">+263 (777) 229 401</a>
                                        </p>
                                        <p style="margin: 6px 0; font-size: 13px; line-height: 1.8;">
                                            <a href="mailto:info@visionpluswealth.com" style="color: #ffffff; text-decoration: none; font-weight: 600;">info@payhousefinance.com</a>
                                        </p>
                                    </td>
                                </tr>
                                <!-- Divider -->
                                <tr>
                                    <td colspan="2" style="padding: 28px 0;">
                                        <div style="height: 1px; background: #0A4D8C;"></div>
                                    </td>
                                </tr>
                                <!-- Bottom Footer -->
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <p style="margin: 0; font-size: 12px; color: #718096; line-height: 1.8;">This is an automated notification from the Payhouse Finance contact form.</p>
                                        <p style="margin: 8px 0 0 0; font-size: 12px; color: #718096;">© {{ date('Y') }} Payhouse Finance. All rights reserved.</p>
                                        <p style="margin: 12px 0 0 0; font-size: 12px;">
                                            <a href="https://visionpluswealth.com" style="color: #ffffff; text-decoration: none; margin: 0 8px;">Website</a> |
                                            <a href="mailto:info@visionpluswealth.com" style="color: #ffffff; text-decoration: none; margin: 0 8px;">Email Support</a> |
                                            <a href="tel:+263777157102" style="color: #ffffff; text-decoration: none; margin: 0 8px;">Call Us</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
