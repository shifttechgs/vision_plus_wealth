@extends("layouts.master")

@section('title', 'Vision Plus Wealth')
@section('meta_description', 'Vision Plus Wealth offers fast business loans, agricultural financing, and salary-based loans across Zimbabwe. RBZ licensed and regulated. 500+ businesses funded. Apply online today.')
@section('canonical', url('/'))
@section('og_title', 'Vision Plus Wealth')
@section('og_description', 'Fast business loans, agricultural financing, and salary-based loans across Zimbabwe. RBZ licensed. 500+ businesses funded, 98% approval rate. Apply in minutes.')
@section('og_url', url('/'))
@section('og_image', url('assets/img/all-images/hero/vpw.avif'))

@push('styles')
    <link rel="stylesheet" href="assets/css/how-it-works.css">
@endpush

@push('scripts')
    <script src="assets/js/how-it-works.js"></script>
    <script src="assets/js/faq.js"></script>
@endpush

@section("content")

    <!--===== HERO AREA STARTS =======-->
    <div class="hero4-section-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero4-heading">
                        <!-- Trust badge -->
                        <div class="hero-trust-badge" data-aos="fade-up" data-aos-duration="600">
                            <i class="fas fa-shield-alt"></i>
                            <span>RBZ Licensed & Regulated</span>
                        </div>
                        <div class="space12"></div>

                        <!-- Headline -->
                        <h1 class="hero-headline text-anime-style-3">Get the Capital Your Business Needs — Fast.</h1>

                        <div class="space12"></div>

                        <!-- Tagline -->
                        <p class="hero-tagline" data-aos="fade-up" data-aos-duration="750"><em>Different Needs, One Solution.</em></p>

                        <div class="space20"></div>

                        <!-- CTA -->
                        <div class="btn-area1" data-aos="fade-up" data-aos-duration="900">
                            <a href="{{ url('/loan-application') }}" class="vl-btn4">Apply For a Loan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            <a href="{{ url('/contact') }}" class="vl-btn4 btn2">Talk to an Advisor <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>

                        <div class="space16"></div>

                        <!-- Inline social proof -->
                        <div class="hero-proof" data-aos="fade-up" data-aos-duration="1000">
                            <div class="hero-proof-item">
                                <i class="fas fa-check-circle"></i>
                                <span><strong>500+</strong> businesses funded</span>
                            </div>
                            <div class="hero-proof-item">
                                <i class="fas fa-check-circle"></i>
                                <span><strong>98%</strong> approval rate</span>
                            </div>
                            <div class="hero-proof-item">
                                <i class="fas fa-check-circle"></i>
                                <span><strong>$2M+</strong> disbursed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="images-area hero-image-wrapper" data-aos="fade-left" data-aos-duration="1000">
                        <div class="img1">
                            <img src="assets/img/all-images/hero/vpw.avif" alt="VisionPlus Wealth — empowering businesses" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <div class="service3-section-area sp2" id="services">
        <div class="container">

            <!-- Section Header — split layout with stock photo -->
            <div class="row align-items-center" style="margin-bottom: 50px;">
                <div class="col-lg-6">
                    <div class="heading4 space-margin60">
                        <h5 data-aos="fade-up" data-aos-duration="800">Our Services</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Financial Solutions Designed Around You</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">From short-term working capital to long-term growth financing — we provide the tools to move your ambitions forward.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 16px 48px rgba(5, 43, 81, 0.16); position: relative;">
                        <img src="assets/img/stock/services-meeting.jpg" alt="Professional financial consultation" loading="lazy" style="width: 100%; height: 320px; object-fit: cover; display: block;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 50%; background: linear-gradient(to top, rgba(5, 43, 81, 0.6) 0%, transparent 100%);"></div>
                        <div style="position: absolute; bottom: 20px; left: 24px; color: #ffffff;">
                            <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; opacity: 0.9;">Personalized Advisory</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Cards — 3-column grid -->
            <div class="row g-4">

                <!-- Business Loans -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-briefcase" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">Business Loans</a>
                            <div class="space12"></div>
                            <p>Short-term working capital, market-day loans, and investment financing. A quick one-time facility for urgent business funding needs.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Agricultural Loans -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-seedling" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">Agricultural Loans</a>
                            <div class="space12"></div>
                            <p>Financing for farming operations — maize, tobacco, and more. Flexible repayment structured around your harvest cycle.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Salary Based Loans -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-wallet" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">Salary Based Loans</a>
                            <div class="space12"></div>
                            <p>Personal financing secured against your salary. Predictable repayments deducted at source for a stress-free experience.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Risk Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-shield-halved" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">Risk Management</a>
                            <div class="space12"></div>
                            <p>Identify, assess, and mitigate financial risks to preserve your business's stability and protect your bottom line.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/contact') }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Business Growth Planning -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-chart-line" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">Growth Planning</a>
                            <div class="space12"></div>
                            <p>Strategic advisory tailored to help your company achieve sustainable, scalable growth with a clear financial roadmap.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/contact') }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- SME Financing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1300">
                    <div class="service3-single-boxarea vpw-service-card">
                        <div class="icons">
                            <i class="fa-solid fa-building" style="font-size: 28px; color: #ffffff;"></i>
                        </div>
                        <div class="space20"></div>
                        <div class="content">
                            <a href="">SME Financing</a>
                            <div class="space12"></div>
                            <p>Dedicated funding packages for small and medium enterprises — structured to scale with your business as it grows.</p>
                            <div class="space20"></div>
                            <a href="{{ url('/loan-application') }}" class="readmore">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->


    <!-- How It Works -->
    <section class="vpw-how-it-works">
        <div class="container">

            <!-- Header -->
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="hiw-header">
                        <span class="hiw-label" data-aos="fade-up" data-aos-duration="600">How It Works</span>
                        <h2 class="hiw-title text-anime-style-3">Get Funded in Four Simple Steps</h2>
                        <p class="hiw-subtitle" data-aos="fade-up" data-aos-duration="800">No complexity. No hidden processes. Just a clear path from application to cash in hand.</p>
                    </div>
                </div>
            </div>

            <!-- Steps Grid -->
            <div class="hiw-steps">

                <!-- Step 1 -->
                <div class="hiw-step" data-aos="fade-up" data-aos-delay="0">
                    <div class="hiw-step-inner">
                        <div class="hiw-step-num">01</div>
                        <div class="hiw-step-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="hiw-step-title">Apply Online</h4>
                        <p class="hiw-step-desc">Fill out a quick form on our website, via WhatsApp, or walk into any branch.</p>
                        <span class="hiw-step-time"><i class="far fa-clock"></i> 5 minutes</span>
                    </div>
                    <div class="hiw-connector"><span></span></div>
                </div>

                <!-- Step 2 -->
                <div class="hiw-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="hiw-step-inner">
                        <div class="hiw-step-num">02</div>
                        <div class="hiw-step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4 class="hiw-step-title">Submit Documents</h4>
                        <p class="hiw-step-desc">Provide your ID, latest payslip, and relevant business documents.</p>
                        <span class="hiw-step-time"><i class="far fa-clock"></i> Same day</span>
                    </div>
                    <div class="hiw-connector"><span></span></div>
                </div>

                <!-- Step 3 -->
                <div class="hiw-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="hiw-step-inner">
                        <div class="hiw-step-num">03</div>
                        <div class="hiw-step-icon">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h4 class="hiw-step-title">Get Approved</h4>
                        <p class="hiw-step-desc">Our team reviews and gives you a clear, transparent decision fast.</p>
                        <span class="hiw-step-time"><i class="far fa-clock"></i> 24 – 48 hours</span>
                    </div>
                    <div class="hiw-connector"><span></span></div>
                </div>

                <!-- Step 4 -->
                <div class="hiw-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="hiw-step-inner">
                        <div class="hiw-step-num">04</div>
                        <div class="hiw-step-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4 class="hiw-step-title">Receive Funds</h4>
                        <p class="hiw-step-desc">Money deposited directly into your account. No delays, no surprises.</p>
                        <span class="hiw-step-time"><i class="far fa-clock"></i> Instant</span>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="hiw-cta" data-aos="fade-up" data-aos-duration="800">
                <a href="{{ url('/loan-application') }}" class="vl-btn4">Start Your Application <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>

        </div>
    </section>
    <!--===== HOW IT WORKS ENDS =======-->


    <!--===== WHY CHOOSE US START =======-->
    <section class="project1-section vpw-why-choose">
        <div class="container">

            <!-- Header -->
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="wcu-header">
                        <span class="wcu-label" data-aos="fade-up" data-aos-duration="600">Why Choose Us</span>
                        <h2 class="wcu-title text-anime-style-3">The VisionPlus Wealth Difference</h2>
                        <p class="wcu-subtitle" data-aos="fade-up" data-aos-duration="800">We don't just lend money — we build lasting partnerships that help you grow.</p>
                    </div>
                </div>
            </div>

            <!-- Two-column layout: features + image -->
            <div class="row align-items-center">

                <!-- Left: Feature list -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="wcu-features">

                        <div class="wcu-feature">
                            <div class="wcu-feature-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="wcu-feature-content">
                                <h4>24–48 Hour Approvals</h4>
                                <p>No waiting weeks. Our streamlined process gets you a decision fast with minimal paperwork.</p>
                            </div>
                        </div>

                        <div class="wcu-feature">
                            <div class="wcu-feature-icon">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <div class="wcu-feature-content">
                                <h4>Flexible Repayment Plans</h4>
                                <p>Terms tailored to your cash flow — whether you're salaried, seasonal, or scaling a business.</p>
                            </div>
                        </div>

                        <div class="wcu-feature">
                            <div class="wcu-feature-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="wcu-feature-content">
                                <h4>100% Transparent Pricing</h4>
                                <p>No hidden fees, no surprises. You see the full cost upfront before you commit.</p>
                            </div>
                        </div>

                        <div class="wcu-feature">
                            <div class="wcu-feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="wcu-feature-content">
                                <h4>Dedicated Advisor Support</h4>
                                <p>A real person guides you from application to repayment — not a chatbot.</p>
                            </div>
                        </div>

                    </div>

                    <!-- Single CTA -->
                    <div class="wcu-cta" data-aos="fade-up" data-aos-duration="600">
                        <a href="{{ url('/loan-application') }}" class="vl-btn4">Apply for a Loan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>

                <!-- Right: Image + trust stats -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                    <div class="wcu-visual">
                        <div class="wcu-image">
                            <img src="assets/img/stock/customer-professional.jpg" alt="VisionPlus Wealth client consultation" loading="lazy">
                        </div>

                        <!-- Floating trust stats -->
                        <div class="wcu-stat wcu-stat--top">
                            <div class="wcu-stat-value">98%</div>
                            <div class="wcu-stat-label">Approval Rate</div>
                        </div>
                        <div class="wcu-stat wcu-stat--bottom">
                            <div class="wcu-stat-value">500+</div>
                            <div class="wcu-stat-label">Clients Served</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--===== WHY CHOOSE US END =======-->


    <!--===== TESTIMONIAL AREA STARTS =======-->
    <section class="vpw-testimonials">
        <div class="container">

            <!-- Header -->
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="testi-header">
                        <span class="testi-label" data-aos="fade-up" data-aos-duration="600">Testimonials</span>
                        <h2 class="testi-title text-anime-style-3">What Our Clients Say About Us</h2>
                        <p class="testi-subtitle" data-aos="fade-up" data-aos-duration="800">Real stories from real people we've helped grow.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Cards -->
            <div class="row g-4">

                <!-- Testimonial 1 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="testi-card">
                        <div class="testi-quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">"Because of my experience working with other so called Microfinance Institutions, I was skeptical before engaging VPW. They have proven to be highly professional and true to their promise. Their range of products is also diverse and flexible for every need."</p>
                        <div class="testi-author">
                            <div class="testi-author-avatar">PM</div>
                            <div class="testi-author-info">
                                <h5>Peter Musa</h5>
                                <span>Tobacco Farmer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testi-card">
                        <div class="testi-quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testi-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testi-text">"Initially thought it was all about loans, but VPW offers much more. My financial capacity and decision making has improved since I started working with them. I found one that works for me."</p>
                        <div class="testi-author">
                            <div class="testi-author-avatar">PN</div>
                            <div class="testi-author-info">
                                <h5>Petronella Ndlovu</h5>
                                <span>Small Scale Miner</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== TEAM AREA STARTS =======-->
    <section class="leadership-section sp2"  id="board" style="position: relative; overflow: hidden;">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading4 text-center space-margin60">
                        <h5>Our Board</h5>
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">Expertise You Can Trust</h2>
                    </div>
                </div>
            </div>

            <!-- Team Grid - Top Row: 2 Members -->
            <div class="row justify-content-center mb-2" style="gap: 120px;">
                <!-- Board Member 1 -->
                <div class="col-auto" style="max-width: 320px; padding: 0;" data-aos="fade-up" data-aos-duration="900">
                    <div class="leadership-card text-center">
                        <div class="leadership-image-wrapper">
                            <div class="leadership-image-container" style="width: 220px; height: 220px; margin: 0 auto; position: relative;">
                                <img src="assets/img/board/naome_draft.png" alt="Naome Muzvidziwa - Board Chair" loading="lazy" class="leadership-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        <div class="leadership-content mt-3">
                            <h3 class="leadership-name" style="font-size: 1.125rem; font-weight: 600; color: #1a202c; margin-bottom: 0.25rem; line-height: 1.4;">Naome Muzvidziwa</h3>
                            <p class="leadership-role" style="font-size: 0.875rem; color: #718096; margin-bottom: 0.5rem; font-weight: 400;">Board Chair (Non Executive)</p>

                        </div>
                    </div>
                </div>

                <!-- Board Member 2 -->
                <div class="col-auto" style="max-width: 320px; padding: 0;" data-aos="fade-up" data-aos-duration="1000">
                    <div class="leadership-card text-center">
                        <div class="leadership-image-wrapper">
                            <div class="leadership-image-container" style="width: 220px; height: 220px; margin: 0 auto; position: relative;">
                                <img src="assets/img/board/tinashe_draft.png" alt="Tinashe Muchenje - Managing Director" loading="lazy" class="leadership-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        <div class="leadership-content mt-3">
                            <h3 class="leadership-name" style="font-size: 1.125rem; font-weight: 600; color: #1a202c; margin-bottom: 0.25rem; line-height: 1.4;">Tinashe Muchenje</h3>
                            <p class="leadership-role" style="font-size: 0.875rem; color: #718096; margin-bottom: 0.5rem; font-weight: 400;">Managing Director</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Grid - Bottom Row: 3 Members -->
            <div class="row justify-content-center g-3" >
                <!-- Board Member 3 -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="leadership-card text-center">
                        <div class="leadership-image-wrapper">
                            <div class="leadership-image-container" style="width: 220px; height: 220px; margin: 0 auto; position: relative;">
                                <img src="assets/img/board/rudo_draft.png" alt="Rudo A.L. Ndoro - Executive Director" loading="lazy" class="leadership-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        <div class="leadership-content mt-3">
                            <h3 class="leadership-name" style="font-size: 1.125rem; font-weight: 600; color: #1a202c; margin-bottom: 0.25rem; line-height: 1.4;">Rudo A.L. Ndoro</h3>
                            <p class="leadership-role" style="font-size: 0.875rem; color: #718096; margin-bottom: 0.5rem; font-weight: 400;">Executive Director</p>

                        </div>
                    </div>
                </div>

                <!-- Board Member 4 -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="leadership-card text-center">
                        <div class="leadership-image-wrapper">
                            <div class="leadership-image-container" style="width: 220px; height: 220px; margin: 0 auto; position: relative;">
                                <img src="assets/img/board/Ivony_draft.png" alt="Dr. Ivony K Katsande - Non Executive Director" loading="lazy" class="leadership-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        <div class="leadership-content mt-3">
                            <h3 class="leadership-name" style="font-size: 1.125rem; font-weight: 600; color: #1a202c; margin-bottom: 0.25rem; line-height: 1.4;">Dr. Ivony K Katsande</h3>
                            <p class="leadership-role" style="font-size: 0.875rem; color: #718096; margin-bottom: 0.5rem; font-weight: 400;">Non Executive Director</p>

                        </div>
                    </div>
                </div>

                <!-- Board Member 5 -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="leadership-card text-center">
                        <div class="leadership-image-wrapper">
                            <div class="leadership-image-container" style="width: 220px; height: 220px; margin: 0 auto; position: relative;">
                                <img src="assets/img/board/cuthbert_draft.png" alt="Cuthbert M Muchenje - Non Executive Director" loading="lazy" class="leadership-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        <div class="leadership-content mt-3">
                            <h3 class="leadership-name" style="font-size: 1.125rem; font-weight: 600; color: #1a202c; margin-bottom: 0.25rem; line-height: 1.4;">Cuthbert M Muchenje</h3>
                            <p class="leadership-role" style="font-size: 0.875rem; color: #718096; margin-bottom: 0.5rem; font-weight: 400;">Non Executive Director</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Styles for Hover Effects -->
        <style>
            .leadership-image:hover {
                transform: scale(1.05);
                box-shadow: 0 15px 40px rgba(0,0,0,0.18);
            }

            @media (max-width: 576px) {
                .leadership-image-container {
                    width: 150px !important;
                    height: 150px !important;
                }
                .leadership-card {
                    margin-bottom: 1rem;
                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .leadership-image-container {
                    width: 160px !important;
                    height: 160px !important;
                }
            }
        </style>
    </section>
    <!--===== TEAM AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    <div class="history1-scetion-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading4 space-margin60">
                        <h5>Our History</h5>
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">The Story of Our Success</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 16px 48px rgba(0, 0, 0, 0.2); margin-bottom: 30px;">
                        <img src="assets/img/stock/history-cityscape.jpg" alt="Harare cityscape" loading="lazy" style="width: 100%; height: 220px; object-fit: cover; display: block;">
                    </div>
                </div>
            </div>
            <div class="boredr"></div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="history-single-slider owl-carousel">

                        <div class="history-boxarea">
                            <h2>2022</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Our Beginning</a>
                            <div class="space12"></div>
                            <p>Established as a registered microfinance institution in Harare, bringing together seasoned finance professionals to unlock SME potential.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2023</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">National Expansion</a>
                            <div class="space12"></div>
                            <p>Expanded our footprint with branches in Bulawayo, Gweru, and Kwekwe, introducing specialized lending solutions for SMEs.</p>
                        </div>

                        <div class="history-boxarea">
                            <h2>2024</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Team Growth</a>
                            <div class="space12"></div>
                            <p>Expanded our team to over 50 dedicated professionals, building a strong and capable workforce across Zimbabwe.</p>

                        </div>

                        <div class="history-boxarea">
                            <h2>2025</h2>
                            <div class="space32"></div>
                            <span></span>
                            <div class="space32"></div>
                            <a href="">Digital Innovation</a>
                            <div class="space12"></div>
                            <p>Investing in digital transformation to enhance service delivery and empower thousands of SMEs across Zimbabwe.</p>
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
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-farmer.jpg" alt="African farmers" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-wheat-awn" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Farmers</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Supporting agricultural growth with tailored financing</p>
                        </div>
                    </div>
                </div>

                <!-- Small Business Owners -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-shopowner.jpg" alt="Small business owner" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-store" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Small Business Owners</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Helping local businesses thrive and expand</p>
                        </div>
                    </div>
                </div>

                <!-- Entrepreneurs -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-entrepreneur.jpg" alt="African entrepreneur" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-lightbulb" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Entrepreneurs</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Fueling innovation and startup ventures</p>
                        </div>
                    </div>
                </div>

                <!-- Salaried Employees -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-professional.jpg" alt="African professional" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-user-tie" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Salaried Employees</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Personal loans for life's important moments</p>
                        </div>
                    </div>
                </div>

                <!-- SMEs -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-sme.jpg" alt="SME business" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-building" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">SMEs</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Empowering small and medium enterprises</p>
                        </div>
                    </div>
                </div>

                <!-- Women in Business -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/services-meeting.jpg" alt="Women in business" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-briefcase" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Women in Business</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Supporting female entrepreneurs</p>
                        </div>
                    </div>
                </div>

                <!-- Market Vendors -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1300">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/customer-vendor.jpg" alt="Market vendors" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-cart-shopping" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Market Vendors</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Quick financing for daily traders</p>
                        </div>
                    </div>
                </div>

                <!-- Cooperatives -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                    <div class="customer-card" style="position: relative; border-radius: 16px; overflow: hidden; height: 280px; box-shadow: 0 8px 24px rgba(5, 43, 81, 0.12); transition: all 0.4s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 16px 40px rgba(5, 43, 81, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(5, 43, 81, 0.12)';">
                        <img src="assets/img/stock/history-cityscape.jpg" alt="Cooperatives" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(5, 43, 81, 0.85) 0%, rgba(5, 43, 81, 0.3) 50%, rgba(5, 43, 81, 0.1) 100%);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px;">
                            <div style="width: 44px; height: 44px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; backdrop-filter: blur(4px);">
                                <i class="fa-solid fa-users" style="font-size: 20px; color: #ffffff;"></i>
                            </div>
                            <h4 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Cooperatives</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; line-height: 1.5; margin: 0;">Strengthening community groups</p>
                        </div>
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
{{--                    <div style="background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); border-radius: 16px; padding: 60px 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">--}}
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
    <section class="vpw-faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="faq-header" data-aos="fade-up" data-aos-duration="600">
                        <span class="faq-label">FAQ</span>
                        <h2 class="faq-title text-anime-style-3">Got Questions? We Have Answers</h2>
                        <p class="faq-subtitle">Everything you need to know about our services, eligibility, and how to get started.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-start g-5">
                <!-- Accordion Column -->
                <div class="col-lg-7" data-aos="fade-up" data-aos-duration="800">
                    <div class="vpw-accordion">
                        <!-- FAQ 1 -->
                        <div class="vpw-accordion-item active">
                            <button class="vpw-accordion-trigger" aria-expanded="true" aria-controls="faq-panel-1">
                                <span class="vpw-accordion-icon"><i class="fas fa-user-shield"></i></span>
                                <span class="vpw-accordion-question">I own a micro business with no collateral. Do I qualify?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-1">
                                <p>Most definitely. Our products are financially inclusive and flexible to meet you at your point of need. We offer unsecured lending options designed specifically for micro and small businesses.</p>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div class="vpw-accordion-item">
                            <button class="vpw-accordion-trigger" aria-expanded="false" aria-controls="faq-panel-2">
                                <span class="vpw-accordion-icon"><i class="fas fa-rocket"></i></span>
                                <span class="vpw-accordion-question">How do I get started?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-2" hidden>
                                <p>Simply apply online through our website, call us on the numbers provided, or visit any of our branches. Our team will guide you through the entire process — from application to fund disbursement.</p>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div class="vpw-accordion-item">
                            <button class="vpw-accordion-trigger" aria-expanded="false" aria-controls="faq-panel-3">
                                <span class="vpw-accordion-icon"><i class="fas fa-calculator"></i></span>
                                <span class="vpw-accordion-question">Can I calculate my repayment before applying?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-3" hidden>
                                <p>Absolutely. We've built a specialised loan calculator to help you understand your repayment options upfront. Stay in charge of your finances before you even commit.</p>
                            </div>
                        </div>
                        <!-- FAQ 4 -->
                        <div class="vpw-accordion-item">
                            <button class="vpw-accordion-trigger" aria-expanded="false" aria-controls="faq-panel-4">
                                <span class="vpw-accordion-icon"><i class="fas fa-landmark"></i></span>
                                <span class="vpw-accordion-question">Are you a registered and licensed institution?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-4" hidden>
                                <p>Yes. VisionPlus Wealth is registered with the Reserve Bank of Zimbabwe and operates under strict regulatory licensing. Your funds and data are in safe hands.</p>
                            </div>
                        </div>
                        <!-- FAQ 5 -->
                        <div class="vpw-accordion-item">
                            <button class="vpw-accordion-trigger" aria-expanded="false" aria-controls="faq-panel-5">
                                <span class="vpw-accordion-icon"><i class="fas fa-piggy-bank"></i></span>
                                <span class="vpw-accordion-question">What options do you offer besides loans?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-5" hidden>
                                <p>We offer a wide range of products including savings plans, investment advisory, and financial capacity building programmes designed to help you achieve both short-term and long-term financial goals.</p>
                            </div>
                        </div>
                        <!-- FAQ 6 -->
                        <div class="vpw-accordion-item">
                            <button class="vpw-accordion-trigger" aria-expanded="false" aria-controls="faq-panel-6">
                                <span class="vpw-accordion-icon"><i class="fas fa-clock"></i></span>
                                <span class="vpw-accordion-question">How long does it take to receive my funds?</span>
                                <span class="vpw-accordion-arrow"><i class="fas fa-chevron-down"></i></span>
                            </button>
                            <div class="vpw-accordion-panel" id="faq-panel-6" hidden>
                                <p>Once approved, funds are typically disbursed within 24–48 hours directly to your account. We understand that time is money for growing businesses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CTA Sidebar -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="faq-sidebar">
                        <div class="faq-sidebar-card">
                            <div class="faq-sidebar-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4>Still have questions?</h4>
                            <p>Our team is ready to help you find the right financial solution for your needs.</p>
                            <a href="{{ url('/contact') }}" class="faq-sidebar-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
                            <div class="faq-sidebar-divider"></div>
                            <div class="faq-sidebar-contact">
                                <div class="faq-sidebar-contact-item">
                                    <i class="fas fa-phone"></i>
                                    <span>(+263) 242 778532</span>
                                </div>
                                <div class="faq-sidebar-contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>info@visionpluswealth.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-trust-badges">
                            <div class="faq-trust-badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>RBZ Registered</span>
                            </div>
                            <div class="faq-trust-badge">
                                <i class="fas fa-lock"></i>
                                <span>Secure & Confidential</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== FAQ AREA ENDS =======-->

