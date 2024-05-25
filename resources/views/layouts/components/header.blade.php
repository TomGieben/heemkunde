<div class="row justify-content-between mb-3 p-2 bg-primary rounded-pill align-items-center">
    <div class="col-auto">
        <h3 class="mt-2 ms-1 text-white">@yield('title')</h3>
    </div>
    <div class="col-auto">
        <a class="btn btn-outline-light rounded-pill" href="{{ url()->previous() }}" title="Back">
            <i class="fas fa-times text-white"></i>
        </a>
    </div>
</div>
