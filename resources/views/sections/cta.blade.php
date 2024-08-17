<section>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-2">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-dark">
                    @content('cta-title')
                </h1>
                <p class="lead  text-dark">
                    @content('cta-paragraph')
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn btn-outline-secondary btn-lg" href="{{ route('contact') }}">
                        Neem contact op
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-6">
                <img src="{{ asset('images/logo.png') }}" class="d-block mx-lg-auto img-fluid rounded w-100" alt="Hero afbeelding" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</section>