<div class="d-flex flex-column flex-shrink-0 p-3 bg-primary h-100" style="width: 280px;">
    <a href="{{ route('admin.home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
        <span class="fs-4">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <hr class="text-white" />
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link text-white @if (request()->routeIs('admin.home')) active @endif">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('admin.news-articles.index') }}" class="nav-link text-white @if (request()->routeIs('admin.news-articles.*')) active @endif">
                <i class="fas fa-newspaper"></i>
                Nieuws artikelen
            </a>
        </li>
        <li>
            <a href="{{ route('admin.comments.index') }}" class="nav-link text-white @if (request()->routeIs('admin.comments.*')) active @endif">
                <i class="fas fa-comments"></i>
                Reacties
            </a>
        </li>
        <li>
            <a href="{{ route('admin.contact-messages.index') }}" class="nav-link text-white @if (request()->routeIs('admin.contact-messages.*')) active @endif">
                <i class="fas fa-envelope"></i>
                Contactverzoeken
            </a>
        </li>
        <li>
            <a href="{{ route('admin.texts.index') }}" class="nav-link text-white @if (request()->routeIs('admin.texts.*')) active @endif">
                <i class="fas fa-text-size"></i>
                Teksten
            </a>
        </li>
    </ul>
    <hr class="text-white" />
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('admin.users.index') }}" class="nav-link text-white @if (request()->routeIs('admin.users.*')) active @endif">
                <i class="fas fa-users"></i>
                Gebruikers
            </a>
        </li>
        <li>
            <a href="{{ route('admin.settings.index') }}" class="nav-link text-white @if (request()->routeIs('admin.settings.*')) active @endif">
                <i class="fas fa-cogs"></i>
                Instellingen
            </a>
        </li>
    </ul>
    <hr class="text-white" />
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle"
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
