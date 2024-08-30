<nav class="navbar navbar-light">
    <div class="container py-2">
        <a class="navbar-brand text-dark" href="/">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler d-flex align-items-center justify-content-center d-sm-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark me-1"></span>
            Menu
        </button>
        <div class="collapse navbar-collapse d-sm-none" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('welcome') }}">
                        <span class="text-dark">Welkom</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('news') }}">
                        <span class="text-dark">Nieuws</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('collection') }}">
                        <span class="text-dark">Collectie</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('about') }}">
                        <span class="text-dark">Over ons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('contact') }}">
                        <span class="text-dark">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-none d-sm-block">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('welcome') }}">
                        <span class="text-dark">Welkom</span>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('news') }}">
                        <span class="text-dark">Nieuws</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('collection') }}">
                        <span class="text-dark">Collectie</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="{{ route('about') }}">
                        <span class="text-dark">Over ons</span>
                    </a>
                </li>
                <li class="nav-item">
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