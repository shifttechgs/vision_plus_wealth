<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Plus Wealth</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- Brand Fonts (TEMPORARY — remove with brand.css) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;1,700&display=swap" rel="stylesheet">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Hero Enhancements CSS (offer banner) -->
    <link rel="stylesheet" href="assets/css/hero-enhancements.css">
    <!-- Page-specific styles -->
    @stack('styles')
    <!-- Brand Override (TEMPORARY — remove this line to revert) -->
    <link rel="stylesheet" href="assets/css/brand.css">
    <!--toaster-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">


    <!--=====  JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FinancialService",
        "name": "VisionPlus Wealth",
        "description": "Registered Microfinance Institution committed to empowering businesses and individuals with accessible loans and investment opportunities.",
        "url": "https://www.visionpluswealth.com",
        "logo": "https://www.visionpluswealth.com/assets/img/logo/vpw_trans.png",
        "foundingDate": "2022",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "9th Floor Michael House, 62 Nelson Mandela Avenue",
            "addressLocality": "Harare",
            "addressCountry": "ZW"
        },
        "telephone": "+263-242-778532",
        "email": "info@visionpluswealth.com",
        "sameAs": [
            "https://www.facebook.com/visionpluswealth/",
            "https://www.linkedin.com/company/vision-plus-wealth/"
        ],
        "areaServed": {
            "@@type": "Country",
            "name": "Zimbabwe"
        },
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Financial Services",
            "itemListElement": [
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Business Loans" } },
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Agricultural Loans" } },
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Salary Based Loans" } },
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Financial Advisory" } }
            ]
        }
    }
    </script>

    @stack('schema')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')



<!--===== JS SCRIPT LINK =======-->
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/fontawesome.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/plugins/counter.js"></script>
<script src="assets/js/plugins/gsap.min.js"></script>
<script src="assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="assets/js/plugins/Splitetext.js"></script>
<script src="assets/js/plugins/SmoothScroll.js"></script>
<script src="assets/js/plugins/sidebar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/mobilemenu.js"></script>
<script src="assets/js/plugins/owlcarousel.min.js"></script>
<script src="assets/js/plugins/nice-select.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/slick-slider.js"></script>
<script src="assets/js/plugins/circle-progress.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<script src="assets/js/main.js"></script>
<!-- Hero Enhancements JavaScript (offer banner) -->
<script src="assets/js/hero-enhancements.js"></script>
<!-- Brand Override: swap logo on sticky (TEMPORARY — remove with brand.css) -->
<script>
(function(){
    var logo = document.getElementById('header-logo');
    if (!logo) return;
    var lightSrc = logo.getAttribute('data-light');
    var darkSrc = logo.getAttribute('data-dark');
    if (!lightSrc || !darkSrc) return;
    var header = document.getElementById('vl-header-sticky');
    if (!header) return;
    var observer = new MutationObserver(function(){
        if (header.classList.contains('header-sticky')) {
            logo.src = darkSrc;
        } else {
            logo.src = lightSrc;
        }
    });
    observer.observe(header, { attributes: true, attributeFilter: ['class'] });
})();
</script>
@stack('scripts')
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<!-- Toastr Session Flash -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof toastr !== 'undefined') {
            @if (session('success'))
            toastr.success("{{ session('success') }}");
            @elseif (session('error'))
            toastr.error("{{ session('error') }}");
            @elseif (session('warning'))
            toastr.warning("{{ session('warning') }}");
            @elseif (session('info'))
            toastr.info("{{ session('info') }}");
            @endif
        }
    });
</script>
</body>
</html>
