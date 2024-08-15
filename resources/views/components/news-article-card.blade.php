<a href="{{ route('article.show', [$newsArticle->slug]) }}" class="news-card">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top" data-src="{{ $newsArticle->getImageUrl() }}" alt="{{ $newsArticle->title }}" src="{{ $newsArticle->getImageUrl() }}" data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">{{ $newsArticle->summary }}</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Lees meer</button>
            </div>
            <small class="text-muted">{{ $newsArticle->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>
</a>