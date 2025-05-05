<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
    <!-- Favicon -->
    <!-- 		<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
 -->
    <!-- <link rel="icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="image/png" sizes="16x16"> -->


    <!-- <img src="{{ asset('assets/images/favicon.png') }}" class="header-brand-img desktop-logo" alt="logo"> -->


    <!-- Title -->
    <title>Auction</title>





    <!---Fontawesome css-->
    <link href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!---Ionicons css-->
    <link href="{{ asset('admin-assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!---Typicons css-->
    <link href="{{ asset('admin-assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">

    <!---Feather css-->
    <link href="{{ asset('admin-assets/plugins/feather/feather.css') }}" rel="stylesheet">

    <!---Falg-icons css-->
    <link href="{{ asset('admin-assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!---Style css-->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/custom-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/custom-dark-style.css') }}" rel="stylesheet">


    <!---Sidebar css-->
    <link href="{{ asset('admin-assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!---Sidemenu css-->
    <link href="{{ asset('admin-assets/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet">


</head>



<style type="text/css">
    /*.dataTables_length label{
    margin-top: 313px;

   }*/






    @media (min-width: 992px) {
        .main-footer {
            margin-left: 0px;
        }



    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: 5px;
        margin-left: 5px;
        margin-bottom: 20px;
    }

    .breadcrumb {
        background-color: #C3B1E1;
    }



    .card-title {
        margin-top: 10px !important;
    }

    .main-sidebar-body .nav-item.active .nav-link {
        color: #fff !important;
    }

    .paginate_button {
        /*	    border-radius: 13px;
*/
        margin-left: 5px;
        margin-right: 5px;
        /*	        background-color: #fecc00;
*/

    }

    .btn-primary {
        background-color: #C3B1E1 !important;
    }




    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:focus {
        border: 0;
        background-image: none;
        background-color: #C3B1E1 !important;
        color: white !important;
        padding: 10px;

    }

    .ripple {
        background-color: #C3B1E1 !important;

    }





    .btn {
        border-radius: 8px;

    }

    .d-sm-flex {
        display: flex !important;
        flex-direction: column;
    }

    .dataTables_filter {
        border-radius: 29px;

    }

    .side-menu .nav-link:hover {
        color: #C3B1E1 !important;
    }

    /*
a {
    color:#!important;
 }
*/
    .dropdown-item.active,
    .dropdown-item:active {
        text-decoration: none;
        background-color: #C3B1E1;
    }

    .dropdown-menu {

        background-color: #C3B1E1;

        border-radius: 14px;

    }


    .dataTables_paginate {
        margin-left: 800px;
        margin-bottom: 15px;
        margin-top: -21px;
        margin-right: 0px !important;
        position: relative;
        text-align: center;
    }

    }

    .dropdown-item {
        padding: 0px 22px;
        font-size: 22px;
    }


    @media (max-width: 768px) {

        .header-brand-img {
            height: 50px !important;
        }

    }

    .data-table {
        border-radius: 15px !important;

    }

    .form-control {
        height: 38px;
        border-radius: 13px !important;
    }
</style>

<body>
    @include('admin layouts.sidemenu')
    <div class="page-wrapper">
        @include('admin layouts.header')

        @yield('content')

        @include('admin layouts.footer')

</body>


<!---Ionicons css-->
<link href="{{ asset('admin-assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

<!---Typicons css-->
<link href="{{ asset('admin-assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">

<!---Feather css-->
<link href="{{ asset('admin-assets/plugins/feather/feather.css') }}" rel="stylesheet">

<!---Falg-icons css-->
<link href="{{ asset('admin-assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">


<!-- Chart.Bundle js-->
<script src="{{ asset('admin-assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>




<script src="{{ asset('admin-assets/js/notify.min.js') }}" type="text/javascript"></script>




<!-- Bootstrap js-->
<script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Ionicons js-->
<script src="{{ asset('admin-assets/plugins/ionicons/ionicons.js') }}"></script>

<!-- Rating js-->
<script src="{{ asset('admin-assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- Jquery-Ui js-->
<script src="{{ asset('admin-assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!-- Select2 js-->
<script src="{{ asset('admin-assets/plugins/select2/js/select2.min.js') }}"></script>
<!-- Daternagepicker js-->
<script src="{{ asset('admin-assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!--Fileuploads js-->
<script src="{{ asset('admin-assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<!--Fancy uploader js-->
<script src="{{ asset('admin-assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
<!-- Form-elements js-->
<script src="{{ asset('admin-assets/js/advanced-form-elements.js') }}"></script>
<script src="{{ asset('admin-assets/js/select2.js') }}"></script>
<!--Sumoselect js-->
<!-- <script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
 --><!--TelephoneInput js-->
<!-- script src="{{ asset('assets/plugins/telephoneinput/telephoneinput.js') }}"></script>
<script src="{{ asset('assets/plugins/telephoneinput/inttelephoneinput.js') }}"></script> -->

<!-- Perfect-scrollbar js-->
<script src="{{ asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Sidemenu js-->
<script src="{{ asset('admin-assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- Sidebar js-->
<script src="{{ asset('admin-assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Sticky js-->
<script src="{{ asset('admin-assets/js/sticky.js') }}"></script>

<!-- Custom js-->
<script src="{{ asset('admin-assets/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<!-- Datatable Export Buttons -->
<script src="{{ asset('admin-assets/js/scripts/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/datatables/buttons.print.min.js') }}"></script>






</html>
