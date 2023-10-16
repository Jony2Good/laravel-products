<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page title -->
    <title>@yield('page.title', 'Admin panel')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <style>
        .custom-file-input:lang(en) ~ .custom-file-label::after {
            display: none;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff;
            border-color: #006fe6;
        }

        .info-layout {
            max-width: 100px;
        }

        .img-rec {
            min-width: 65px;
            min-height: 23px;
        }

        .admin-rec {
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 100px;
            min-height: 59px;
            border-radius: 8px 8px 50px;
        }

        .user-panel, .user-panel .info {
            white-space: normal;
        }

        .card {
            background-color: rgba(55, 64, 80, 1);
        }

        .btn-layout {
            min-width: 139px;
            min-height: 30px;
            background-color: #0FC5FF;
        }

        .btn-add {
            display: inline-block;
            padding: unset;
            font-size: 16px;
            border: none;
            background-color: inherit;
            color: #0FC5FF;
            border-bottom: 1px dashed #0FC5FF;

        }

        .btn-add:hover {
            color: #ffffff;
            border-bottom: 1px dashed #ffffff;
        }
        .select-layout {
            padding: 10px;
        }

        .link-layout {
            width: 26px;
            height: 26px;
        }

        .event {
            cursor: pointer;
        }

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="d-flex justify-content-end">
                    <p class="text-secondary mb-0">Иванов Иван Иванович</p>
                </div>
            </li>
        </ul>
    </nav>
    @include('admin.includes.sidebar')
    @yield('content')
    <footer class="main-footer">
        <strong>PIN.2023</strong>
        All rights reserved.
    </footer>
</div>

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.j')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);

</script>
</body>
</html>
