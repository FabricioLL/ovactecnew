<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <!-- Extra details for Live View on GitHub Pages -->

    <title>
        {{ __('OVATEC') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a955160b49.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('/demo/demo.css') }}" rel="stylesheet" />

</head>

<body class="{{ $class }}">

    @auth()
        @include('layouts.page_templates.auth')
        @include('layouts.navbars.fixed-plugin')
    @endauth

    @guest
        @include('layouts.page_templates.guest')
    @endguest

    <!--   Core JS Files   -->
    <script src="{{ asset('/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('/demo/demo.js') }}"></script>
    <!-- Sharrre libray -->
    <script src="/demo/jquery.sharrre.js"></script>

    @stack('scripts')

    @include('layouts.navbars.fixed-plugin-js')
</body>

</html>
