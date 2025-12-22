<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Loan Application - {{ $data['application_number'] ?? 'N/A' }}</title>
    <style>
        @page {
            margin: 20mm 18mm;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9.5pt;
            line-height: 1.5;
            color: #000;
            background: #fff;
        }

        .page {
            width: 100%;
            padding: 5px 15px 5px 5px;
        }

        /* Header */
        .header {
            margin-bottom: 22px;
            padding-bottom: 10px;
            border-bottom: 2px solid #1e3a5f;
        }

        .header-row {
            display: table;
            width: 100%;
            margin-bottom: 12px;
        }

        .app-number {
            display: table-cell;
            width: 32%;
            text-align: left;
            font-weight: bold;
            font-size: 9.5pt;
            vertical-align: top;
            padding: 8px 10px;
        }

        .logo-container {
            display: table-cell;
            width: 36%;
            text-align: center;
            vertical-align: middle;
            padding: 8px;
        }

        .logo {
            max-width: 190px;
            height: auto;
        }

        .branch {
            display: table-cell;
            width: 32%;
            text-align: right;
            font-weight: bold;
            font-size: 9.5pt;
            vertical-align: top;
            padding: 8px 10px;
        }

        .dotted-line {
            border-bottom: 1.5px dotted #000;
            display: inline-block;
            min-width: 120px;
            padding: 2px 0;
        }

        .company-name {
            text-align: center;
            font-weight: bold;
            font-size: 12pt;
            color: #1e3a5f;
            margin: 8px 0 12px 0;
            letter-spacing: 0.5px;
        }

        .form-title {
            background: #1e3a5f;
            color: white;
            font-size: 12pt;
            font-weight: bold;
            padding: 12px 15px;
            text-align: center;
            letter-spacing: 2px;
            margin-bottom: 18px;
            border-radius: 2px;
        }

        /* Section Headings */
        .section-heading {
            font-weight: bold;
            font-size: 10pt;
            margin-top: 18px;
            margin-bottom: 10px;
            padding: 6px 10px;
            background: #f5f5f5;
            border-left: 4px solid #1e3a5f;
            border-bottom: 1px solid #ccc;
        }

        /* Field Groups */
        .field-row {
            display: table;
            width: 100%;
            margin-bottom: 12px;
        }

        .field-group {
            display: table-cell;
            padding-right: 18px;
            vertical-align: top;
        }

        .field-group:last-child {
            padding-right: 0;
        }

        .field-label {
            font-weight: bold;
            font-size: 9pt;
            margin-bottom: 4px;
            display: block;
            color: #333;
        }

        .field-value {
            border: 1.5px solid #444;
            min-height: 24px;
            padding: 6px 8px;
            font-size: 9.5pt;
            display: block;
            background: #fff;
            line-height: 1.4;
        }

        /* Address Boxes */
        .address-row {
            display: table;
            width: 100%;
            margin-bottom: 14px;
        }

        .address-box {
            display: table-cell;
            width: 50%;
            padding-right: 10px;
        }

        .address-box:last-child {
            padding-right: 0;
            padding-left: 10px;
        }

        .address-field {
            border: 1.5px solid #444;
            min-height: 75px;
            padding: 10px 12px;
            font-size: 9.5pt;
            background: #fff;
            line-height: 1.5;
        }

        /* Contact Numbers Row */
        .contact-numbers {
            margin-bottom: 12px;
            display: table;
            width: 100%;
        }

        .contact-numbers .field-label {
            display: table-cell;
            width: 22%;
            font-weight: bold;
            font-size: 9pt;
            vertical-align: middle;
            border: 1.5px solid #444;
            padding: 8px 10px;
            background: #f9f9f9;
        }

        .contact-numbers .inline-field {
            display: table-cell;
            border: 1.5px solid #444;
            border-left: none;
            padding: 8px 10px;
            vertical-align: middle;
            background: #fff;
        }

        .contact-numbers .inline-field strong {
            font-size: 9pt;
            margin-right: 6px;
            font-weight: bold;
        }

        .contact-numbers .inline-field span {
            font-size: 9.5pt;
        }

        /* Checkboxes */
        .checkbox-group {
            margin-bottom: 12px;
        }

        .checkbox {
            display: inline-block;
            width: 13px;
            height: 13px;
            border: 2px solid #333;
            margin: 0 5px 0 10px;
            vertical-align: middle;
            text-align: center;
            line-height: 13px;
            font-size: 9pt;
            background: #fff;
        }

        .checkbox.checked::before {
            content: '✓';
            font-weight: bold;
            color: #000;
            font-size: 10pt;
        }

        .checkbox.unchecked::before {
            content: '✗';
            font-weight: normal;
            color: #999;
            font-size: 9pt;
        }

        /* Next of Kin Boxes */
        .nok-row {
            display: table;
            width: 100%;
            margin-bottom: 16px;
            margin-top: 8px;
            table-layout: fixed;
            border-collapse: collapse;
        }

        .nok-box {
            display: table-cell;
            width: 50%;
            border: 2px solid #444;
            padding: 14px 16px;
            vertical-align: top;
            background: #fafafa;
        }

        .nok-box:first-child {
            border-right: 1px solid #444;
        }

        .nok-box:last-child {
            border-left: 1px solid #444;
        }

        .nok-number {
            font-weight: bold;
            font-size: 11pt;
            display: inline-block;
            width: 22px;
            vertical-align: top;
            color: #1e3a5f;
        }

        .nok-field {
            margin-bottom: 10px;
            font-size: 9pt;
            line-height: 1.5;
            clear: both;
        }

        .nok-field:last-child {
            margin-bottom: 0;
        }

        .nok-field strong {
            font-weight: bold;
            color: #333;
        }

        .nok-field .value {
            padding-left: 8px;
            display: block;
            margin-top: 3px;
        }

        /* Loan Details Banner */
        .tick-banner {
            background: #1e3a5f;
            color: white;
            text-align: center;
            padding: 10px 12px;
            font-weight: bold;
            font-size: 10pt;
            margin-top: 16px;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .loan-details {
            margin-bottom: 14px;
        }

        .loan-row {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }

        .loan-field {
            display: table-cell;
            padding: 6px 8px;
        }

        .reason-box {
            border: 2px solid #444;
            min-height: 60px;
            padding: 12px 14px;
            margin-bottom: 14px;
            margin-top: 6px;
            background: #fff;
            font-size: 9.5pt;
            line-height: 1.5;
        }

        /* Terms */
        .terms {
            font-size: 9pt;
            line-height: 1.6;
            text-align: justify;
            margin: 16px 0;
            padding: 14px 16px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 2px;
        }

        .terms p {
            margin-bottom: 10px;
            text-indent: 0;
        }

        .terms p:last-child {
            margin-bottom: 0;
        }

        /* Signature */
        .signature-row {
            margin: 30px 0 25px 0;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }

        .signature-row strong {
            font-size: 9.5pt;
            font-weight: bold;
            color: #333;
        }

        .signature-line {
            border-bottom: 2px dotted #333;
            display: inline-block;
            min-width: 280px;
            padding: 3px 0;
            margin: 0 10px;
        }

        /* Banking Table */
        .banking-table {
            width: 100%;
            margin-bottom: 12px;
        }

        .banking-table .field-row {
            margin-bottom: 10px;
        }

        /* Referrals Table */
        table.referrals {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
            margin-bottom: 20px;
        }

        table.referrals th,
        table.referrals td {
            border: 2px solid #444;
            padding: 10px 12px;
            font-size: 9.5pt;
        }

        table.referrals th {
            background: #f5f5f5;
            font-weight: bold;
            text-align: center;
            color: #333;
        }

        table.referrals td {
            background: #fff;
        }

        table.referrals td:first-child {
            text-align: center;
            width: 10%;
            font-weight: bold;
            background: #fafafa;
            color: #1e3a5f;
        }

        /* Footer */
        .footer {
            text-align: right;
            font-weight: bold;
            font-size: 10.5pt;
            margin-top: 12px;
            padding: 8px 0;
            color: #333;
        }

        .not-for-sale {
            text-align: center;
            font-weight: bold;
            color: #d32f2f;
            font-size: 11.5pt;
            margin-top: 25px;
            padding: 12px 16px;
            background: #fff3cd;
            border: 2px solid #d32f2f;
            letter-spacing: 1px;
        }

        /* Page break */
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <!-- PAGE 1 -->
    <div class="page">
        <!-- Header -->
        <div class="header">
            <div class="header-row">
                <div class="app-number">
                    <strong>Application Number</strong><br>
                    <span style="font-size: 8.5pt;">{{ $data['application_number'] ?? '' }}</span>
                </div>
                <div class="logo-container">
                    {{-- Logo removed as per requirements --}}
                </div>
                <div class="branch">
                    <strong>Branch</strong><br>
                    <span class="dotted-line">{{ $data['branch'] ?? '' }}</span>
                </div>
            </div>
            <div class="company-name">Vision Plus Wealth (Pvt) Ltd</div>
        </div>

        <div class="form-title">LOAN APPLICATION FORM</div>

        <!-- Personal Details -->
        <div class="section-heading">Personal Details</div>

        <div class="field-row">
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Surname</span>
                <span class="field-value">{{ $data['surname'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 50%;">
                <span class="field-label">First Names</span>
                <span class="field-value">{{ $data['first_names'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 25%;">
                <span class="field-label">Mr./Mrs.</span>
                <span class="field-value">{{ $data['title'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 75%;">
                <span class="field-label">Gender</span>
                <span class="field-value">{{ $data['gender'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 33%;">
                <span class="field-label">Date of Birth</span>
                <span class="field-value">{{ isset($data['date_of_birth']) ? \Carbon\Carbon::parse($data['date_of_birth'])->format('d/m/Y') : '' }}</span>
            </div>
            <div class="field-group" style="width: 67%;">
                <span class="field-label">Nationality</span>
                <span class="field-value">{{ $data['nationality'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Identity Number</span>
                <span class="field-value">{{ $data['identity_number'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Marital Status</span>
                <span class="field-value">{{ $data['marital_status'] ?? '' }}</span>
            </div>
        </div>

        <!-- Contact Details -->
        <div class="section-heading">Contact Details</div>

        <div class="address-row">
            <div class="address-box">
                <span class="field-label">Residential Address</span>
                <div class="address-field">{{ $data['residential_address'] ?? '' }}</div>
            </div>
            <div class="address-box">
                <span class="field-label">Postal Address</span>
                <div class="address-field">{{ $data['postal_address'] ?? '' }}</div>
            </div>
        </div>

        <div class="contact-numbers">
            <div class="field-label">Contact Numbers:</div>
            <div class="inline-field">
                <strong>Home:</strong> <span>{{ $data['contact_home'] ?? '' }}</span>
            </div>
            <div class="inline-field">
                <strong>Business:</strong> <span>{{ $data['contact_business'] ?? '' }}</span>
            </div>
            <div class="inline-field">
                <strong>Cell:</strong> <span>{{ $data['contact_cell'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Email Address</span>
                <span class="field-value">{{ $data['email'] ?? '' }}</span>
            </div>
        </div>

        <!-- Employment Details -->
        <div class="section-heading">Employment Details</div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Employer's Name</span>
                <span class="field-value">{{ $data['employer_name'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Employer's Physical Address</span>
                <span class="field-value">{{ $data['employer_address'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Occupation and Department</span>
                <span class="field-value">{{ $data['occupation_department'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Name of Immediate Manager and contact phone number:</span>
                <span class="field-value">{{ $data['manager_name_contact'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row checkbox-group">
            <div class="field-group" style="width: 55%;">
                <span class="field-label">Status of employment</span>
                <div>
                    <span class="checkbox {{ (isset($data['employment_status']) && $data['employment_status'] == 'Permanent') ? 'checked' : '' }}"></span>Permanent
                    <span class="checkbox {{ (isset($data['employment_status']) && $data['employment_status'] == 'Casual') ? 'checked' : '' }}"></span>Casual
                    <span class="checkbox {{ (isset($data['employment_status']) && $data['employment_status'] == 'Contract') ? 'checked' : '' }}"></span>Contract
                </div>
            </div>
            <div class="field-group" style="width: 22%;">
                <span class="field-label">Date of employment</span>
                <span class="field-value">{{ isset($data['date_of_employment']) ? \Carbon\Carbon::parse($data['date_of_employment'])->format('d/m/Y') : '' }}</span>
            </div>
            <div class="field-group" style="width: 23%;">
                <span class="field-label">Date contract expires</span>
                <span class="field-value">{{ isset($data['date_contract_expires']) ? \Carbon\Carbon::parse($data['date_contract_expires'])->format('d/m/Y') : '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Employee Number</span>
                <span class="field-value">{{ $data['employee_number'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Leave Days on Payslip</span>
                <span class="field-value">{{ $data['leave_days_payslip'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Gross Monthly Income US$</span>
                <span class="field-value">$ {{ isset($data['gross_monthly_income']) ? number_format($data['gross_monthly_income'], 2) : '' }}</span>
            </div>
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Net Income US$</span>
                <span class="field-value">$ {{ isset($data['net_monthly_income']) ? number_format($data['net_monthly_income'], 2) : '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Next Pay date</span>
                <span class="field-value">{{ isset($data['next_pay_date']) ? \Carbon\Carbon::parse($data['next_pay_date'])->format('d/m/Y') : '' }}</span>
            </div>
        </div>

        <!-- Next of Kin -->
        <div class="section-heading">Next of Kin/Spouse/Partner/Referee (please provide detail of two people with different addresses)</div>

        <div class="nok-row">
            <div class="nok-box">
                <div class="nok-field">
                    <span class="nok-number">1</span> <strong>Full Name:</strong>
                    <span class="value">{{ $data['nok1_full_name'] ?? '' }}</span>
                </div>

                <div class="nok-field">
                    <strong>Relationship:</strong> <span style="padding-left: 5px;">{{ $data['nok1_relationship'] ?? '' }}</span>
                </div>

                <div class="nok-field">
                    <strong>Phone No:</strong>
                    <span class="value">
                        Home: {{ $data['nok1_phone_home'] ?? '' }}<br>
                        Bus.: {{ $data['nok1_phone_business'] ?? '' }}<br>
                        Cell: {{ $data['nok1_phone_cell'] ?? '' }}
                    </span>
                </div>

                <div class="nok-field">
                    <strong>Employer name and address:</strong>
                    <span class="value">{{ $data['nok1_employer_address'] ?? '' }}</span>
                </div>
            </div>

            <div class="nok-box">
                <div class="nok-field">
                    <span class="nok-number">2</span> <strong>Full Name:</strong>
                    <span class="value">{{ $data['nok2_full_name'] ?? '' }}</span>
                </div>

                <div class="nok-field">
                    <strong>Relationship:</strong> <span style="padding-left: 5px;">{{ $data['nok2_relationship'] ?? '' }}</span>
                </div>

                <div class="nok-field">
                    <strong>Phone No:</strong>
                    <span class="value">
                        Home: {{ $data['nok2_phone_home'] ?? '' }}<br>
                        Bus.: {{ $data['nok2_phone_business'] ?? '' }}<br>
                        Cell: {{ $data['nok2_phone_cell'] ?? '' }}
                    </span>
                </div>

                <div class="nok-field">
                    <strong>Employer name and address:</strong>
                    <span class="value">{{ $data['nok2_employer_address'] ?? '' }}</span>
                </div>
            </div>
        </div>

        <!-- Loan Details -->
        <div class="tick-banner">Tick where appropriate</div>

        <div class="loan-details">
            <div class="loan-row">
                <div class="loan-field" style="width: 35%;">
                    <span class="field-label">Required Loan Amount</span>
                    <div><strong>US$</strong> {{ isset($data['loan_amount']) ? number_format($data['loan_amount'], 2) : '' }}</div>
                </div>
                <div class="loan-field" style="width: 65%;">
                    <span class="field-label">Repayment Period</span>
                    <div style="padding: 4px 0;">
                        <span class="checkbox {{ (isset($data['repayment_period']) && $data['repayment_period'] == '1') ? 'checked' : '' }}"></span><strong>1</strong>
                        <span class="checkbox {{ (isset($data['repayment_period']) && $data['repayment_period'] == '2') ? 'checked' : '' }}"></span><strong>2</strong>
                        <span class="checkbox {{ (isset($data['repayment_period']) && $data['repayment_period'] == '3') ? 'checked' : '' }}"></span><strong>3</strong>
                        <span class="checkbox {{ (isset($data['repayment_period']) && $data['repayment_period'] == '4') ? 'checked' : '' }}"></span><strong>4</strong>
                        <span class="checkbox {{ isset($data['repayment_period_other']) ? 'checked' : '' }}"></span><strong>Other</strong>
                        <span style="border-bottom: 2px solid #444; display: inline-block; min-width: 40px; text-align: center; padding: 2px 5px; font-weight: bold;">{{ $data['repayment_period_other'] ?? '' }}</span> <strong>Month(s)</strong>
                    </div>
                </div>
            </div>

            <div style="margin-top: 6px;">
                <span class="field-label">Reason for Loan</span>
                <div class="reason-box">{{ $data['reason_for_loan'] ?? '' }}</div>
            </div>
        </div>

        <div class="footer">PTO</div>
    </div>

    <div class="page-break"></div>

    <!-- PAGE 2 -->
    <div class="page">
        <!-- Existing Loans -->
        <div class="section-heading">Loans/Credit with other institutions</div>

        <div class="field-row">
            <div class="field-group" style="width: 33%;">
                <span class="field-label">Bank/Institution</span>
                <span class="field-value">{{ $data['existing_loan_institution'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 33%;">
                <span class="field-label">Branch</span>
                <span class="field-value">{{ $data['existing_loan_branch'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 34%;">
                <span class="field-label">Loan Amount US$</span>
                <span class="field-value">{{ isset($data['existing_loan_amount']) ? number_format($data['existing_loan_amount'], 2) : '' }}</span>
            </div>
        </div>

        <!-- Banking Details -->
        <div class="section-heading">Borrower's Banking Details</div>

        <div class="field-row">
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Bank:</span>
                <span class="field-value">{{ $data['bank_name'] ?? '' }}</span>
            </div>
            <div class="field-group" style="width: 50%;">
                <span class="field-label">Branch:</span>
                <span class="field-value">{{ $data['bank_branch'] ?? '' }}</span>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group" style="width: 100%;">
                <span class="field-label">Account Number:</span>
                <span class="field-value">{{ $data['account_number'] ?? '' }}</span>
            </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="terms">
            <p>I agree to abide by the terms and conditions of the loan.</p>

            <p>I agree that Vision Plus Wealth reserves the right to demand repayments of this loan without warning if there is an unsatisfactory conduct. I certify that the above details in support of my application for a loan are true and complete, and understand that in the event of any information proving to be inaccurate, this application may be declined.</p>

            <p>Should I fail to repay and Vision Plus Wealth proves that I am deliberately avoiding contact, so as to avoid payments, I authorise Vision Plus Wealth and/or its agent(s) to contact and advise next of kin/spouse/partner/referee and/or publish my name in the media, as part of the recovery process. I agree that legal action may be taken against me if I fail to repay the loan as per agreed terms. Cost of recovery will be to my account.</p>

            <p>I agree that information provided will be included in the Credit Reporting System (CRS), regulated by the <strong>Reserve Bank of Zimbabwe</strong>. The information collected will be used for evaluating my credit worthiness and will be shared with other creditors participating in the CRS.</p>

            <p>I agree that my loan may be disbursed into my bank account or Mobile Money Transfer (MNO) i.e. Ecocash, NettCash, Telecash, One Wallet etc.</p>
        </div>

        <!-- Signature -->
        <div class="signature-row">
            <strong>Signature:</strong> <span class="signature-line">&nbsp;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Date:</strong> <span class="signature-line">{{ $data['submission_date'] ?? '' }}</span>
        </div>

        <!-- Referrals -->
        <div class="section-heading">Referrals</div>

        <table class="referrals">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Contact number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $data['referral1_name'] ?? '' }}</td>
                    <td>{{ $data['referral1_contact'] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>{{ $data['referral2_name'] ?? '' }}</td>
                    <td>{{ $data['referral2_contact'] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>{{ $data['referral3_name'] ?? '' }}</td>
                    <td>{{ $data['referral3_contact'] ?? '' }}</td>
                </tr>
            </tbody>
        </table>

        <div class="not-for-sale">NB: THIS FORM IS NOT FOR SALE</div>
    </div>
</body>
</html>
