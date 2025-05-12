<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Homex template">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">

    <!-- Title -->
    <title>Vebsigns - Vebsigns</title>


    <!-- all lib files includes  -->
    <!-- Fontawesome Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/fontawesome/css/solid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/fontawesome/css/regular.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/fontawesome/css/brands.min.css') }}">

    <!-- Fontawesome Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}">
    <!-- PrettyPhotos Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/pretty-photo/css/prettyPhoto.css') }}">
    <!-- Slick Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick.css') }}">
    <!-- Fonts Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/realestate-font-family.css') }}">
    <!-- Select2 Files  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/select2.min.css') }}">

    <!-- Realestate main file  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/realestate-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/realestate-element.css') }}">
    <!-- loop property style 1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loop/property/style-1.css') }}">
    <!-- Blog loop  style 1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loop/blogs/loop-style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/realestate-styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/realestate-footer.css') }}">



    <style>
        header {
            background-color: #FFFFFF;
            /* or try #F8F9FA or #E6FAF8 */
            color: #1A1A1A;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            /* Remove animation delay */
        }

        .demo {
            font-family: 'Noto Sans', sans-serif;
        }

        .panel {
            background: linear-gradient(to right, #2980b9, #2c3e50);
            padding: 0;
            border-radius: 10px;
            border: none;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.05), 0 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .realestate-hide {
            display: block;
        }

        .realestate-hide1 {
            display: none;
        }

        .panel .panel-heading {
            padding: 20px 15px;
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .back-to-top.visible {
            opacity: 1;
        }

        .panel .panel-heading .title {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 40px;
            margin: 0;
        }

        .panel .panel-heading .btn {
            color: rgba(255, 255, 255, 0.5);
            background: transparent;
            font-size: 16px;
            text-transform: capitalize;
            border: 2px solid #fff;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .btn:hover {
            color: #fff;
            text-shadow: 3px 3px rgba(255, 255, 255, 0.2);
        }

        .panel .panel-heading .form-control {
            color: #fff;
            background-color: transparent;
            width: 35%;
            height: 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            display: inline-block;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            outline: none;
        }

        .panel .panel-heading .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-size: 15px;
            font-weight: 500;
        }

        .panel .panel-body {
            padding: 0;
        }

        .panel .panel-body .table thead tr th {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 12px;
            border: none;
        }

        .panel .panel-body .table tbody tr td {
            color: #fff;
            font-size: 15px;
            padding: 10px 12px;
            vertical-align: middle;
            border: none;
        }

        .panel .panel-body .table tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .panel .panel-body .table tbody .action-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .panel .panel-body .table tbody .action-list li {
            display: inline-block;
            margin: 0 5px;
        }

        .panel .panel-body .table tbody .action-list li a {
            color: #fff;
            font-size: 15px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:hover {
            text-shadow: 3px 3px 0 rgba(255, 255, 255, 0.3);
        }

        .panel .panel-body .table tbody .action-list li a:before,
        .panel .panel-body .table tbody .action-list li a:after {
            content: attr(data-tip);
            color: #fff;
            background-color: #111;
            font-size: 12px;
            padding: 5px 7px;
            border-radius: 4px;
            text-transform: capitalize;
            display: none;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -32px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:after {
            content: '';
            height: 15px;
            width: 15px;
            padding: 0;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -18px;
            z-index: -1;
        }

        .panel .panel-body .table tbody .action-list li a:hover:before,
        .panel .panel-body .table tbody .action-list li a:hover:after {
            display: block;
        }

        .panel .panel-footer {
            color: #fff;
            background-color: transparent;
            padding: 15px;
            border: none;
        }

        .panel .panel-footer .col {
            line-height: 35px;
        }

        @media only screen and (max-width:767px) {
            .panel .panel-heading .title {
                text-align: center;
                margin: 0 0 10px;
            }

            .panel .panel-heading .btn_group {
                text-align: center;
            }
        }
    </style>




    <style type="text/css">
        footer {
            margin: 30px 0px 0px 0px;
            background-color: #0B2239;
            color: #F5F5F5;
            border-top: 4px solid #1DBAAF;

        }

        footer .container {}

        .footer-widget h4 {
            color: white !important;
        }

        footer a {
            color: #1DBAAF;
            /* your "88" color */
            text-decoration: none;
        }

        footer a:hover {
            color: #FFFFFF;
            /* Optional: white on hover */
        }

        footer li a {
            color: white !important;
        }

        footer li {
            color: white !important;
        }

        footer .copyright li a {
            color: white !important;
        }



        footer span {
            color: white !important;
        }

        footer p {
            color: white !important;
        }

        .bg-gray {
            background-color: #eaceea !important;
        }

        iframe.VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none !important;
        }

        /* Hide the top translation bar that sometimes appears */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        /* Hide the Google Translate branding */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            font-size: 0px !important;
        }

        /* Hide the Google Translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0px !important;
        }


        .col-lg-6 {
            flex: 0 0 auto;
            width: 30%;
        }

        .col-lg-2 {
            flex: 0 0 auto;
            width: 12.666667%;
        }




        #google_translate_element {
            display: none;
        }


        #google_translate_element span {
            display: none !important;
        }

        #google_translate_element img {
            display: none !important;
        }

        /* Style the select element */

        /* When the select element is focused (clicked) */


        .bg-primary,
        a.bg-primary,
        a.bg-primary:hover,
        a.bg-primary:focus,
        .hover-bg-primary:hover {
            background-color: purple !important;
        }

        /* a, a:hover, .btn-link, .btn-link:hover {
        text-decoration: none;
        cursor: pointer;
        color: #C3B1E1!important;
    }*/


        .li {
            color: #fff !important;
        }


        .icon-primary,
        .icon-primary i,
        .icon-primary svg,
        .hover-primary-nav .navbar-nav .nav-link.active,
        .hover-primary-nav .navbar-nav .nav-link:hover,
        .top-header .dropdown-toggle::after,
        .footer-widget li a:hover,
        .check-submit li input[type="checkbox"]:checked+label::before,
        .property-btn li a.active,
        .property-btn li a:hover,
        .hover-primary-nav .navbar-nav .nav-link:hover,
        .breadcrumb-item>a:hover,
        .copyright .line-menu a:hover,
        .dashboard-top-left .dropdown-toggle::before,
        .dashboard-panel .message-list .message-action a:hover,
        .breadcrumb-item.active,
        .navigation_link_widget li a:hover,
        .flat-primary [class^="flaticon-"]::before,
        .list-text-white a.dropdown-item:hover {
            color: purple !important;
        }

        [class*="double-down-line"]::before,
        [class*="double-down-line"]::after {
            background-color: purple !important;
        }


        :root {
            --theme-primary-color: #6f42c1 !important;
            --primary-color: #6f42c1;
            --secondary-color: #f8f9fa;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }

        .bg-secondary {
            background-color: purple !important;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 75px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        #preloader {
            position: fixed;
            background-color: #f9f9f9;
            /* light background */
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            border: 6px solid #eee;
            border-top: 6px solid #6f42c1;
            /* brand purple */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 0.9s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 768px) {

            .page-banner {

                margin-top: 9% !important;

            }

            .viewdetails {
                margin-bottom: 5px;
            }

            #google_translate_element select {
                background-color: purple;
                border: 1px solid purple;
                color: white !important;
                padding: 5px;
                float: inline-start;
                width: 40%;


            }
        }

        @media (max-width: 900px) {

            .page-banner {

                margin-top: 9%;

            }

            .viewdetails {
                margin-bottom: 5px;
            }

            #google_translate_element select {
                background-color: purple;
                border: 1px solid purple;
                color: white !important;
                padding: 5px;
                float: inline-start;
                width: 40%;


            }
        }

        @media screen and (min-width: 599px) and (max-width: 605px) {
            .page-banner {
                margin-top: 12%;
                /* Specific value for Nest Hub */
            }

            #google_translate_element select {
                background-color: purple;
                border: 1px solid purple;
                color: white !important;
                padding: 5px;
                float: inline-start;
                width: 40%;


            }
        }

        @media screen and (min-width: 1200px) and (max-width: 1300px) {
            .page-banner {
                margin-top: 12%;
                /* Specific value for Nest Hub */
            }

            #google_translate_element select {
                background-color: purple;
                border: 1px solid purple;
                color: white !important;
                padding: 5px;
                float: inline-start;
                width: 40%;


            }
        }

        @media (max-width: 1050px) {

            .page-banner {

                margin-top: 7% !important;

            }

            .viewdetails {
                margin-bottom: 5px;
            }

            #google_translate_element select {
                background-color: purple;
                border: 1px solid purple;
                color: white !important;
                padding: 5px;
                float: inline-start;
                width: 40%;

            }
        }
    </style>
