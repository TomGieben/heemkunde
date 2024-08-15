<div>
    <a href="{{ route('article', $newsArticle->slug) }}" class="d-block p-2 bg-white rounded mb-2 text-decoration-none">
        <div class="row">
            <div class="col-4">
                <img class="rounded w-100 m-1 img-article" loading="lazy"
                    src="{{ $newsArticle->getImageUrl() }}"
                    alt="{{ $newsArticle->title }}">
            </div>
            <div class="col-8 my-auto">
                <div class="m-1 d-flex flex-column">
                    <h6 class="mb-1">{{ $newsArticle->title }}</h6>
                    <p class="text-muted mb-1">
                        {{ $newsArticle->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
        </div>
    </a>
</div>