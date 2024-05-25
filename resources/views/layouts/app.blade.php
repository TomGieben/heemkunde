<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

<body class="bg-white">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid py-2">
            <a class="navbar-brand" href="/">
                {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo van {{ config('app.name', 'Laravel') }}"
                    class="d-inline-block align-text-top" style="height: 30px;"> --}}
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link px-2 text-muted">Welkom</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="min-height: 80vh;" class="py-2">
        @yield('content')
    </main>
    <footer class="py-3 pt-4 bg-dark text-white">
        <ul class="nav justify-content-center pb-3 mb-3">
            {{-- <li class="nav-item"><a href="{{ route('sponsors.index') }}" class="nav-link px-2 text-white">Sponsoren</a>
            </li>
            <li class="nav-item"><a href="{{ route('associations.index') }}"
                    class="nav-link px-2 text-white">Verenigingen</a></li>
            <li class="nav-item"><a href="{{ route('events.index') }}" class="nav-link px-2 text-white">Programma</a>
            </li>
            <li class="nav-item"><a href="{{ route('gallery-items.index') }}"
                    class="nav-link px-2 text-white">Galerij</a></li>
            <li class="nav-item"><a href="{{ route('welcome') }}#faqs" class="nav-link px-2 text-white">FAQs</a></li> --}}
        </ul>
        <p class="text-center text-white">
            © {{ @date('Y') }} {{ config('app.name', 'Laravel') }}
            <small class="d-block">Website door Tom Gieben</small>
        </p>
    </footer>
</body>

</html>