</head>


<body id="realestate-content">

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    @include('layouts.header')

    <a href="https://api.whatsapp.com/send?phone=0000000000&text=Hello" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>


    @yield('content')

    @include('layouts.footer')

    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Javascript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--jQuery Layer Slider -->
    <script src="{{ asset('assets/js/greensock.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <!--jQuery Layer Slider -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/tmpl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('assets/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slider.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">

    <!-- jQuery UI JS -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <script>
        $(".editor").on('keyup  mouseover', function(e) {
            var myEditor = document.querySelector('.editor')
            var html = myEditor.children[0].innerHTML;
            $('.new-editor').val(html);
        });

        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>



    <!-- Google Translate script -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        function translatePage() {
            var selectedLang = document.getElementById("languageSwitcher").value;
            var translateFrame = document.querySelector('.goog-te-combo');

            if (selectedLang !== "") {
                translateFrame.value = selectedLang;
                translateFrame.dispatchEvent(new Event('change'));
            }
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            preloader.style.transition = 'opacity 0.5s ease';
            setTimeout(() => preloader.style.display = 'none', 500);
        }
        });
    </script>
    <!-- Back to Top Button -->
  

    <script>
        // Back to top button functionality
        window.addEventListener('scroll', function() {
            var backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>

</body>

</html>
