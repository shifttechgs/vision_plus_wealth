<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
</div>
<!--===== PROGRESS ENDS=======-->

<!--===== OFFER BANNER STARTS =======-->
<div class="offer-banner-wrapper">
    <div class="offer-banner">
        <div class="container">
            <div class="offer-content">
                <div class="offer-left">
                    <span class="offer-badge pulse">🔥 Limited Time</span>
                </div>
                <div class="offer-center">
                    <span class="offer-text">Get approved in <strong>24 hours</strong> + <strong>Zero application fees</strong> this month!</span>
                </div>
                <div class="offer-right">
                    <span class="offer-countdown" id="offerCountdown">
                        <i class="fas fa-clock"></i>
                        <span class="countdown-text">Ends in: <strong>5 days</strong></span>
                    </span>
                </div>
            </div>
            <button class="offer-close" id="offerClose" aria-label="Close offer banner">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
</div>
<!--===== OFFER BANNER ENDS =======-->

<!--=====HEADER START=======-->
<header class="homepage4-body">
    <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
        <div class="container">
            <div class="row align-items-center row-bg">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="">
                        <a href="{{'/'}}"><img src="assets/img/logo/vpw_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div class="vl-main-menu text-center">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>


{{--                                <li><a href="#">Services <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="service.html">Business Loans</a></li>--}}
{{--                                        <li><a href="service.html">Agricultural Loans</a></li>--}}
{{--                                        <li><a href="service.html">Salary Based Loans</a></li>--}}
{{--                                        <li><a href="service.html">Risk Management & Mitigation</a></li>--}}
{{--                                        <li><a href="service.html">Business Growth Planning</a></li>--}}

{{--                                    </ul>--}}
{{--                                </li>--}}

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') && request()->has('services') ? 'active' : '' }}"
                                       href="{{ url('/') }}#services">
                                        Services
                                    </a>
                                </li>




                                <li><a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                                       href="{{  url('/aboutUs') }}">Company
                                    </a>
                                </li>

                                <li><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                         href="{{  url('/contact') }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-hero-btn d-none d-lg-block text-end">
                        <a href="{{  url('/loan-application') }}" class="vl-btn4">Apply For A Loan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage4-body">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="index.html"><img src="assets/img/logo/vpw_logo.png" alt=""></a>
                </div>
                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <div class="vl-offcanvas-menu d-lg-none mb-40">
                <nav></nav>
            </div>

            <div class="space20"></div>
            <div class="vl-offcanvas-info">
                <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                <div class="space20"></div>
                <span><a href="#"> <i class="fa-regular fa-envelope"></i> +57 9954 6476</a></span>
                <span><a href="#"><i class="fa-solid fa-phone"></i> hello@exdos.com</a></span>
                <span><a href="#"><i class="fa-solid fa-location-dot"></i> Bhemeara,Kushtia</a></span>
            </div>
            <div class="space20"></div>
            <div class="vl-offcanvas-social">
                <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
                <div class="space20"></div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

