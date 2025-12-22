<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Plus Wealth</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="" type="image/x-icon">

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
    <!-- Hero Enhancements CSS -->
    <link rel="stylesheet" href="assets/css/hero-enhancements.css">
    <!-- How It Works Section CSS -->
    <link rel="stylesheet" href="assets/css/how-it-works.css">
    <!-- About Page Premium Styles -->
    <link rel="stylesheet" href="assets/css/about-premium.css">
    <!--toaster-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">


    <!--=====  JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
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
<!-- Hero Enhancements JavaScript -->
<script src="assets/js/hero-enhancements.js"></script>
<!-- How It Works Section JavaScript -->
<script src="assets/js/how-it-works.js"></script>
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