{{--    <!--===== CONTACT AREA STARTS =======-->--}}
{{--    <div class="contact4-section-area sp1">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="contact-header heading4">--}}
{{--                        <h5 data-aos="fade-left" data-aos-duration="800">Contact Us</h5>--}}
{{--                        <div class="space16"></div>--}}
{{--                        <h2 class="text-anime-style-3">Let's Help You Access the Funding You Need</h2>--}}
{{--                        <div class="space16"></div>--}}
{{--                        <p data-aos="fade-left" data-aos-duration="900"> Whether you're looking for a business loan, personal financing, or guidance on the right loan option, our team is here to help you every step of the way. Speak to us today and take the next step toward financial stability and growth.</p>--}}
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
    <section class="cta1-section-area vpw-cta-premium">
        <div class="container">
            <div class="vpw-cta-card">
                <div class="vpw-cta-bg-pattern"></div>
                <div class="row align-items-center">
                    <!-- CTA Content -->
                    <div class="col-lg-6">
                        <div class="vpw-cta-content">
                            <span class="vpw-cta-badge">
                                <i class="fa-solid fa-rocket"></i> Start Your Journey
                            </span>
                            <h2>Ready to Transform Your Financial Future?</h2>
                            <p>Join thousands of Zimbabweans who have unlocked growth with tailored financing solutions designed for your unique needs.</p>
                            <div class="vpw-cta-buttons">
                                <a href="{{ url('/loan-application') }}" class="vpw-cta-btn-primary">
                                    Apply For a Loan
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="{{ url('/contact') }}" class="vpw-cta-btn-outline">
                                    Speak to an Advisor
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="vpw-cta-trust">
                                <div class="vpw-cta-trust-item">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span>Licensed & Regulated</span>
                                </div>
                                <div class="vpw-cta-trust-item">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>24hr Approval</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CTA Image -->
                    <div class="col-lg-6">
                        <div class="vpw-cta-visual">
                            <img src="assets/img/all-images/cta.png" alt="Vision Plus Wealth - Apply for a loan today" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== CTA AREA ENDS =======-->

@endsection

@push('schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@@type": "Question",
                "name": "I own a micro business with no collateral. Do I qualify?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Most definitely. Our products are financially inclusive and flexible to meet you at your point of need. We offer unsecured lending options designed specifically for micro and small businesses."
                }
            },
            {
                "@@type": "Question",
                "name": "How do I get started?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Simply apply online through our website, call us on the numbers provided, or visit any of our branches. Our team will guide you through the entire process."
                }
            },
            {
                "@@type": "Question",
                "name": "Can I calculate my repayment before applying?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Absolutely. We\u0027ve built a specialised loan calculator to help you understand your repayment options upfront."
                }
            },
            {
                "@@type": "Question",
                "name": "Are you a registered and licensed institution?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Yes. VisionPlus Wealth is registered with the Reserve Bank of Zimbabwe and operates under strict regulatory licensing."
                }
            },
            {
                "@@type": "Question",
                "name": "What options do you offer besides loans?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "We offer savings plans, investment advisory, and financial capacity building programmes designed to help you achieve both short-term and long-term financial goals."
                }
            },
            {
                "@@type": "Question",
                "name": "How long does it take to receive my funds?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Once approved, funds are typically disbursed within 24\u201348 hours directly to your account."
                }
            }
        ]
    }
    </script>
@endpush
