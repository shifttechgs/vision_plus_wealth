@extends('layouts.master')

@section('content')
<style>
    /* Loan Application Form Styles */
    .loan-application-wrapper {
        background: #f8f9fa;
        padding: 60px 0;
        min-height: 100vh;
    }

    .form-container {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 10px 50px rgba(0,0,0,0.15);
        padding: 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (max-width: 1400px) {
        .form-container {
            max-width: 100%;
            padding: 40px;
        }
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 30px 20px;
        }

        .loan-application-wrapper {
            padding: 40px 0;
        }
    }

    .vpw-logo-section {
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 3px solid #052b51;
    }

    .vpw-logo-section h1 {
        color: #2d3748;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .vpw-logo-section p {
        color: #0a4d8c;
        font-size: 14px;
    }

    /* Progress Indicator */
    .progress-indicator {
        margin-bottom: 40px;
    }

    .progress-steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        position: relative;
    }

    .progress-steps::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        height: 3px;
        background: #e2e8f0;
        z-index: 0;
    }

    .progress-line {
        position: absolute;
        top: 20px;
        left: 0;
        height: 3px;
        background: #052b51;
        transition: width 0.3s ease;
        z-index: 1;
    }

    .step-item {
        text-align: center;
        flex: 1;
        position: relative;
        z-index: 2;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e2e8f0;
        color: #0a4d8c;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-bottom: 8px;
        transition: all 0.3s ease;
    }

    .step-item.active .step-circle {
        background: #052b51;
        color: #ffffff;
        transform: scale(1.1);
    }

    .step-item.completed .step-circle {
        background: #48bb78;
        color: #ffffff;
    }

    .step-label {
        font-size: 18px;
        color: #052b51;
        font-weight: 600;
        display: block;
    }

    .step-item.active .step-label {
        color: #052b51;
    }

    /* Form Steps */
    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
        animation: fadeIn 0.4s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .section-title {
        color: #2d3748;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 30px;
        padding-bottom: 12px;
        border-bottom: 2px solid #052b51;
    }

    .form-label {
        font-weight: 600;
        color: #4a5568;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row > [class*='col-'] {
        padding-left: 15px;
        padding-right: 15px;
    }

    .form-control, .form-select {
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s ease;
        font-size: 14px;
        width: 100%;
    }

    .form-control:focus, .form-select:focus {
        border-color: #052b51;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }

    textarea.form-control {
        min-height: 100px;
        resize: vertical;
    }

    .mb-3 {
        margin-bottom: 20px !important;
    }

    .mb-4 {
        margin-bottom: 25px !important;
    }

    .required-field::after {
        content: ' *';
        color: #e53e3e;
    }

    /* Radio Button Group */
    .radio-group {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .radio-option {
        flex: 1;
        min-width: 120px;
    }

    .radio-option input[type="radio"] {
        display: none;
    }

    .radio-option label {
        display: block;
        padding: 12px 20px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        color: #4a5568;
    }

    .radio-option input[type="radio"]:checked + label {
        background: #052b51;
        border-color: #052b51;
        color: #ffffff;
    }

    /* Checkbox */
    .terms-checkbox {
        padding: 20px;
        background: #f7fafc;
        border-radius: 8px;
        border: 2px solid #e2e8f0;
        margin-bottom: 20px;
    }

    .terms-checkbox label {
        font-size: 13px;
        line-height: 1.6;
        color: #4a5568;
    }

    .terms-checkbox input[type="checkbox"] {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    /* Buttons */
    .form-navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #e2e8f0;
        gap: 15px;
    }

    .btn-prev, .btn-next, .btn-submit {
        padding: 14px 35px;
        border-radius: 8px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 15px;
    }

    .btn-prev {
        background: #e2e8f0;
        color: #4a5568;
    }

    .btn-prev:hover {
        background: #cbd5e0;
    }

    .btn-next, .btn-submit {
        background: #052b51;
        color: #ffffff;
    }

    .btn-next:hover, .btn-submit:hover {
        background: #052b51;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-submit {
        background: #48bb78;
    }

    .btn-submit:hover {
        background: #38a169;
        box-shadow: 0 5px 15px rgba(72, 187, 120, 0.3);
    }

    .btn-submit:disabled {
        background: #a0aec0;
        cursor: not-allowed;
        transform: none;
    }

    /* Loading Spinner */
    .btn-loader {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #ffffff;
        border-radius: 50%;
        border-top-color: transparent;
        animation: spin 0.6s linear infinite;
        margin-right: 8px;
        vertical-align: middle;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    .btn-text {
        vertical-align: middle;
    }

    /* Error Messages */
    .invalid-feedback {
        color: #e53e3e;
        font-size: 13px;
        margin-top: 5px;
    }

    .is-invalid {
        border-color: #e53e3e !important;
    }

    .alert {
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    /* Success Modal */
    .success-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    }

    .success-modal-overlay.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .success-modal {
        background: #ffffff;
        border-radius: 20px;
        padding: 50px 40px;
        max-width: 500px;
        width: 90%;
        text-align: center;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.4s ease;
        position: relative;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .success-modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: transparent;
        border: none;
        font-size: 28px;
        color: #a0aec0;
        cursor: pointer;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .success-modal-close:hover {
        background: #f7fafc;
        color: #4a5568;
    }

    .success-icon-wrapper {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        border-radius: 50%;
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: scaleIn 0.5s ease;
    }

    .success-icon-wrapper svg {
        width: 60px;
        height: 60px;
        stroke: white;
        stroke-width: 3;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        animation: checkmark 0.8s ease 0.2s forwards;
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
    }

    @keyframes scaleIn {
        from {
            transform: scale(0);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes checkmark {
        to {
            stroke-dashoffset: 0;
        }
    }

    .success-modal-title {
        color: #2d3748;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .success-modal-message {
        color: #0a4d8c;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .success-modal-app-number {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        border: 2px dashed #48bb78;
        border-radius: 10px;
        padding: 15px;
        margin: 20px 0;
    }

    .success-modal-app-number-label {
        color: #4a5568;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .success-modal-app-number-value {
        color: #48bb78;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 1px;
        font-family: 'Courier New', monospace;
    }

    .modal-auto-close {
        color: #a0aec0;
        font-size: 13px;
        margin-top: 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .form-container {
            padding: 25px 20px;
        }

        .vpw-logo-section h1 {
            font-size: 22px;
        }

        .step-label {
            font-size: 9px;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 14px;
        }

        .radio-group {
            flex-direction: column;
        }

        .radio-option {
            min-width: 100%;
        }
    }
</style>

    <!--===== HERO AREA STARTS =======-->
    <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="inner-header text-center">
                        <h2>Loan Application</h2>
                        <div class="space24"></div>
                        <a ><span>Complete your loan application in 5 simple steps.</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

<div class="loan-application-wrapper">
    <div class="container">
        <div class="form-container">
            <!-- Logo and Title -->
{{--            <div class="vpw-logo-section">--}}
{{--                <h1>Vision Plus Wealth (Pvt) Ltd</h1>--}}
{{--                <p>Loan Application Form</p>--}}
{{--            </div>--}}

            <!-- Progress Indicator -->
            <div class="progress-indicator">
                <div class="progress-steps">
                    <div class="progress-line" id="progressLine"></div>
                    <div class="step-item active" data-step="1">
                        <div class="step-circle">1</div>
                        <span class="step-label">Personal</span>
                    </div>
                    <div class="step-item" data-step="2">
                        <div class="step-circle">2</div>
                        <span class="step-label">Employment</span>
                    </div>
                    <div class="step-item" data-step="3">
                        <div class="step-circle">3</div>
                        <span class="step-label">Next of Kin</span>
                    </div>
                    <div class="step-item" data-step="4">
                        <div class="step-circle">4</div>
                        <span class="step-label">Loan Details</span>
                    </div>
                    <div class="step-item" data-step="5">
                        <div class="step-circle">5</div>
                        <span class="step-label">Banking</span>
                    </div>
                    <div class="step-item" data-step="6">
                        <div class="step-circle">6</div>
                        <span class="step-label">Review</span>
                    </div>
                </div>
            </div>

            <!-- Error Display -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Please correct the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Multi-Step Form -->
            <form action="{{ route('loan-application.index') }}" method="POST" id="loanApplicationForm" novalidate>
                @csrf

                <!-- Step 1: Personal & Contact Details -->
                <div class="form-step active" data-step="1">
                    <h3 class="section-title">Personal & Contact Details</h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Surname</label>
                            <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                                   value="{{ old('surname') }}" required>
                            @error('surname')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">First Names</label>
                            <input type="text" name="first_names" class="form-control @error('first_names') is-invalid @enderror"
                                   value="{{ old('first_names') }}" required>
                            @error('first_names')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Title (Mr./Mrs./Ms./Dr.)</label>
                            <select name="title" class="form-select @error('title') is-invalid @enderror" required>
                                <option value="">Select Title</option>
                                <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                            </select>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Gender</label>
                            <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                                   value="{{ old('date_of_birth') }}" required>
                            @error('date_of_birth')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Nationality</label>
                            <input type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror"
                                   value="{{ old('nationality') }}" required>
                            @error('nationality')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Identity Number</label>
                            <input type="text" name="identity_number" class="form-control @error('identity_number') is-invalid @enderror"
                                   value="{{ old('identity_number') }}" required>
                            @error('identity_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Marital Status</label>
                            <select name="marital_status" class="form-select @error('marital_status') is-invalid @enderror" required>
                                <option value="">Select Status</option>
                                <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Divorced" {{ old('marital_status') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                <option value="Widowed" {{ old('marital_status') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                            </select>
                            @error('marital_status')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <h4 class="mt-4 mb-3" style="color: #4a5568; font-size: 18px; font-weight: 600;">Contact Information</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Residential Address</label>
                            <textarea name="residential_address" rows="3" class="form-control @error('residential_address') is-invalid @enderror" required>{{ old('residential_address') }}</textarea>
                            @error('residential_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Postal Address</label>
                            <textarea name="postal_address" rows="3" class="form-control @error('postal_address') is-invalid @enderror">{{ old('postal_address') }}</textarea>
                            @error('postal_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Home Phone</label>
                            <input type="text" name="contact_home" class="form-control @error('contact_home') is-invalid @enderror"
                                   value="{{ old('contact_home') }}">
                            @error('contact_home')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Business Phone</label>
                            <input type="text" name="contact_business" class="form-control @error('contact_business') is-invalid @enderror"
                                   value="{{ old('contact_business') }}">
                            @error('contact_business')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label required-field">Cell Phone</label>
                            <input type="text" name="contact_cell" class="form-control @error('contact_cell') is-invalid @enderror"
                                   value="{{ old('contact_cell') }}" required>
                            @error('contact_cell')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" required>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- Step 2: Employment Details -->
                <div class="form-step" data-step="2">
                    <h3 class="section-title">Employment Details</h3>

                    <div class="mb-3">
                        <label class="form-label required-field">Employer's Name</label>
                        <input type="text" name="employer_name" class="form-control @error('employer_name') is-invalid @enderror"
                               value="{{ old('employer_name') }}" required>
                        @error('employer_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Employer's Physical Address</label>
                        <textarea name="employer_address" rows="2" class="form-control @error('employer_address') is-invalid @enderror" required>{{ old('employer_address') }}</textarea>
                        @error('employer_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Occupation and Department</label>
                        <input type="text" name="occupation_department" class="form-control @error('occupation_department') is-invalid @enderror"
                               value="{{ old('occupation_department') }}" required>
                        @error('occupation_department')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Name of Immediate Manager and Contact Phone Number</label>
                        <input type="text" name="manager_name_contact" class="form-control @error('manager_name_contact') is-invalid @enderror"
                               value="{{ old('manager_name_contact') }}" required>
                        @error('manager_name_contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Status of Employment</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" name="employment_status" id="emp_permanent" value="Permanent"
                                       {{ old('employment_status') == 'Permanent' ? 'checked' : '' }} required>
                                <label for="emp_permanent">Permanent</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" name="employment_status" id="emp_casual" value="Casual"
                                       {{ old('employment_status') == 'Casual' ? 'checked' : '' }}>
                                <label for="emp_casual">Casual</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" name="employment_status" id="emp_contract" value="Contract"
                                       {{ old('employment_status') == 'Contract' ? 'checked' : '' }}>
                                <label for="emp_contract">Contract</label>
                            </div>
                        </div>
                        @error('employment_status')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Date of Employment</label>
                            <input type="date" name="date_of_employment" class="form-control @error('date_of_employment') is-invalid @enderror"
                                   value="{{ old('date_of_employment') }}" required>
                            @error('date_of_employment')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date Contract Expires <small>(if applicable)</small></label>
                            <input type="date" name="date_contract_expires" class="form-control @error('date_contract_expires') is-invalid @enderror"
                                   value="{{ old('date_contract_expires') }}">
                            @error('date_contract_expires')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Employee Number</label>
                            <input type="text" name="employee_number" class="form-control @error('employee_number') is-invalid @enderror"
                                   value="{{ old('employee_number') }}" required>
                            @error('employee_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Leave Days on Payslip</label>
                            <input type="text" name="leave_days_payslip" class="form-control @error('leave_days_payslip') is-invalid @enderror"
                                   value="{{ old('leave_days_payslip') }}">
                            @error('leave_days_payslip')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Gross Monthly Income (US$)</label>
                            <input type="number" step="0.01" name="gross_monthly_income" class="form-control @error('gross_monthly_income') is-invalid @enderror"
                                   value="{{ old('gross_monthly_income') }}" required>
                            @error('gross_monthly_income')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Net Monthly Income (US$)</label>
                            <input type="number" step="0.01" name="net_monthly_income" class="form-control @error('net_monthly_income') is-invalid @enderror"
                                   value="{{ old('net_monthly_income') }}" required>
                            @error('net_monthly_income')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Next Pay Date</label>
                        <input type="date" name="next_pay_date" class="form-control @error('next_pay_date') is-invalid @enderror"
                               value="{{ old('next_pay_date') }}" required>
                        @error('next_pay_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- Step 3: Next of Kin (2 contacts) -->
                <div class="form-step" data-step="3">
                    <h3 class="section-title">Next of Kin/Spouse/Partner/Referee</h3>
                    <p style="color: #0a4d8c; margin-bottom: 25px;"><em>Please provide details of TWO people with different addresses</em></p>

                    <!-- Person 1 -->
                    <h4 style="color: #052b51; font-size: 18px; font-weight: 600; margin-bottom: 20px;">Person 1</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Full Name</label>
                            <input type="text" name="nok1_full_name" class="form-control @error('nok1_full_name') is-invalid @enderror"
                                   value="{{ old('nok1_full_name') }}" required>
                            @error('nok1_full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Relationship</label>
                            <input type="text" name="nok1_relationship" class="form-control @error('nok1_relationship') is-invalid @enderror"
                                   value="{{ old('nok1_relationship') }}" required>
                            @error('nok1_relationship')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Home Phone</label>
                            <input type="text" name="nok1_phone_home" class="form-control @error('nok1_phone_home') is-invalid @enderror"
                                   value="{{ old('nok1_phone_home') }}">
                            @error('nok1_phone_home')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Business Phone</label>
                            <input type="text" name="nok1_phone_business" class="form-control @error('nok1_phone_business') is-invalid @enderror"
                                   value="{{ old('nok1_phone_business') }}">
                            @error('nok1_phone_business')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label required-field">Cell Phone</label>
                            <input type="text" name="nok1_phone_cell" class="form-control @error('nok1_phone_cell') is-invalid @enderror"
                                   value="{{ old('nok1_phone_cell') }}" required>
                            @error('nok1_phone_cell')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required-field">Employer Name and Address</label>
                        <textarea name="nok1_employer_address" rows="2" class="form-control @error('nok1_employer_address') is-invalid @enderror" required>{{ old('nok1_employer_address') }}</textarea>
                        @error('nok1_employer_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <!-- Person 2 -->
                    <h4 style="color: #052b51; font-size: 18px; font-weight: 600; margin-bottom: 20px; margin-top: 30px;">Person 2</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Full Name</label>
                            <input type="text" name="nok2_full_name" class="form-control @error('nok2_full_name') is-invalid @enderror"
                                   value="{{ old('nok2_full_name') }}" required>
                            @error('nok2_full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Relationship</label>
                            <input type="text" name="nok2_relationship" class="form-control @error('nok2_relationship') is-invalid @enderror"
                                   value="{{ old('nok2_relationship') }}" required>
                            @error('nok2_relationship')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Home Phone</label>
                            <input type="text" name="nok2_phone_home" class="form-control @error('nok2_phone_home') is-invalid @enderror"
                                   value="{{ old('nok2_phone_home') }}">
                            @error('nok2_phone_home')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Business Phone</label>
                            <input type="text" name="nok2_phone_business" class="form-control @error('nok2_phone_business') is-invalid @enderror"
                                   value="{{ old('nok2_phone_business') }}">
                            @error('nok2_phone_business')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label required-field">Cell Phone</label>
                            <input type="text" name="nok2_phone_cell" class="form-control @error('nok2_phone_cell') is-invalid @enderror"
                                   value="{{ old('nok2_phone_cell') }}" required>
                            @error('nok2_phone_cell')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Employer Name and Address</label>
                        <textarea name="nok2_employer_address" rows="2" class="form-control @error('nok2_employer_address') is-invalid @enderror" required>{{ old('nok2_employer_address') }}</textarea>
                        @error('nok2_employer_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- Step 4: Loan Details & Existing Loans -->
                <div class="form-step" data-step="4">
                    <h3 class="section-title">Loan Details</h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Required Loan Amount (US$)</label>
                            <input type="number" step="0.01" name="loan_amount" class="form-control @error('loan_amount') is-invalid @enderror"
                                   value="{{ old('loan_amount') }}" required>
                            @error('loan_amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Repayment Period (Months)</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" name="repayment_period" id="period_1" value="1"
                                           {{ old('repayment_period') == '1' ? 'checked' : '' }} required>
                                    <label for="period_1">1</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" name="repayment_period" id="period_2" value="2"
                                           {{ old('repayment_period') == '2' ? 'checked' : '' }}>
                                    <label for="period_2">2</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" name="repayment_period" id="period_3" value="3"
                                           {{ old('repayment_period') == '3' ? 'checked' : '' }}>
                                    <label for="period_3">3</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" name="repayment_period" id="period_4" value="4"
                                           {{ old('repayment_period') == '4' ? 'checked' : '' }}>
                                    <label for="period_4">4</label>
                                </div>
                            </div>
                            @error('repayment_period')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

                            <div class="mt-2">
                                <label class="form-label">Other (specify months)</label>
                                <input type="number" name="repayment_period_other" class="form-control @error('repayment_period_other') is-invalid @enderror"
                                       value="{{ old('repayment_period_other') }}" min="1">
                                @error('repayment_period_other')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Reason for Loan</label>
                        <textarea name="reason_for_loan" rows="3" class="form-control @error('reason_for_loan') is-invalid @enderror" required>{{ old('reason_for_loan') }}</textarea>
                        @error('reason_for_loan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <h4 style="color: #4a5568; font-size: 18px; font-weight: 600; margin-top: 30px; margin-bottom: 20px;">Loans/Credit with Other Institutions</h4>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Bank/Institution</label>
                            <input type="text" name="existing_loan_institution" class="form-control @error('existing_loan_institution') is-invalid @enderror"
                                   value="{{ old('existing_loan_institution') }}">
                            @error('existing_loan_institution')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Branch</label>
                            <input type="text" name="existing_loan_branch" class="form-control @error('existing_loan_branch') is-invalid @enderror"
                                   value="{{ old('existing_loan_branch') }}">
                            @error('existing_loan_branch')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Loan Amount (US$)</label>
                            <input type="number" step="0.01" name="existing_loan_amount" class="form-control @error('existing_loan_amount') is-invalid @enderror"
                                   value="{{ old('existing_loan_amount') }}">
                            @error('existing_loan_amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <!-- Step 5: Banking Details & Referrals -->
                <div class="form-step" data-step="5">
                    <h3 class="section-title">Banking Details</h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Bank</label>
                            <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror"
                                   value="{{ old('bank_name') }}" required>
                            @error('bank_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-field">Branch</label>
                            <input type="text" name="bank_branch" class="form-control @error('bank_branch') is-invalid @enderror"
                                   value="{{ old('bank_branch') }}" required>
                            @error('bank_branch')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-field">Account Number</label>
                        <input type="text" name="account_number" class="form-control @error('account_number') is-invalid @enderror"
                               value="{{ old('account_number') }}" required>
                        @error('account_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <h4 style="color: #4a5568; font-size: 18px; font-weight: 600; margin-top: 30px; margin-bottom: 20px;">Referrals (Optional)</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Referral 1 - Name</label>
                            <input type="text" name="referral1_name" class="form-control @error('referral1_name') is-invalid @enderror"
                                   value="{{ old('referral1_name') }}">
                            @error('referral1_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="text" name="referral1_contact" class="form-control @error('referral1_contact') is-invalid @enderror"
                                   value="{{ old('referral1_contact') }}">
                            @error('referral1_contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Referral 2 - Name</label>
                            <input type="text" name="referral2_name" class="form-control @error('referral2_name') is-invalid @enderror"
                                   value="{{ old('referral2_name') }}">
                            @error('referral2_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="text" name="referral2_contact" class="form-control @error('referral2_contact') is-invalid @enderror"
                                   value="{{ old('referral2_contact') }}">
                            @error('referral2_contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Referral 3 - Name</label>
                            <input type="text" name="referral3_name" class="form-control @error('referral3_name') is-invalid @enderror"
                                   value="{{ old('referral3_name') }}">
                            @error('referral3_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="text" name="referral3_contact" class="form-control @error('referral3_contact') is-invalid @enderror"
                                   value="{{ old('referral3_contact') }}">
                            @error('referral3_contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <!-- Step 6: Review & Terms -->
                <div class="form-step" data-step="6">
                    <h3 class="section-title">Terms & Conditions</h3>

                    <div class="terms-checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms_accepted" id="terms_accepted"
                                   value="1" {{ old('terms_accepted') ? 'checked' : '' }} required>
                            <label class="form-check-label" for="terms_accepted">
                                <strong>I hereby declare and agree to the following:</strong><br><br>

                                1. I agree to abide by the terms and conditions of the loan.<br><br>

                                2. I agree that Vision Plus Wealth reserves the right to demand repayments of this loan without warning if there is unsatisfactory conduct. I certify that the above details in support of my application for a loan are true and complete, and understand that in the event of any information proving to be inaccurate, this application may be declined.<br><br>

                                3. Should I fail to repay and Vision Plus Wealth proves that I am deliberately avoiding contact, so as to avoid payments, I authorise Vision Plus Wealth and/or its agent(s) to contact and advise next of kin/spouse/partner/referee and/or publish my name in the media, as part of the recovery process. I agree that legal action may be taken against me if I fail to repay the loan as per agreed terms. Cost of recovery will be to my account.<br><br>

                                4. I agree that information provided will be included in the Credit Reporting System (CRS), regulated by the Reserve Bank of Zimbabwe. The information collected will be used for evaluating my credit worthiness and will be shared with other creditors participating in the CRS.<br><br>

                                5. I agree that my loan may be disbursed into my bank account or Mobile Money Transfer (MNO) i.e. Ecocash, NettCash, Telecash, One Wallet etc.<br><br>

                                <strong>By checking this box, I confirm that I have read, understood, and agree to all the terms and conditions stated above.</strong>
                            </label>
                        </div>
                        @error('terms_accepted')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <div class="alert alert-info">
                        <strong>📋 Review Your Application</strong><br>
                        Please review all the information you've entered before submitting. Click "Previous" to go back and make any necessary changes.
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="form-navigation">
                    <button type="button" class="btn-prev" id="prevBtn" style="display: none;">
                        ← Previous
                    </button>
                    <div style="flex: 1;"></div>
                    <button type="button" class="btn-next" id="nextBtn">
                        Next →
                    </button>
                    <button type="submit" class="btn-submit" id="submitBtn" style="display: none;">
                        <span class="btn-text">Submit Application</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="success-modal-overlay" id="successModal">
    <div class="success-modal">
        <button class="success-modal-close" onclick="closeSuccessModal()">&times;</button>

        <div class="success-icon-wrapper">
            <svg viewBox="0 0 52 52">
                <polyline points="14 27 22 35 38 19"/>
            </svg>
        </div>

        <h2 class="success-modal-title">Application Submitted!</h2>

        <p class="success-modal-message" id="successMessage">
            Your loan application has been submitted successfully. You will receive a confirmation email shortly.
        </p>

        <div class="success-modal-app-number" id="appNumberBox" style="display: none;">
            <div class="success-modal-app-number-label">Application Number</div>
            <div class="success-modal-app-number-value" id="appNumber"></div>
        </div>

        <p class="modal-auto-close">
            This modal will close automatically in <span id="countdown">10</span> seconds
        </p>
    </div>
</div>

<script>
    // Multi-step form logic
    let currentStep = 1;
    const totalSteps = 6;

    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));

        // Show current step
        document.querySelector(`.form-step[data-step="${step}"]`).classList.add('active');

        // Update progress indicator
        document.querySelectorAll('.step-item').forEach((item, index) => {
            item.classList.remove('active', 'completed');
            if (index + 1 < step) {
                item.classList.add('completed');
            } else if (index + 1 === step) {
                item.classList.add('active');
            }
        });

        // Update progress line
        const progressPercentage = ((step - 1) / (totalSteps - 1)) * 100;
        document.getElementById('progressLine').style.width = progressPercentage + '%';

        // Update buttons
        document.getElementById('prevBtn').style.display = step === 1 ? 'none' : 'inline-block';
        document.getElementById('nextBtn').style.display = step === totalSteps ? 'none' : 'inline-block';
        document.getElementById('submitBtn').style.display = step === totalSteps ? 'inline-block' : 'none';

        // Scroll to top of form
        document.querySelector('.form-container').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Validate current step before proceeding
    function validateCurrentStep() {
        const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);
        const requiredFields = currentStepElement.querySelectorAll('[required]');
        let isValid = true;
        let firstInvalidField = null;

        requiredFields.forEach(field => {
            // Remove previous validation styling
            field.classList.remove('is-invalid');

            // Check if field is valid
            if (!field.value || field.value.trim() === '') {
                field.classList.add('is-invalid');
                isValid = false;

                if (!firstInvalidField) {
                    firstInvalidField = field;
                }

                // Create or update error message
                let errorDiv = field.parentElement.querySelector('.invalid-feedback');
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback';
                    errorDiv.style.display = 'block';
                    field.parentElement.appendChild(errorDiv);
                }
                errorDiv.textContent = 'This field is required';
                errorDiv.style.display = 'block';
            } else {
                // Remove error message if field is valid
                const errorDiv = field.parentElement.querySelector('.invalid-feedback');
                if (errorDiv && !errorDiv.hasAttribute('data-server-error')) {
                    errorDiv.style.display = 'none';
                }
            }
        });

        // Focus on first invalid field
        if (!isValid && firstInvalidField) {
            firstInvalidField.focus();
            firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        return isValid;
    }

    // Next button
    document.getElementById('nextBtn').addEventListener('click', function() {
        if (validateCurrentStep()) {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }
    });

    // Previous button
    document.getElementById('prevBtn').addEventListener('click', function() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Initialize
    showStep(currentStep);

    // Form submission validation
    document.getElementById('loanApplicationForm').addEventListener('submit', function(e) {
        // Validate the current step (step 6) before submission
        if (!validateCurrentStep()) {
            e.preventDefault();
            return false;
        }

        // Check if terms are accepted
        const termsCheckbox = document.getElementById('terms_accepted');
        if (!termsCheckbox.checked) {
            e.preventDefault();
            alert('Please accept the terms and conditions before submitting.');
            termsCheckbox.focus();
            return false;
        }

        // Show loading state
        const submitBtn = document.getElementById('submitBtn');
        const btnText = submitBtn.querySelector('.btn-text');

        // Disable button to prevent double submission
        submitBtn.disabled = true;

        // Add loader and change text
        btnText.innerHTML = '<span class="btn-loader"></span>Processing...';
    });

    // Real-time validation on input change (remove error when user starts typing)
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
        field.addEventListener('input', function() {
            if (this.value && this.value.trim() !== '') {
                this.classList.remove('is-invalid');
                const errorDiv = this.parentElement.querySelector('.invalid-feedback');
                if (errorDiv && !errorDiv.hasAttribute('data-server-error')) {
                    errorDiv.style.display = 'none';
                }
            }
        });
    });

    // Success Modal Functions
    let countdownInterval;

    function showSuccessModal(message) {
        const modal = document.getElementById('successModal');
        const messageEl = document.getElementById('successMessage');
        const appNumberBox = document.getElementById('appNumberBox');
        const appNumberEl = document.getElementById('appNumber');

        // Extract application number from message
        const appNumberMatch = message.match(/Application Number:\s*(VPW-\d+-\d+)/);

        if (appNumberMatch) {
            appNumberEl.textContent = appNumberMatch[1];
            appNumberBox.style.display = 'block';
            // Remove app number from main message
            message = message.replace(/Application Number:\s*VPW-\d+-\d+\.?\s*/, '');
        }

        messageEl.textContent = message;
        modal.classList.add('active');

        // Reset form to step 1
        currentStep = 1;
        showStep(currentStep);

        // Clear form fields
        document.getElementById('loanApplicationForm').reset();

        // Start countdown
        startCountdown();

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function closeSuccessModal() {
        const modal = document.getElementById('successModal');
        modal.classList.remove('active');
        if (countdownInterval) {
            clearInterval(countdownInterval);
        }
    }

    function startCountdown() {
        let seconds = 10;
        const countdownEl = document.getElementById('countdown');

        // Clear any existing countdown
        if (countdownInterval) {
            clearInterval(countdownInterval);
        }

        countdownEl.textContent = seconds;

        countdownInterval = setInterval(function() {
            seconds--;
            countdownEl.textContent = seconds;

            if (seconds <= 0) {
                clearInterval(countdownInterval);
                closeSuccessModal();
            }
        }, 1000);
    }

    // Check for success message on page load
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            setTimeout(function() {
                showSuccessModal("{{ session('success') }}");
            }, 300);
        @endif
    });

    // Close modal when clicking outside
    document.getElementById('successModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeSuccessModal();
        }
    });
</script>
@endsection
