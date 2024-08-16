<nav class="navbar navbar-light">
    <div class="container py-2">
        <a class="navbar-brand text-dark" href="/">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo van {{ config('app.name', 'Laravel') }}"
                class="d-inline-block align-text-top" style="height: 30px;"> --}}
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('welcome') }}">
                        <span class="text-dark">Welkom</span>
                    </a>
                    <a class="nav-link px-2 text-muted" href="{{ route('news') }}">
                        <span class="text-dark">Nieuws</span>
                    </a>
                    <a class="nav-link px-2 text-muted" href="{{ route('collection') }}">
                        <span class="text-dark">Collectie</span>
                    </a>
                    <a class="nav-link px-2 text-muted" href="{{ route('about') }}">
                        <span class="text-dark">Over ons</span>
                    </a>
                    <a class="nav-link px-2 text-muted" href="{{ route('contact') }}">
                        <span class="text-dark">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@if(Route::currentRouteName() !== 'welcome')
    <div class="container py-2">
        <x-bread-crumbs />
    </div>
@endif