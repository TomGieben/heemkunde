<nav class="navbar navbar-dark bg-primary">
    <div class="container py-2">
        <a class="navbar-brand text-white" href="/">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo van {{ config('app.name', 'Laravel') }}"
                class="d-inline-block align-text-top" style="height: 30px;"> --}}
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link px-2 text-muted">
                        <span class="text-white">Welkom</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>