<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VisionPlus Wealth - Empowering your financial journey with smart, flexible solutions. Access fast, affordable loans and high-growth investment opportunities.">
    <meta name="keywords" content="microfinance, loans, investments, financial advisory, business loans, personal loans">
    <title>VisionPlus Wealth - Empowering Your Financial Journey</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body>

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Progress Scroll -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!-- Navigation -->
    <header class="header" id="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <a href="#home">
                            <span class="logo-text">VisionPlus <span class="highlight">Wealth</span></span>
                        </a>
                    </div>

                    <div class="nav-menu" id="navMenu">
                        <ul class="nav-list">
                            <li><a href="#home" class="nav-link active">Home</a></li>
                            <li><a href="#loans" class="nav-link">Loans</a></li>
                            <li><a href="#investments" class="nav-link">Investments</a></li>
                            <li><a href="#about" class="nav-link">About Us</a></li>
                            <li><a href="#resources" class="nav-link">Resources</a></li>
                            <li><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="nav-cta">
                            <a href="#apply" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>

                    <button class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background">
            <div class="hero-shape shape-1"></div>
            <div class="hero-shape shape-2"></div>
            <div class="hero-shape shape-3"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title">
                        Empowering Your Financial Journey With
                        <span class="gradient-text typed-text"></span>
                    </h1>
                    <p class="hero-subtitle">
                        Access fast, affordable loans and high-growth investment opportunities tailored to your goals — all with transparency, speed, and trusted support.
                    </p>

                    <!-- Trust Indicators -->
                    <div class="trust-indicators">
                        <div class="trust-item">
                            <i class="fas fa-users"></i>
                            <span>Trusted by <strong>1,000+</strong> clients</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Licensed & compliant</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-star"></i>
                            <span><strong>98%</strong> satisfaction</span>
                        </div>
                    </div>

                    <div class="hero-buttons">
                        <a href="#apply" class="btn btn-primary btn-lg">
                            <i class="fas fa-file-alt"></i> Apply For a Loan
                        </a>
                        <a href="#contact" class="btn btn-outline btn-lg">
                            <i class="fas fa-comments"></i> Speak to an Advisor
                        </a>
                    </div>
                </div>

                <div class="hero-image" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-card floating">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="card-content">
                            <h4>Fast Approvals</h4>
                            <p>24-48 hours</p>
                        </div>
                    </div>
                    <div class="hero-card floating floating-delay-1">
                        <div class="card-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="card-content">
                            <h4>Flexible Rates</h4>
                            <p>Clear & competitive</p>
                        </div>
                    </div>
                    <div class="hero-card floating floating-delay-2">
                        <div class="card-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="card-content">
                            <h4>100% Secure</h4>
                            <p>No hidden fees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Value Highlights -->
    <section class="value-highlights">
        <div class="container">
            <div class="highlights-grid">
                <div class="highlight-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="highlight-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Fast Approvals</h3>
                    <p>Funding as quickly as 24–48 hours.</p>
                </div>
                <div class="highlight-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="highlight-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3>Flexible Rates</h3>
                    <p>Clear, fair and competitive interest options.</p>
                </div>
                <div class="highlight-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="highlight-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Personalised Solutions</h3>
                    <p>Loans and investments tailored to your needs.</p>
                </div>
                <div class="highlight-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="highlight-icon">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <h3>Secure & Transparent</h3>
                    <p>No hidden fees. Full clarity from day one.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section class="services" id="loans">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">Our Services</span>
                <h2 class="section-title">Financial Solutions Tailored To You</h2>
                <p class="section-subtitle">Choose from our range of specialized financial products designed to help you achieve your goals</p>
            </div>

            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-image">
                        <div class="service-overlay">
                            <a href="#apply" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>Personal Loans</h3>
                        <p>Get the financial support you need for school fees, emergencies, or personal projects, with flexible repayment terms that work for you.</p>
                        <a href="#apply" class="btn btn-text">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-image">
                        <div class="service-overlay">
                            <a href="#apply" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Business Loans</h3>
                        <p>Fuel your business growth with SME-focused financing designed to help you scale, restock, or stabilize cash flow.</p>
                        <a href="#apply" class="btn btn-text">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-image">
                        <div class="service-overlay">
                            <a href="#apply" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3>Savings & Investment Plans</h3>
                        <p>Grow your wealth safely with structured savings and high-return investment products trusted by thousands.</p>
                        <a href="#apply" class="btn btn-text">Explore Plans <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-image">
                        <div class="service-overlay">
                            <a href="#apply" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Financial Advisory</h3>
                        <p>Get expert guidance on loans, investments, and wealth-building decisions tailored to your financial situation.</p>
                        <a href="#contact" class="btn btn-text">Book Consultation <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof / Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-subtitle">Join thousands of satisfied clients who trust VisionPlus Wealth</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"VisionPlus Wealth supported my business when I needed capital fast. Professional, transparent, and truly dependable."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Tariro M.</h4>
                            <p>Small Business Owner</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Their investment plans helped me grow my savings in months. The team is exceptional."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Blessing K.</h4>
                            <p>Investor</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Easy application, fast approval, and great customer service. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Tendai N.</h4>
                            <p>Personal Loan Customer</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="trust-badges" data-aos="fade-up">
                <div class="badge-item">
                    <i class="fas fa-users"></i>
                    <span>Trusted by 1000+ clients</span>
                </div>
                <div class="badge-item">
                    <i class="fas fa-award"></i>
                    <span>10+ years experience</span>
                </div>
                <div class="badge-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Fully compliant institution</span>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">Process</span>
                <h2 class="section-title">How It Works</h2>
                <p class="section-subtitle">Get funded in three simple steps</p>
            </div>

            <div class="steps-container">
                <div class="step" data-aos="fade-up" data-aos-delay="0">
                    <div class="step-number">01</div>
                    <div class="step-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Apply Online</h3>
                    <p>Fill out a simple, guided application in minutes.</p>
                </div>

                <div class="step-connector"></div>

                <div class="step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Get Approved</h3>
                    <p>Our team reviews your request and gives you fast, transparent feedback.</p>
                </div>

                <div class="step-connector"></div>

                <div class="step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <div class="step-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Receive Your Funds</h3>
                    <p>Once approved, funds are disbursed quickly and securely.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Calculator -->
    <section class="loan-calculator" id="calculator">
        <div class="container">
            <div class="calculator-wrapper">
                <div class="calculator-content" data-aos="fade-right">
                    <h2>Estimate Your Loan</h2>
                    <p>Adjust the sliders to see your potential monthly repayment, interest, and total cost.</p>

                    <div class="calculator-form">
                        <div class="form-group">
                            <label for="loanAmount">Loan Amount: <span id="loanAmountValue">$10,000</span></label>
                            <input type="range" id="loanAmount" min="1000" max="100000" value="10000" step="1000">
                            <div class="range-labels">
                                <span>$1,000</span>
                                <span>$100,000</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="loanTerm">Repayment Period: <span id="loanTermValue">12 months</span></label>
                            <input type="range" id="loanTerm" min="6" max="60" value="12" step="6">
                            <div class="range-labels">
                                <span>6 months</span>
                                <span>60 months</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="interestRate">Interest Rate: <span id="interestRateValue">10%</span></label>
                            <input type="range" id="interestRate" min="5" max="30" value="10" step="0.5">
                            <div class="range-labels">
                                <span>5%</span>
                                <span>30%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="calculator-results" data-aos="fade-left">
                    <div class="results-card">
                        <h3>Your Monthly Payment</h3>
                        <div class="result-amount" id="monthlyPayment">$879</div>
                        <div class="result-breakdown">
                            <div class="breakdown-item">
                                <span>Total Amount</span>
                                <strong id="totalAmount">$10,550</strong>
                            </div>
                            <div class="breakdown-item">
                                <span>Total Interest</span>
                                <strong id="totalInterest">$550</strong>
                            </div>
                        </div>
                        <a href="#apply" class="btn btn-primary btn-block">Apply For This Loan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content" data-aos="fade-right">
                    <span class="section-badge">About Us</span>
                    <h2>Who We Are</h2>
                    <p class="lead">VisionPlus Wealth is a trusted microfinance and investment solutions provider committed to helping individuals and businesses achieve financial clarity, stability, and growth.</p>

                    <div class="mission-box">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="mission-content">
                            <h4>Our Mission</h4>
                            <p>To empower communities with accessible, reliable, and smart financial products that improve lives and enable long-term success.</p>
                        </div>
                    </div>

                    <div class="values-list">
                        <h4>Our Values</h4>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Integrity & Transparency</li>
                            <li><i class="fas fa-check-circle"></i> Customer First</li>
                            <li><i class="fas fa-check-circle"></i> Innovation</li>
                            <li><i class="fas fa-check-circle"></i> Financial Empowerment</li>
                        </ul>
                    </div>
                </div>

                <div class="about-features" data-aos="fade-left">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4>Flexible Loan Options</h4>
                        <p>Choose from short-term or long-term loans designed for students, individuals, and businesses.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Fair & Transparent Rates</h4>
                        <p>No hidden charges, clear repayment schedules, and full upfront disclosure.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Tailored Solutions</h4>
                        <p>Every client receives a personalised assessment to match the best financial product.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h4>Secure Processes</h4>
                        <p>We follow industry-leading compliance standards to protect your information and transactions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources / Blog -->
    <section class="resources" id="resources">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">Resources</span>
                <h2 class="section-title">Financial Insights & Tips</h2>
                <p class="section-subtitle">Learn more about making smart financial decisions</p>
            </div>

            <div class="resources-grid">
                <article class="resource-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="resource-image">
                        <div class="resource-category">Guide</div>
                    </div>
                    <div class="resource-content">
                        <h3>How to Qualify for a Microfinance Loan</h3>
                        <p>Learn what lenders look for and how to increase your approval chances.</p>
                        <a href="#" class="btn btn-text">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="resource-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="resource-image">
                        <div class="resource-category">Investment</div>
                    </div>
                    <div class="resource-content">
                        <h3>Smart Investment Strategies for Beginners</h3>
                        <p>A simple guide to starting your investment journey confidently.</p>
                        <a href="#" class="btn btn-text">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="resource-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="resource-image">
                        <div class="resource-category">Business</div>
                    </div>
                    <div class="resource-content">
                        <h3>Why SMEs Need Microfinance to Scale</h3>
                        <p>Discover how tailored financing can help your business grow faster.</p>
                        <a href="#" class="btn btn-text">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">FAQ</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Find answers to common questions about our services</p>
            </div>

            <div class="faq-wrapper">
                <div class="faq-content" data-aos="fade-right">
                    <div class="faq-container">
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="faq-question">
                                <h4>Is VisionPlus Wealth a registered financial institution?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, VisionPlus Wealth is a licensed Micro Finance Institution (MFI) registered with the Reserve Bank of Zimbabwe since 2022. We operate under strict regulatory compliance to ensure your financial security.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="faq-question">
                                <h4>What types of loans do you offer?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>We specialize in Business Loans, Agricultural Loans, and Salary-based Loans tailored for micro, small, and medium-sized businesses. We particularly focus on supporting agricultural and mining sectors with flexible financing solutions.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-question">
                                <h4>How quickly can I get loan approval?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Most loan applications are reviewed within 24–48 hours. Our experienced team of 10+ years in finance ensures fast processing while maintaining thorough assessment standards to best serve your needs.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="faq-question">
                                <h4>Do you require substantial collateral?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>No. We emphasize financially inclusive products designed for businesses without substantial collateral. Our focus is on customer centricity and partnership, making financial services accessible to underserved businesses.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="faq-question">
                                <h4>Are your repayment terms flexible?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Absolutely. We offer flexible repayment options tailored to your business cash flow. Use our in-house loan calculator to explore different scenarios and find a repayment plan that works for you.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="faq-question">
                                <h4>Do you provide business advisory services?</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes. In addition to loans, we provide Loan Administration Services and Advisory & Client Capacity Building Services. Our team has expertise across finance, banking, accounting, agribusiness, risk management, and strategic marketing to support your growth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-image" data-aos="fade-left">
                    <div class="faq-image-wrapper">
                        <img src="{{ asset('assets/img/faq-support.jpg') }}" alt="VisionPlus Wealth Customer Support">
                        <div class="faq-image-card floating">
                            <div class="card-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="card-content">
                                <h4>Need Help?</h4>
                                <p><a href="tel:+263242778532">(+263) 242 778532</a></p>
                            </div>
                        </div>
                        <div class="faq-image-stats floating floating-delay-1">
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <strong>1000+</strong>
                                    <span>Satisfied Clients</span>
                                </div>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-award"></i>
                                <div>
                                    <strong>10+</strong>
                                    <span>Years Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Banner -->
    <section class="cta-banner">
        <div class="cta-background">
            <div class="cta-shape shape-1"></div>
            <div class="cta-shape shape-2"></div>
        </div>
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <h2>Ready to take control of your financial future?</h2>
                <p>Work with a trusted team committed to your goals.</p>
                <div class="cta-buttons">
                    <a href="#apply" class="btn btn-light btn-lg">
                        <i class="fas fa-file-alt"></i> Apply Now
                    </a>
                    <a href="#contact" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-comments"></i> Talk to an Advisor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <div class="footer-logo">
                        <span class="logo-text">VisionPlus <span class="highlight">Wealth</span></span>
                    </div>
                    <p>Empowering communities with accessible, reliable, and smart financial products that improve lives and enable long-term success.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#loans">Our Services</a></li>
                        <li><a href="#calculator">Loan Calculator</a></li>
                        <li><a href="#resources">Resources</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#loans">Personal Loans</a></li>
                        <li><a href="#loans">Business Loans</a></li>
                        <li><a href="#loans">Investments</a></li>
                        <li><a href="#contact">Financial Advisory</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-phone"></i> <a href="tel:+263123456789">+263 123 456 789</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@visionpluswealth.com">info@visionpluswealth.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> <span>Harare, Zimbabwe</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 VisionPlus Wealth. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Compliance</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>
</body>
</html>
