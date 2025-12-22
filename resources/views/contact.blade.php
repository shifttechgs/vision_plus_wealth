@extends("layouts.master")
@section("content")
    <!--===== BREADCRUMB & HEADER STARTS =======-->
    <!--===== HERO AREA STARTS =======-->
    <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="inner-header text-center">
                        <h2>Contact Us</h2>
                        <div class="space24"></div>
                        <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== BREADCRUMB & HEADER ENDS =======-->

    <!--===== MAIN CONTACT SECTION STARTS =======-->
    <div style="padding: 100px 0; background: #f8f9fa;" class="contact4-section-area">
        <div class="container">
            <div class="row align-items-stretch" style="gap: 30px 0;">
                <!-- Left Column - Contact Form -->
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-card" style="background: #ffffff; padding: 45px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); height: 100%;">
                        <div class="mb-4" style="margin-bottom: 35px;">
                            <h2 style="color: #1a1a1a; font-size: 2rem; font-weight: 700; margin-bottom: 12px; line-height: 1.3;">Let's Start the Conversation</h2>
                            <p style="color: #666; font-size: 1.05rem; line-height: 1.7; margin-bottom: 0;">
                                Have questions about our services? Complete the form and our team will respond within 24 hours.
                            </p>
                        </div>

                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-center">
                                    <i class="ri-checkbox-circle-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Success!</strong> {{ session('success') }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-center">
                                    <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Error!</strong> {{ session('error') }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-start">
                                    <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Please fix the following errors:</strong>
                                        <ul class="mb-0 mt-2">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/contact') }}" >
                            @csrf
                            <div class="row g-4 " >
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Full Name <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('fullname') is-invalid @enderror"
                                           id="fullname"
                                           name="fullname"
                                           placeholder="Enter your full name"
                                           value="{{ old('fullname') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('fullname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Email Address <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           placeholder="your.email@example.com"
                                           value="{{ old('email') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Phone Number <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="tel"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           placeholder="+263 777 123 456"
                                           value="{{ old('phone') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Loan Type Dropdown -->
                                <div class="col-md-6">
                                    <label for="loanType" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Loan Type <span style="color: #dc3545;">*</span>
                                    </label>
                                    <select name="loanType"
                                            id="loanType"
                                            class="form-control @error('loanType') is-invalid @enderror"
                                             required>
                                        <option value="" disabled {{ old('loanType') ? '' : 'selected' }} style="color: #999;">Select Loan Type</option>
                                        <option value="Agricultural Loans" {{ old('loanType') == 'Agricultural Loans' ? 'selected' : '' }}>Agricultural Loans</option>
                                        <option value="Business Loans" {{ old('loanType') == 'Business Loans' ? 'selected' : '' }}>Business Loans</option>
                                        <option value="Salaried Individuals" {{ old('loanType') == 'Salaried Individuals' ? 'selected' : '' }}>Salaried Individuals</option>
                                    </select>
                                    @error('loanType')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <!-- Message Textarea -->
                                <div class="col-12">
                                    <label class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Message
                                    </label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="message"
                                              name="message"
                                              placeholder="Tell us how we can help you..."
                                              rows="6"
                                              style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa; resize: vertical; min-height: 150px;"
                                              onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                              onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100" style="padding: 16px 30px; font-size: 1.1rem; font-weight: 600; border-radius: 10px; background: linear-gradient(135deg, #004d99 0%, #004d99 100%); border: none; box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 10px;"
                                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(0, 102, 204, 0.4)';"
                                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 102, 204, 0.3)';">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        Send Message
                                    </button>
                                    <p style="text-align: center; color: #666; font-size: 0.875rem; margin-top: 16px; margin-bottom: 0;">
                                        <i class="fa-solid fa-info-circle" style="margin-right: 5px;"></i>
                                        Fields marked with <span style="color: #dc3545;">*</span> are required
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




                <!-- Right Column - Contact Information -->
                <div class="col-lg-5">
                    <div style="background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); padding: 45px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(7, 41, 78, 0.3); height: 100%; display: flex; flex-direction: column;">
                        <div style="margin-bottom: 25px;">
                            <h2 style="color: #ffffff; font-size: 32px; font-weight: 700; margin-bottom: 16px;">Contact Information</h2>
                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 16px; line-height: 1.6; margin-bottom: 0;">Our dedicated support team is here to assist you with any inquiries or concerns you may have.</p>
                        </div>

                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <!-- Call Us -->
                            <div style="padding-bottom: 15px; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-phone" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Call Us</h3>
                                </div>
                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">
                                    <strong>Mon-Fri:</strong> 8:00 AM - 5:00 PM<br>
                                    <strong>Sat:</strong> 8:00 AM - 12:00 PM
                                </p>
                                <a href="tel:+263 242 747473" style="color: #ffffff; font-size: 17px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    +263 242 747473
                                </a>
                                <a href="" style="color: #ffffff; font-size: 17px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    +263 771 881631
                                </a>
                            </div>

                            <!-- Email Us -->
                            <div style="padding-bottom: 15px; padding-top: 15px; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-envelope" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Email Us</h3>
                                </div>
{{--                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">--}}
{{--                                    Response within 24 hours--}}
{{--                                </p>--}}
                                <a href="mailto:info@visionpluswealth.com" style="color: #ffffff; font-size: 16px; font-weight: 600; text-decoration: none; transition: all 0.3s; word-break: break-all; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    info@visionpluswealth.com
                                </a>
                            </div>

                            <!-- Visit Our Office -->
                            <div style="padding-top: 15px; padding-bottom: 15px;border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-location-dot" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Visit Our Office</h3>
                                </div>
                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">
                                    9th Floor Michael House<br>
                                    62 Nelson Mandela Avenue
                                    Harare, Zimbabwe
                                </p>
                                <a href="https://maps.app.goo.gl/XKqAHdNGdBBGWia98" target="_blank" style="color: #ffffff; font-size: 15px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: inline-block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    Get Directions →
                                </a>
                            </div>

                            <!-- Quick Response Badge -->
                            <div style="background: rgba(255, 255, 255, 0.15); padding: 18px 25px; border-radius: 12px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); margin-top: 25px;">
                                <p style="color: #ffffff; font-size: 15px; font-weight: 600; margin: 0;">
                                    <i class="fa-solid fa-check-circle" style="margin-right: 8px;"></i>Quick response time guaranteed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MAIN CONTACT SECTION ENDS =======-->


    <!--===== MAP SECTION STARTS =======-->
    <div style="padding: 0px; border-radius: 10px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30384.56003023005!2d31.082733!3d-17.835353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931bb35b1a77bcf%3A0x10b42166da275cc3!2s70%20Hillside%20Rd%2C%20Harare%2C%20Zimbabwe!5e0!3m2!1sen!2sus!4v1765798648991!5m2!1sen!2sus" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    <!--===== MAP SECTION ENDS =======-->


@endsection
