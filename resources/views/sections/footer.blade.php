<footer class="py-3 pt-4 bg-primary text-white">
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