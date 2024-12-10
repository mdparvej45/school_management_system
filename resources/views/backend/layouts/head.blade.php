<head>

    <meta charset="utf-8" />
    <title>Dashboard | e School Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="{{ config('app.name') }}" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    {{-- <link href="{{ asset('backend/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" /> --}}

    <!--Swiper slider css-->
    {{-- <link href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" /> --}}

    <!-- Layout config Js -->
    {{-- <script src="{{ asset('backend/assets/js/layout.js') }}"></script> --}}


    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    

    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    {{-- <link href="{{ asset('backend/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" /> --}}

      <!-- jQuery CDN-->
    {{-- <script src="{{ asset('backend/assets/js/jquery-3.6.4.min.js') }}" integrity="sha384-oSxMtFJLi8TV2E2dTlECn1c3NXf7E5fW3LgGksD6vlg85GpEk6TVr5RRtknjlLqg" crossorigin="anonymous"></script> --}}


    {{-- HTMX USE --}}
    <script src="{{ asset('backend/assets/js/htmx.min.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- For Custom CSS --}}
    @stack('customCss')
</head>