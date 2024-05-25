<div class="row justify-content-between mb-3 p-2 bg-primary rounded-pill align-items-center">
    <div class="col-auto">
        <h3 class="mt-2 ms-1 text-white">@yield('title')</h3>
    </div>
    <div class="col-auto">
        @yield('header-buttons')
        <a class="btn btn-outline-light rounded-pill" href="@yield('back')" title="Terug">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</div>
