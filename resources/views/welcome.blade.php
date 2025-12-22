@extends("layouts.master")
@section("content")

    <!--===== HERO AREA STARTS =======-->
    <div class="hero4-section-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero4-heading">
{{--                        <h5 data-aos="fade-left" data-aos-duration="800"> Trusted Microfinance Solutions for Real Growth</h5>--}}
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">Fast, Flexible Loans for Real Growth</h2>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="900">VisionPlus Wealth provides accessible, personalised financing that helps individuals, entrepreneurs, and SMEs grow with confidence.</p>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="{{  url('/loan-application') }}" class="vl-btn4">Apply For a Loan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            <a href="{{  url('/contact') }}" class="vl-btn4 btn2">Speak to an Advisor <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="space48"></div>
                        <div class="trust-indicators enhanced" data-aos="fade-up" data-aos-duration="800">
                            <div class="trust-item" style="color: white">
                                <i class="fas fa-users" style="color: white"></i>
                                <span>Trusted by <strong>1,000+</strong> clients</span>
                            </div>
                            <div class="trust-item" style="color: white">
                                <i class="fas fa-shield-alt" style="color: white"></i>
                                <span>Licensed & compliant</span>
                            </div>
                            <div class="trust-item" style="color: white">
                                <i class="fas fa-star" style="color: white"></i>
                                <span><strong>98%</strong> satisfaction</span>
                            </div>
                        </div>
                        <div class="space16"></div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="images-area hero-image-wrapper">
                        <!-- Professional Floating Hero Cards -->
                        <div class="hero-floating-cards">
                            <div class="hero-card floating" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="card-content">
                                    <h4>Fast Approvals</h4>
                                    <p>24-48 hours</p>
                                </div>
                            </div>

                            <div class="hero-card floating floating-delay-1" data-aos="fade-left" data-aos-duration="900" data-aos-delay="400">
                                <div class="card-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <div class="card-content">
                                    <h4>Flexible Rates</h4>
                                    <p>Clear & competitive</p>
                                </div>
                            </div>

                            <div class="hero-card floating floating-delay-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                                <div class="card-icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="card-content">
                                    <h4>100% Secure</h4>
                                    <p>No hidden fees</p>
                                </div>
                            </div>
                        </div>

                        <div class="img1 image-anime reveal">
                            <img src="assets/img/all-images/hero/vpw.avif" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->
{{--    <!-- Premium Auto-Scrolling Value Banner -->--}}
{{--    <section class="value-scroll-banner">--}}
{{--        <div class="scroll-container">--}}
{{--            <div class="scroll-track">--}}
{{--                <!-- First set of items -->--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-bolt"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Fast Approvals</h4>--}}
{{--                        <p>24–48 hours</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-percentage"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Flexible Rates</h4>--}}
{{--                        <p>Competitive options</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-user-check"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Personalised Solutions</h4>--}}
{{--                        <p>Tailored to you</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-shield"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Secure & Transparent</h4>--}}
{{--                        <p>No hidden fees</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Duplicate set for seamless loop -->--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-bolt"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Fast Approvals</h4>--}}
{{--                        <p>24–48 hours</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-percentage"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Flexible Rates</h4>--}}
{{--                        <p>Competitive options</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-user-check"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Personalised Solutions</h4>--}}
{{--                        <p>Tailored to you</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="scroll-item">--}}
{{--                    <div class="scroll-icon">--}}
{{--                        <i class="fas fa-shield-check"></i>--}}
{{--                    </div>--}}
{{--                    <div class="scroll-content">--}}
{{--                        <h4>Secure & Transparent</h4>--}}
{{--                        <p>No hidden fees</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <div class="service3-section-area sp2" id="services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading4">
                        <h5 data-aos="fade-left" data-aos-duration="800">Our Service</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Expert Financial Solutions for Your Business</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">At Vision Plus Wealth, we offer a range of specialized services designed to meet the unique financial needs of your business from strategic financial planning.</p>
                        <div class="space32"></div>
{{--                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">--}}
{{--                            <a href="" class="vl-btn4">View More<span><i class="fa-solid fa-arrow-right"></i></span></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="service-images">
                        {{--                        <img src="assets/img/elements/elements32.png" alt="" class="elements32 aniamtion-key-1">--}}
                        {{--                        <img src="assets/img/elements/elements33.png" alt="" class="elements33 keyframe5">--}}
                        <div class="img1 image-anime reveal">
                            <img style="border-radius: 10px" src="assets/img/all-images/loans.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="space48"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="service3-single-boxarea" style="background-color: #F5F7FA; padding: 30px; border-radius: 12px;">
                        <div class="icons" style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);">
                            <i class="fa-solid fa-briefcase" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <div class="space24"></div>
                        <div class="content">
                            <a href="">Business Loans</a>
                            <div class="space16"></div>
                            <p>
                                Used to finance short term working capital and market-day loans including investment loans.
                                It’s a quick one-time facility designed to offer urgent funds.
                            </p>
                            <div class="space24"></div>
                            <a href="{{  url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="service3-single-boxarea" style="background-color: #F5F7FA; padding: 30px; border-radius: 12px;" >
                        <div class="icons" style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(17, 153, 142, 0.3);">
                            <i class="fa-solid fa-seedling" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <div class="space24"></div>
                        <div class="content">
                            <a href="">Agricultural Loans</a>
                            <div class="space16"></div>
                            <p>Agricultural loans are extended to farmers over and above the salary based loans for farming crops such as maize, tobacco, and others. The repayment done once off after harvesting.</p>
                            <div class="space24"></div>
                             <a href="{{  url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="service3-single-boxarea" style="background-color: #F5F7FA; padding: 30px; border-radius: 12px;">
                        <div class="icons" style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(240, 147, 251, 0.3);">
                            <i class="fa-solid fa-wallet" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <div class="space24"></div>
                        <div class="content">
                            <a href="">Salary Based Loans</a>
                            <div class="space16"></div>
                            <p>We stay updated the latest tax laws & policies helping you navigate complex tax landscapes our personalized.</p>
                            <div class="space24"></div>
                             <a href="{{  url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="service3-single-boxarea" style="background-color: #F5F7FA; padding: 30px; border-radius: 12px;">
                        <div class="icons" style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(250, 112, 154, 0.3);">
                            <i class="fa-solid fa-shield-halved" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <div class="space24"></div>
                        <div class="content">
                            <a href="">Risk Management & Mitigation</a>
                            <div class="space16"></div>
                            <p>Managing is key preserving business’s financial stability Risk Management  & Mitigation service help you identify.</p>
                            <div class="space24"></div>
                             <a href="{{  url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="service3-single-boxarea" style="background-color: #F5F7FA; padding: 30px; border-radius: 12px;">
                        <div class="icons" style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(79, 172, 254, 0.3);">
                            <i class="fa-solid fa-chart-line" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <div class="space24"></div>
                        <div class="content">
                            <a href="">Business Growth Planning</a>
                            <div class="space16"></div>
                            <p>Business Growth Planning service is tailored companies sustainable, scalable growth analyze current.</p>
                            <div class="space24"></div>
                             <a href="{{  url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->


    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonial4-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading4 text-center space-margin60">
                        <h5 data-aos="fade-left" data-aos-duration="800">Testimonial</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Why Clients Choose Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial4-main-slider owl-carousel">
                        <div class="testimonial-box-area" style="height: 320px !important;">
{{--                            <div class="img1">--}}
{{--                                <img src="assets/img/all-images/testimonial/testi-img4.png" alt="">--}}
{{--                            </div>--}}
                            <p>“Because of my experience working with other so called Microfinance Institutions, I was skeptical before engaging VPW. They have proven to be highly professional and true to their promise. Their range of their products is also diverse and flexible for every need.”</p>
                            <div class="space24"></div>
                            <div class="content-area">
                                <div class="text">
                                    <a href="">Peter Musa</a>
                                    <div class="space8"></div>
                                    <p>Tobacco Farmer</p>
                                </div>
                                <i class="fas fa-quote-right" style="font-size: 26px; color: #0A4D8C;"></i>

                            </div>
                        </div>
                        <div class="testimonial-box-area" style="height: 320px !important;">
                            {{--                            <div class="img1">--}}
                            {{--                                <img src="assets/img/all-images/testimonial/testi-img4.png" alt="">--}}
                            {{--                            </div>--}}
                            <p>“Initially thought it was all about loans, but VPW offers much more. My financial capacity and decision making has improved since I started working with them. I found one that works for me.”</p>
                            <div class="space24"></div>
                            <div class="content-area">
                                <div class="text">
                                    <a href="">Petronella Ndlovu
                                    </a>
                                    <div class="space8"></div>
                                    <p> Small Scale Miner</p>
                                </div>
                                <i class="fas fa-quote-right" style="font-size: 26px; color: #0A4D8C;"></i>

                            </div>
                        </div>





                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!-- How It Works - Modern Design -->
    <section class="vpw-how-it-works sp1" style="background: #FFFFFF; position: relative; overflow: hidden;">

        <!-- Subtle Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="container" style="position: relative; z-index: 1;">
            <!-- Section Header -->

            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading4 text-center space-margin60">
                        <h5 data-aos="fade-left" data-aos-duration="800">How It Works</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3" >Your Path to Financial Empowerment</h2>
                        <p >Four simple steps to access the funding you need. Fast, transparent, secure.</p>

                    </div>
                </div>
            </div>

            <!-- Timeline Steps -->
            <div class="row position-relative" style="margin-top: 60px;">

                <!-- Progress Line -->
                <div class="vpw-progress-line" style="position: absolute; top: 60px; left: 50%; transform: translateX(-50%); width: 85%; height: 2px; background: rgba(255, 255, 255, 0.1); z-index: 0;">
                    <div class="vpw-progress-bar" style="height: 100%; width: 0%; background: linear-gradient(90deg, #07294e 0%, #07294e 100%); transition: width 2s ease;"></div>
                </div>

                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="vpw-step-card" style="position: relative; z-index: 1;">
                        <!-- Step Number -->
                        <div class="vpw-step-number" style="width: 120px; height: 120px; margin: 0 auto 28px; position: relative;">
                            <div style="width: 100%; height: 100%; border-radius: 50%; background: linear-gradient(135deg, #0A4D8C 0%, #07294e 100%);  display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px;">
                                <i class="fas fa-edit" style="font-size: 42px; color: #FFFFFF;"></i>
                            </div>
                            <span style="position: absolute; top: -10px; right: -10px; width: 36px; height: 36px; background: #07294EFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #FFFFFF; font-size: 15px; box-shadow: 0 4px 12px">01</span>
                        </div>
                        <!-- Content -->
                        <div class="text-center">
                            <h4 style="font-size: 20px; font-weight: 700; color: #100235; margin-bottom: 14px;">Apply Online</h4>
                            <p >Submit your application via our website, WhatsApp, or visit any branch.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="vpw-step-card" style="position: relative; z-index: 1;">
                        <!-- Step Number -->
                        <div class="vpw-step-number" style="width: 120px; height: 120px; margin: 0 auto 28px; position: relative;">
                            <div style="width: 100%; height: 100%; border-radius: 50%; background: linear-gradient(135deg, #0A4D8C 0%, #07294EFF 100%);  display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px ;">
                                <i class="fas fa-file-alt" style="font-size: 42px; color: #FFFFFF;"></i>
                            </div>
                            <span style="position: absolute; top: -10px; right: -10px; width: 36px; height: 36px; background: #07294e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #FFFFFF; font-size: 15px; box-shadow: 0 4px 12px ">02</span>
                        </div>
                        <!-- Content -->
                        <div class="text-center">
                            <h4 style="font-size: 20px; font-weight: 700; color: #100235; margin-bottom: 14px;">Submit Documents</h4>
                            <p >Provide your latest payslip, ID, and relevant business documents.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="vpw-step-card" style="position: relative; z-index: 1;">
                        <!-- Step Number -->
                        <div class="vpw-step-number" style="width: 120px; height: 120px; margin: 0 auto 28px; position: relative;">
                            <div style="width: 100%; height: 100%; border-radius: 50%; background: linear-gradient(135deg, #0A4D8C 0%, #07294EFF 100%);  display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px ;">
                                <i class="fas fa-check-circle" style="font-size: 42px; color: #FFFFFF;"></i>
                            </div>
                            <span style="position: absolute; top: -10px; right: -10px; width: 36px; height: 36px; background: #07294EFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #FFFFFF; font-size: 15px; box-shadow: 0 4px 12px ">03</span>
                        </div>
                        <!-- Content -->
                        <div class="text-center">
                            <h4 style="font-size: 20px; font-weight: 700; color: #100235; margin-bottom: 14px;">Get Approved</h4>
                            <p >Fast processing with a clear, transparent decision in 24-48 hours.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="vpw-step-card" style="position: relative; z-index: 1;">
                        <!-- Step Number -->
                        <div class="vpw-step-number" style="width: 120px; height: 120px; margin: 0 auto 28px; position: relative;">
                            <div style="width: 100%; height: 100%; border-radius: 50%; background: linear-gradient(135deg, #0A4D8C 0%, #07294EFF 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px ;">
                                <i class="fas fa-hand-holding-usd" style="font-size: 42px; color: #FFFFFF;"></i>
                            </div>
                            <span style="position: absolute; top: -10px; right: -10px; width: 36px; height: 36px; background: #07294EFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #FFFFFF; font-size: 15px; box-shadow: 0 4px 12px">04</span>
                        </div>
                        <!-- Content -->
                        <div class="text-center">
                            <h4 style="font-size: 20px; font-weight: 700; color: #100235; margin-bottom: 14px;">Receive Funds</h4>
                            <p >Instant cash disbursement—no long waits, just results.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--===== WHY CHOOSE US START =======-->
    <div class="project1-section sp1 bg1" style="padding: 100px 0;">
        <div class="container">

            <!-- Heading -->
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading4 text-center" style="margin-bottom: 70px;">
                        <h5 data-aos="fade-left" data-aos-duration="800" style="letter-spacing: 2px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Why Choose US</h5>
                        <h2 class="text-anime-style-3" style="font-size: 2.5rem; line-height: 1.3; font-weight: 700;">Trusted Microfinance Solutions That Put You First</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center" style="gap: 40px 0;">

                <!-- Left Content Box -->
                <div class="col-lg-6">
                    <div class="project-single-boxarea" style="padding-right: 30px;">

                        <!-- Feature 1 -->
                        <div class="project-boxarea heading4" style="background: #ffffff; padding: 35px 30px; border-radius: 16px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06); margin-bottom: 30px; transition: all 0.4s ease; border-left: 4px solid transparent;"
                             onmouseover="this.style.boxShadow='0 12px 40px rgba(0, 0, 0, 0.1)'; this.style.transform='translateY(-5px)'; this.style.borderLeftColor='var(--primary-color, #0066cc)';"
                             onmouseout="this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.06)'; this.style.transform='translateY(0)'; this.style.borderLeftColor='transparent';">

                            <h5 style="color: #0066cc; font-size: 0.875rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 16px;">Fast & Easy Loan Approval</h5>

                            <h2 style="margin-bottom: 18px; font-size: 1.75rem; line-height: 1.4;">
                                <a href="#" style="color: #1a1a1a; text-decoration: none; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='#0066cc';"
                                   onmouseout="this.style.color='#1a1a1a';">
                                    Quick, Hassle-Free Processing
                                </a>
                            </h2>

                            <p style="color: #666; line-height: 1.8; margin-bottom: 28px; font-size: 1rem;">Our streamlined application process ensures you get approved fast with minimal paperwork and maximum convenience.</p>

                            <div class="vl-hero-btn">
                                <a href="" class="vl-btn4" style="color: white; display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                                    Apply for a loan <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>


                        <!-- Feature 2 -->
                        <div class="project-boxarea heading4" style="background: #ffffff; padding: 35px 30px; border-radius: 16px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06); margin-bottom: 30px; transition: all 0.4s ease; border-left: 4px solid transparent;"
                             onmouseover="this.style.boxShadow='0 12px 40px rgba(0, 0, 0, 0.1)'; this.style.transform='translateY(-5px)'; this.style.borderLeftColor='var(--primary-color, #0066cc)';"
                             onmouseout="this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.06)'; this.style.transform='translateY(0)'; this.style.borderLeftColor='transparent';">

                            <h5 style="color: #0066cc; font-size: 0.875rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 16px;">Flexible Loan Options</h5>

                            <h2 style="margin-bottom: 18px; font-size: 1.75rem; line-height: 1.4;">
                                <a href="#" style="color: #1a1a1a; text-decoration: none; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='#0066cc';"
                                   onmouseout="this.style.color='#1a1a1a';">
                                    Tailored Financing for Every Need
                                </a>
                            </h2>

                            <p style="color: #666; line-height: 1.8; margin-bottom: 28px; font-size: 1rem;">Whether you're an individual, entrepreneur, or SME—we offer personalised lending solutions that match your financial goals.</p>

                            <div class="vl-hero-btn">
                                <a href="" class="vl-btn4" style="color: white; display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                                    Apply for a loan <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="project-boxarea heading4" style="background: #ffffff; padding: 35px 30px; border-radius: 16px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06); margin-bottom: 30px; transition: all 0.4s ease; border-left: 4px solid transparent;"
                             onmouseover="this.style.boxShadow='0 12px 40px rgba(0, 0, 0, 0.1)'; this.style.transform='translateY(-5px)'; this.style.borderLeftColor='var(--primary-color, #0066cc)';"
                             onmouseout="this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.06)'; this.style.transform='translateY(0)'; this.style.borderLeftColor='transparent';">

                            <h5 style="color: #0066cc; font-size: 0.875rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 16px;">Affordable & Transparent</h5>

                            <h2 style="margin-bottom: 18px; font-size: 1.75rem; line-height: 1.4;">
                                <a href="#" style="color: #1a1a1a; text-decoration: none; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='#0066cc';"
                                   onmouseout="this.style.color='#1a1a1a';">
                                    No Hidden Fees. No Surprises.
                                </a>
                            </h2>

                            <p style="color: #666; line-height: 1.8; margin-bottom: 28px; font-size: 1rem;">Enjoy competitive interest rates, clear terms, and honest communication—designed to empower, not burden.</p>

                            <div class="vl-hero-btn">
                                <a href="" class="vl-btn4" style="color: white; display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                                    Apply for a loan <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="project-boxarea heading4" style="background: #ffffff; padding: 35px 30px; border-radius: 16px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06); transition: all 0.4s ease; border-left: 4px solid transparent;"
                             onmouseover="this.style.boxShadow='0 12px 40px rgba(0, 0, 0, 0.1)'; this.style.transform='translateY(-5px)'; this.style.borderLeftColor='var(--primary-color, #0066cc)';"
                             onmouseout="this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.06)'; this.style.transform='translateY(0)'; this.style.borderLeftColor='transparent';">

                            <h5 style="color: #0066cc; font-size: 0.875rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 16px;">Dedicated Client Support</h5>

                            <h2 style="margin-bottom: 18px; font-size: 1.75rem; line-height: 1.4;">
                                <a href="#" style="color: #1a1a1a; text-decoration: none; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='#0066cc';"
                                   onmouseout="this.style.color='#1a1a1a';">
                                    Guidance Every Step of the Way
                                </a>
                            </h2>

                            <p style="color: #666; line-height: 1.8; margin-bottom: 28px; font-size: 1rem;">Our financial advisors are here to support you—from application to repayment—ensuring a smooth and stress-free experience.</p>

                            <div class="vl-hero-btn">
                                <a href="" class="vl-btn4" style="color: white; display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                                    Apply for a loan <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6">
                    <div class="all-images" style="padding-left: 30px;">
                        <div class="images-area" style="position: relative;">
                            <div class="img1 reveal" style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);">
                                <img src="assets/img/all-images/happyLoans.jpg" alt="Happy Loans Customer" style="width: 100%; height: auto; display: block; object-fit: cover;">
                            </div>
{{--                            <img src="assets/img/elements/elements7.png" alt="" class="elements7 aniamtion-key-1">--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== WHY CHOOSE US END =======-->

    <!--===== TEAM AREA STARTS =======-->
    <section class="team1-section-area sp1 ">
        <div class="container">

            <!-- Heading -->
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading4 text-center space-margin60">
                        <h5>Our Team</h5>
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">Expertise You Can Trust</h2>
                    </div>
                </div>
            </div>

            <!-- Team Members -->
            <div class="row g-4">

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="team-boxarea premium-team-card">
                        <div class="img1">
                            <img src="assets/img/board/naome.png" alt="Cesar Schuster" class="img-fluid rounded-4 shadow-sm">
{{--                            <ul class="social-links d-flex justify-content-center gap-3 mt-3">--}}
{{--                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}

{{--                            </ul>--}}
                        </div>
                        <div class="space24"></div>
                        <div class="content-area text-center">
                            <a href="" class="team-name">Naome Muzvdziwa</a>
                            <div class="space8"></div>
                            <p class="team-role"> Board Chair</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="team-boxarea premium-team-card">
                        <div class="img1">
                            <img src="assets/img/board/tinashe.png" alt="Erma Hansen" class="img-fluid rounded-4 shadow-sm">
                            <ul class="social-links d-flex justify-content-center gap-3 mt-3">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>


                            </ul>
                        </div>
                        <div class="space24"></div>
                        <div class="content-area text-center">
                            <a href="" class="team-name">Tinashe Muchenje</a>
                            <div class="space8"></div>
                            <p class="team-role">Managing Director</p>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other team members -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="team-boxarea premium-team-card">
                        <div class="img1">
                            <img src="assets/img/board/rudo.png" alt="Rudo " class="img-fluid rounded-4 shadow-sm">

{{--                            <ul class="social-links d-flex justify-content-center gap-3 mt-3">--}}
{{--                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}

{{--                            </ul>--}}
                        </div>
                        <div class="space24"></div>
                        <div class="content-area text-center">
                            <a href="" class="team-name">Rudo A.L Nodoro </a>
                            <div class="space8"></div>
                            <p class="team-role"> Executive Director</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="team-boxarea premium-team-card">
                        <div class="img1">
                            <img src="assets/img/board/Ivony.png" alt="Ivony Veum" class="img-fluid rounded-4 shadow-sm">

{{--                            <ul class="social-links d-flex justify-content-center gap-3 mt-3">--}}
{{--                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}

{{--                            </ul>--}}
                        </div>
                        <div class="space24"></div>
                        <div class="content-area text-center">
                            <a href="" class="team-name">Dr. Ivony K Katsande </a>
                            <div class="space8"></div>
                            <p class="team-role">Non Executive Director</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="team-boxarea premium-team-card">
                        <div class="img1">
                            <img src="assets/img/board/cuthbert.png" alt="Cuthbert" class="img-fluid rounded-4 shadow-sm">

{{--                            <ul class="social-links d-flex justify-content-center gap-3 mt-3">--}}
{{--                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}

{{--                            </ul>--}}
                        </div>
                        <div class="space24"></div>
                        <div class="content-area text-center">
                            <a href="" class="team-name">Cuthbert M Muchenje</a>
                            <div class="space8"></div>
                            <p class="team-role"> Non Executive Director</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--===== TEAM AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    <div class="history1-scetion-area sp1 bg1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading4 space-margin60">
                        <h5>Our History</h5>
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">The Story of Our Success</h2>
                    </div>
                </div>
            </div>
            <div class="boredr"></div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="history-single-slider owl-carousel">
                        <div class="history-boxarea">
                            <h2>1995</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Founder In London</a>
                            <div class="space12"></div>
                            <p>Over the years, we’ve grown from a small consultancy to leading provider.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>1998</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Opening New Office</a>
                            <div class="space12"></div>
                            <p>Our journey has marked a continuous innovation, a commitment excellence.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2008</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Famous In Town</a>
                            <div class="space12"></div>
                            <p>As we've expanded our services and expertise, stayed true to our core.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2010</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Business Growth</a>
                            <div class="space12"></div>
                            <p>Today, we are proud to be trusted by companies around the world, helping.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2014</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Founder In London</a>
                            <div class="space12"></div>
                            <p>Over the years, we’ve grown from a small consultancy to leading provider.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2018</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Opening New Office</a>
                            <div class="space12"></div>
                            <p>Our journey has marked a continuous innovation, a commitment excellence.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2020</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Famous In Town</a>
                            <div class="space12"></div>
                            <p>As we've expanded our services and expertise, stayed true to our core.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2022</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Business Growth</a>
                            <div class="space12"></div>
                            <p>Today, we are proud to be trusted by companies around the world, helping.</p>
                        </div>
                        <div class="history-boxarea">
                            <h2>2025</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Business Growth</a>
                            <div class="space12"></div>
                            <p>Today, we are proud to be trusted by companies around the world, helping.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CASE AREA ENDS =======-->

    <!--===== OUR CUSTOMERS AREA STARTS =======-->
    <div class="brand1-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading4 text-center space-margin60">
                        <h5 data-aos="fade-up" data-aos-duration="800">Our Customers</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Empowering Diverse Communities</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Farmers -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-wheat-awn" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Farmers</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Supporting agricultural growth with tailored financing solutions</p>
                    </div>
                </div>

                <!-- Small Business Owners -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-store" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Small Business Owners</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Helping local businesses thrive and expand operations</p>
                    </div>
                </div>

                <!-- Entrepreneurs -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-lightbulb" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Entrepreneurs</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Fueling innovation and startup ventures with capital</p>
                    </div>
                </div>

                <!-- Salaried Employees -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-user-tie" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Salaried Employees</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Providing personal loans for life's important moments</p>
                    </div>
                </div>

                <!-- SMEs -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-building" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">SMEs</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Empowering small and medium enterprises to scale</p>
                    </div>
                </div>

                <!-- Women in Business -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-briefcase" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Women in Business</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Supporting female entrepreneurs to achieve their dreams</p>
                    </div>
                </div>

                <!-- Market Vendors -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1300">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Market Vendors</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Quick financing for daily traders and vendors</p>
                    </div>
                </div>

                <!-- Cooperatives -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                    <div class="customer-card" style="background: #ffffff; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(46, 7, 151, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-users" style="font-size: 32px; color: #ffffff;"></i>
                        </div>
                        <h4 style="color: #041b6c; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Cooperatives</h4>
                        <p style="color: #6B7280; font-size: 14px; line-height: 1.6; margin: 0;">Strengthening community groups and cooperatives</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== OUR CUSTOMERS AREA ENDS =======-->
{{--    <!--===== CTA AREA STARTS =======-->--}}
{{--    <section class="cta1-section-area sp4" style="background: #F5F7FA;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div style="background: linear-gradient(135deg, #07294e 0%, #0A4D8C 100%); border-radius: 16px; padding: 60px 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <!-- CTA Content -->--}}
{{--                            <div class="col-lg-8">--}}
{{--                                <div class="cta-header" data-aos="fade-right" data-aos-duration="1000">--}}
{{--                                    <h2 style="color: #fff; font-size: 36px; font-weight: 700; line-height: 1.3; margin-bottom: 16px;">--}}
{{--                                        Ready to Transform Your Financial Future?--}}
{{--                                    </h2>--}}
{{--                                    <p style="color: rgba(255, 255, 255, 0.9); font-size: 16px; line-height: 1.6; margin-bottom: 32px;">--}}
{{--                                        Join thousands of satisfied clients. Get approved in 24-48 hours with competitive rates and transparent terms.--}}
{{--                                    </p>--}}

{{--                                    <!-- CTA Buttons -->--}}
{{--                                    <div class="btn-area1">--}}
{{--                                        <a href="" class="vl-btn4">Apply For a Loan <span><i class="fa-solid fa-arrow-right"></i></span></a>--}}
{{--                                        <a href="{{  url('/contact') }}" class="vl-btn4 btn2">Speak to an Advisor <span><i class="fa-solid fa-arrow-right"></i></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- CTA Stats -->--}}
{{--                            <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">--}}
{{--                                <div class="row g-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div style="text-align: center; padding: 20px; background: rgba(255, 255, 255, 0.15); border-radius: 12px;">--}}
{{--                                            <h4 style="color: #fff; font-size: 32px; font-weight: 700; margin-bottom: 5px;">98%</h4>--}}
{{--                                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 13px; margin: 0;">Approval Rate</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div style="text-align: center; padding: 20px; background: rgba(255, 255, 255, 0.15); border-radius: 12px;">--}}
{{--                                            <h4 style="color: #fff; font-size: 32px; font-weight: 700; margin-bottom: 5px;">1,000+</h4>--}}
{{--                                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 13px; margin: 0;">Happy Clients</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div style="text-align: center; padding: 20px; background: rgba(255, 255, 255, 0.15); border-radius: 12px;">--}}
{{--                                            <h4 style="color: #fff; font-size: 32px; font-weight: 700; margin-bottom: 5px;">24-48h</h4>--}}
{{--                                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 13px; margin: 0;">Fast Approval</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div style="text-align: center; padding: 20px; background: rgba(255, 255, 255, 0.15); border-radius: 12px;">--}}
{{--                                            <h4 style="color: #fff; font-size: 32px; font-weight: 700; margin-bottom: 5px;">15+</h4>--}}
{{--                                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 13px; margin: 0;">Years Experience</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--===== CTA AREA ENDS =======-->--}}

    <!--===== FAQ AREA STARTS =======-->
    <div class="faq-inner-section-area sp4" style="background: #F5F7FA;">
        <div class="container">
            <div class="row">
                <div class="heading4 text-center space-margin60">
                    <h5 data-aos="fade-up" data-aos-duration="800">FAQ</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="faq-widget-area text-center">

                        <div class="space48"></div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="all-images">
                                                <div class="images-area">
                                                    <div class=" ">
                                                        <img src="assets/img/all-images/loans2.jpg" alt="" style="border-radius: 5px">
                                                    </div>
                                                    {{--                            <img src="assets/img/elements/elements7.png" alt="" class="elements7 aniamtion-key-1">--}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample2">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                                I own a micro business and have no substantial collateral. Do I qualify to access any of your services?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Most definitely. Our products are financially inclusive and flexible to meet you at your point of need.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                How do I get started?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Leave us a message through the numbers provided or via the contact form and we will do the rest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                I'm risk averse. I want to know my exact loan repayment options before I get started.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>We've built an in-house and specialised calculator to help you stay in charge of your finances.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                How legit are you?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>We're registered with the central bank, the Reserve Bank of Zimbabwe and operate under the strict terms of our licensing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                I'm looking to build financial capacity, what options are available to me apart from loans?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>We have a wide range of products that empower our clients through a discipline of consistent and deliberate savings to achieve both short term and long term goals.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample3">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                                What services does your company offer?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEleven" class="accordion-collapse collapse " data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                                How can IT solutions benefit my business?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                                What is the process for onboarding new client?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample4">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtysix" aria-expanded="true" aria-controls="collapseThirtysix">
                                                                What services does your company offer?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtysix" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyseven" aria-expanded="false" aria-controls="collapseThirtyseven">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyeight" aria-expanded="false" aria-controls="collapseThirtyeight">
                                                                How can IT solutions benefit my business?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtynine" aria-expanded="false" aria-controls="collapseThirtynine">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtynine" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">
                                                                What is the process for onboarding new client?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourty" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample5">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                                What services does your company offer?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSixteen" class="accordion-collapse collapse show" data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                                                                How can IT solutions benefit my business?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEightteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                                What is the process for onboarding new client?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample6">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyone" aria-expanded="true" aria-controls="collapseFourtyone">
                                                                What services does your company offer?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyone" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtytwo" aria-expanded="false" aria-controls="collapseFourtytwo">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtythree" aria-expanded="false" aria-controls="collapseFourtythree">
                                                                How can IT solutions benefit my business?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfour" aria-expanded="false" aria-controls="collapseFourtyfour">
                                                                What industries do you specialize in?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfive" aria-expanded="false" aria-controls="collapseFourtyfive">
                                                                What is the process for onboarding new client?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== FAQ AREA ENDS =======-->

{{--    <!--===== CONTACT AREA STARTS =======-->--}}
{{--    <div class="contact4-section-area sp1">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="contact-header heading4">--}}
{{--                        <h5 data-aos="fade-left" data-aos-duration="800">Contact Us</h5>--}}
{{--                        <div class="space16"></div>--}}
{{--                        <h2 class="text-anime-style-3">Let’s Help You Access the Funding You Need</h2>--}}
{{--                        <div class="space16"></div>--}}
{{--                        <p data-aos="fade-left" data-aos-duration="900"> Whether you’re looking for a business loan, personal financing, or guidance on the right loan option, our team is here to help you every step of the way. Speak to us today and take the next step toward financial stability and growth.</p>--}}
{{--                        <div class="space32"></div>--}}
{{--                        <div class="contact-boxarea">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="900">--}}
{{--                                    <div class="cta-author-area">--}}
{{--                                        <div class="icons">--}}
{{--                                            <img src="assets/img/icons/phn5.svg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="space16"></div>--}}
{{--                                        <div class="text">--}}
{{--                                            <p>Gives us a Call</p>--}}
{{--                                            <div class="space18"></div>--}}
{{--                                            <a href="tel:+1234567890"> (+263) 777 157 102</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">--}}
{{--                                    <div class="cta-author-area">--}}
{{--                                        <div class="icons">--}}
{{--                                            <img src="assets/img/icons/mail5.svg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="space16"></div>--}}
{{--                                        <div class="text">--}}
{{--                                            <p>Send me Mail</p>--}}
{{--                                            <div class="space18"></div>--}}
{{--                                            <a href="mailto:info@visionpluswealth.com">info@visionpluswealth.com</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-1"></div>--}}
{{--                <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">--}}
{{--                    <div class="contact-main-boxarea">--}}
{{--                        <h4>Leave A Message</h4>--}}
{{--                        <div class="space12"></div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="input-area">--}}
{{--                                    <input type="text" placeholder="Full Name*">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-6">--}}
{{--                                <div class="input-area">--}}
{{--                                    <input type="number" placeholder="Phone Number*">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-12">--}}
{{--                                <div class="input-area">--}}
{{--                                    <input type="email" placeholder="Email Address*">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-12">--}}
{{--                                <div class="input-area">--}}
{{--                                    <select name="country" id="country" class="country-area nice-select">--}}
{{--                                        <option value="1" data-display="Service Type">Service Type</option>--}}
{{--                                        <option value="">Belgium</option>--}}
{{--                                        <option value="">Brezil</option>--}}
{{--                                        <option value="">Argentina</option>--}}
{{--                                        <option value="">Bangladesh</option>--}}
{{--                                        <option value="">Germany</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="input-area">--}}
{{--                                    <textarea placeholder="Message"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-12">--}}
{{--                                <div class="input-area text-end">--}}
{{--                                    <button type="submit" class="vl-btn4">submit now <span><i class="fa-solid fa-arrow-right"></i></span></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--===== CONTACT AREA ENDS =======-->--}}

    <!--===== CTA AREA STARTS =======-->
    <!--===== CTA AREA STARTS =======-->
    <section class="cta1-section-area sp4">
        <div class="cta-inner">
            <div class="row align-items-center">

                <!-- CTA Content -->
                <div class="col-lg-5">
                    <div class="cta-header">
                        <h2>Ready to Transform Your Financial Future?</h2>

                        <div class="space32"></div>

                        <div class="btn-area1">
                            <a href="{{  url('/loan-application') }}" class="vl-btn4">
                                Apply For a Loan
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>

                            <a href="{{  url('/contact') }}" class="vl-btn4 btn2">
                                Speak to an Advisor
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTA Image -->
                <div class="col-lg-7">
                    <div class="cta-img">
                        <img src="assets/img/all-images/cta.png" alt="Vision Plus Wealth CTA">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--===== CTA AREA ENDS =======-->

@endsection
