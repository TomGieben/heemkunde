<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 280px;">
    <a href="{{ route('admin.home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link @if (request()->routeIs('admin.home')) active text-white @else text-dark @endif">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('admin.news-articles.index') }}" class="nav-link @if (request()->routeIs('admin.news-articles.index')) active text-white @else text-dark @endif">
                <i class="fas fa-newspaper"></i>
                Nieuws artikelen
            </a>
        </li>
        <li>
            <a href="{{ route('admin.comments.index') }}" class="nav-link @if (request()->routeIs('admin.comments.index')) active text-white @else text-dark @endif">
                <i class="fas fa-comments"></i>
                Reacties
            </a>
        </li>
        <li>
            <a href="{{ route('admin.texts.index') }}" class="nav-link @if (request()->routeIs('admin.texts.index')) active text-white @else text-dark @endif">
                <i class="fas fa-text-size"></i>
                Teksten
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Uitloggen</button>
                </form>
            </li>
        </ul>
    </div>
</div>
