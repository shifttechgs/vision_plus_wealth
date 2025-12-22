@extends("layouts.master")
@section("content")
<!--===== HERO AREA STARTS =======-->
<div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="inner-header text-center">
                    <h2>About Us</h2>
                    <div class="space24"></div>
                    <a href="{{ url('/') }}">Home <i class="fa-solid fa-angle-right"></i> <span>About Us</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="aboutinner-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-heading heading4">
                    <h5 data-aos="fade-left" data-aos-duration="800">About Vision Plus Wealth</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3">Your Most Preferred Financial Services Partner</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">Vision Plus Wealth is a Micro Finance Institution (MFI) founded in 2022 and registered with the Reserve Bank of Zimbabwe. We specialize in providing comprehensive financial services to underserved micro, small, and medium businesses across Zimbabwe, including the agricultural and mining sectors.</p>
                    <div class="space32"></div>
                    <div class="pera-box" data-aos="fade-left" data-aos-duration="1000">
                        <div class="icons">
                            <img src="assets/img/icons/about-icon.svg" alt="">
                        </div>
                        <div class="text">
                            <a href="">Business & Agricultural Loans</a>
                            <div class="space10"></div>
                            <p>Tailored financing solutions for businesses, agricultural ventures, and salary-based loans designed to fuel growth and sustainability.</p>
                        </div>
                    </div>
                    <div class="space32"></div>
                    <div class="pera-box" data-aos="fade-left" data-aos-duration="1000">
                        <div class="icons">
                            <img src="assets/img/icons/about-icon2.svg" alt="">
                        </div>
                        <div class="text">
                            <a href="">Advisory & Capacity Building</a>
                            <div class="space10"></div>
                            <p>Expert loan administration services and client capacity building programs to ensure long-term financial success and business growth.</p>
                        </div>
                    </div>
                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                        <a href="{{  url('/contact') }}" class="vl-btn4">Speak To An Advisor <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-images-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img2 reveal">
                                <img src="assets/img/all-images/hero/vpw.avif" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img2 reveal">
                                <img src="assets/img/all-images/happyLoans.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="space30"></div>
                            <div class="img1 reveal">
                                <img src="assets/img/all-images/cta.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->


<!--===== MISSION-VISSION AREA STARTS =======-->
<div class="others-vission-area sp4" style="background-color: #f8f9fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading4 text-center space-margin60">
                    <h5>Our Mission, Vision & Values</h5>
                    <div class="space16"></div>
                    <h2>Guiding Principles That Drive Our Success</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mission-vission-area">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <span class="text">Our Vision</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <span class="text">Our Mission</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <span class="text">Our Core Values</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="heading1">
                                        <h2>Our Vision</h2>
                                        <div class="space16"></div>
                                        <p class="lead">"To be the most preferred financial services partner by our clients."</p>
                                        <div class="space16"></div>
                                        <p>At Vision Plus Wealth, we aspire to be recognized as the go-to financial services provider for micro, small, and medium enterprises across Zimbabwe. We envision a future where every business, regardless of size or sector, has access to the financial resources and expertise needed to thrive and contribute to Zimbabwe's economic growth.</p>
                                        <div class="space16"></div>
                                        <ul>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Empowering Underserved Business Sectors</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Building Long-Term Client Partnerships</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Driving Sustainable Economic Growth</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Leading Innovation in Microfinance</li>
                                        </ul>
                                        <div class="space32"></div>
                                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                                            <a href="{{  url('/contact') }}" class="vl-btn4">Speak to an Advisor  <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="img1">
                                        <img src="assets/img/all-images/loans.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="heading1">
                                        <h2>Our Mission</h2>
                                        <div class="space16"></div>
                                        <p class="lead">"Providing assistance to make lives better through competitive financial services that generate success growth and continuity."</p>
                                        <div class="space16"></div>
                                        <p>We are committed to delivering exceptional financial services that transform the lives of our clients. Through tailored business loans, agricultural financing, salary-based lending, and comprehensive advisory services, we help micro, small, and medium enterprises achieve sustainable growth and long-term success.</p>
                                        <div class="space16"></div>
                                        <ul>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Competitive Business & Agricultural Financing</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Client-Centric Advisory Services</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Capacity Building & Training Programs</li>
                                            <li><img src="assets/img/icons/check1.svg" alt=""> Sustainable Business Growth Solutions</li>
                                        </ul>
                                        <div class="space32"></div>
                                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                                            <a href="{{  url('/contact') }}" class="vl-btn4">Speak to an Advisor  <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="img1">
                                        <img src="assets/img/all-images/mission.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading1 text-center mb-5">
                                        <h2>Our Core Values</h2>
                                        <div class="space16"></div>
                                        <p class="mx-auto" style="max-width: 800px;">Our six core values form the foundation of everything we do at Vision Plus Wealth. These principles guide our interactions with clients, partners, and team members, ensuring we deliver exceptional service while maintaining the highest standards of integrity and professionalism.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Truthfulness</h4>
                                        <p>Honesty in all our operations and transparent communication with all stakeholders.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Customer Centricity</h4>
                                        <p>Prioritizing clients in every decision we make to ensure their success.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Partnership</h4>
                                        <p>Building mutually beneficial, revenue-generating business relationships.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Respect</h4>
                                        <p>Valuing and honoring every individual we interact with.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Teamwork</h4>
                                        <p>Achieving goals through collaborative effort and shared vision.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="value-card">
                                        <div class="value-icon">
                                            <img src="assets/img/icons/check1.svg" alt="">
                                        </div>
                                        <h4>Innovation</h4>
                                        <p>Creating continuous improvements through fresh perspectives and ideas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                                        <a href="{{  url('/contact') }}" class="vl-btn4">Speak to an Advisor <span><i class="fa-solid fa-arrow-right"></i></span></a>
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

<!--===== MISSION-VISSION AREA ENDS =======-->



<!--===== CTA AREA STARTS =======-->
<section class="cta1-section-area sp1">
    <div class="cta-inner">
        <div class="row align-items-center">

            <!-- CTA Content -->
            <div class="col-lg-5">
                <div class="cta-header">
                    <h2>Ready to Transform Your Financial Future?</h2>

                    <div class="space32"></div>

                    <div class="btn-area1">
                        <a href="#" class="vl-btn4">
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
