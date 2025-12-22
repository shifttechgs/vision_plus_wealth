@extends('layouts.master')

@section('content')
<style>
    .success-wrapper {
        background: linear-gradient(135deg, #ffffff 0%, #f0faf8 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
    }

    .success-container {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        padding: 60px 50px;
        max-width: 700px;
        margin: 0 auto;
        text-align: center;
    }

    .success-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        border-radius: 50%;
        margin: 0 auto 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: scaleIn 0.5s ease;
    }

    .success-icon svg {
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

    .success-title {
        color: #2d3748;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .success-subtitle {
        color: #718096;
        font-size: 18px;
        margin-bottom: 35px;
        line-height: 1.6;
    }

    .application-number-box {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        border: 2px dashed #667eea;
        border-radius: 12px;
        padding: 25px;
        margin: 35px 0;
    }

    .application-number-label {
        color: #4a5568;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .application-number {
        color: #667eea;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 2px;
        font-family: 'Courier New', monospace;
    }

    .info-box {
        background: #e7f3ff;
        border-left: 4px solid #2196F3;
        padding: 20px;
        margin: 30px 0;
        text-align: left;
        border-radius: 6px;
    }

    .info-box h4 {
        color: #1565C0;
        font-size: 16px;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .info-box ul {
        margin: 0;
        padding-left: 20px;
        color: #4a5568;
        line-height: 1.8;
    }

    .info-box ul li {
        margin-bottom: 8px;
    }

    .success-actions {
        margin-top: 40px;
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary, .btn-secondary {
        padding: 15px 40px;
        border-radius: 10px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 16px;
        border: none;
        cursor: pointer;
        display: inline-block;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-secondary {
        background: #f7fafc;
        color: #4a5568;
        border: 2px solid #e2e8f0;
    }

    .btn-secondary:hover {
        background: #edf2f7;
        border-color: #cbd5e0;
        color: #2d3748;
    }

    .contact-info {
        margin-top: 35px;
        padding-top: 30px;
        border-top: 2px solid #e2e8f0;
    }

    .contact-info p {
        color: #718096;
        font-size: 14px;
        margin: 8px 0;
    }

    .contact-info strong {
        color: #667eea;
    }

    @media (max-width: 768px) {
        .success-container {
            padding: 40px 25px;
        }

        .success-title {
            font-size: 28px;
        }

        .success-subtitle {
            font-size: 16px;
        }

        .application-number {
            font-size: 22px;
        }

        .success-actions {
            flex-direction: column;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
        }
    }
</style>

<div class="success-wrapper">
    <div class="container">
        <div class="success-container">
            <!-- Success Icon -->
            <div class="success-icon">
                <svg viewBox="0 0 52 52">
                    <polyline points="14 27 22 35 38 19"/>
                </svg>
            </div>

            <!-- Success Message -->
            <h1 class="success-title">Application Submitted Successfully!</h1>
            <p class="success-subtitle">
                Thank you for choosing Vision Plus Wealth. Your loan application has been received and is being processed. You will receive a confirmation email with your application number shortly.
            </p>

            <!-- Important Information -->
            <div class="info-box">
                <h4>📋 What Happens Next?</h4>
                <ul>
                    <li>Our team will review your application within <strong>24-48 hours</strong></li>
                    <li>We may contact you for additional information or verification</li>
                    <li>You will receive an email confirmation with your application reference number</li>
                    <li>Check your email regularly for updates on your application status</li>
                </ul>
            </div>

            <!-- Important Note -->
            <div class="info-box" style="background: #fff3cd; border-left-color: #ffc107;">
                <h4 style="color: #856404;">⚠️ Important Note</h4>
                <ul style="color: #856404;">
                    <li>Please ensure your phone is accessible for our team to contact you</li>
                    <li>Check your email regularly for updates on your application</li>
                    <li>Have your identity documents ready for verification if required</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="success-actions">
                <a href="{{ route('home') }}" class="btn-primary">
                    ← Return to Home
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary">
                    Contact Us
                </a>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <p><strong>Need Assistance?</strong></p>
                <p>Contact our customer support team for any inquiries</p>
                <p>Email: <strong>info@visionpluswealth.com</strong></p>
                <p>Phone: <strong>+263 XXX XXX XXX</strong></p>
            </div>
        </div>
    </div>
</div>
@endsection
