<!doctype html>
<!-- Gbeya - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DSAThemes">
    <meta name="description" content="Gbeya - Digital Financial Platform that drives results">
    <meta name="keywords" content="Finances, Accounting, Tax, Financial, Accounting Software, Tax Software, Financial Software, Accounting System, Tax System, Financial System, Accounting Platform, Tax Platform, Financial Platform, Accounting System, Tax System, Financial System, Accounting Platform, Tax Platform, Financial Platform">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>Gbeya - Digital Financial Platform that drives results</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{asset('images/fav.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

    <link rel="apple-touch-icon" href="{{asset('images/fav.png')}}">
    <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link id="effect" href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lunar.css')}}" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <!-- <link href="{{asset('css/blue-theme.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/crocus-theme.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/green-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/magenta-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/pink-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/purple-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/skyblue-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/red-theme.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/violet-theme.css')}}" rel="stylesheet"> -->

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    @stack('styles')

</head>




<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loading" class="loading--theme">
        <div id="loading-center"><span class="loader"></span></div>
    </div>




    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page font--jakarta">




        <!-- HEADER
			============================================= -->
        @include('layout.header')
        @yield('content')
        @include('layout.footer')




    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/pricing-toggle.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/quick-form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/lunar.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    <!-- Custom Script -->
    <script src="{{asset('js/custom.js')}}"></script>


    @stack('scripts')

</body>




</html>