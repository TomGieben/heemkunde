<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/5e3d25cf7b.js" crossorigin="anonymous"></script>

    <!-- TinyMCE -->
    {{-- <script src="https://cdn.tiny.cloud/1/2ciqnzhhumvsf49gri8how5pb5jckrbjakiyp31ksblg7iun/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}

    <!-- Swal -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('sections.nav')
    <main style="min-height: 80vh;">
        @yield('content')
    </main>
    @include('sections.footer')
    @stack('scripts')
</body>

</html>
