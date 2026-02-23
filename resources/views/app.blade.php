<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Qiraya')</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/1a39ee6206.js" crossorigin="anonymous"></script>
</head>

<body class="light bg-white">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu/menu.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/faq.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>