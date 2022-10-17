<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Restaurant Admin</title>
    <link rel="apple-touch-icon" href="{{asset('/backend/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/backend/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('backend/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('backend/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('backend/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('backend/css/plugins/extensions/toastr.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/css/core/colors/palette-gradient.css')}}">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/backend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/admin-styles.css')}}">
    <!-- END: Custom CSS-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
      data-col="2-columns">
    <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">
<!-- BEGIN: Header-->


@include('master.admin.header')

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('master.admin.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    @yield('body')
</div>


<!-- END: Content-->

{{--<div class="sidenav-overlay"></div>--}}
{{--<div class="drag-target"></div>--}}
<!-- BEGIN: Footer-->
@include('master.admin.footer')
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('/backend/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('backend/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/extensions/jquery.knob.min.js')}}"></script>
<script src="{{asset('/backend/js/scripts/extensions/knob.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{ asset ('backend/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{ asset ('backend/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset ('backend/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/backend/data/jvector/visitor-data.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/chart.min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/backend/vendors/js/extensions/unslider-min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/backend/css/core/colors/palette-climacon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/backend/fonts/simple-line-icons/style.min.css')}}">
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/backend/js/core/app-menu.js')}}"></script>
<script src="{{asset('/backend/js/core/app.js')}}"></script>
<script src="{{asset('backend/assets/js/datatable.js')}}"></script>
<script src="{{asset('backend/assets/js/common.js')}}"></script>
<!-- END: Theme JS-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote(
            {
                height: 300,
            }
        );
        $(".select2").select2();
    });
</script>
    @yield('script')
</body>
<!-- END: Body-->

</html>
