<a href="" class="news-card">
    <div class="mt-3">
        <img src="{{ $newsArticle->getImageUrl() }}" alt="{{ $newsArticle->title }}" class="rounded"/>
        <div>
            <p class="mb-1 fw-bold fs-4">{{ $newsArticle->title }}</p>
            <p class="mb-1 fw-bold fs-6">{{ $newsArticle->summary }}</p>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-1">{{ $newsArticle->created_at->diffForHumans() }}</p>
            <button type="button" class="btn btn-secondary">Lees meer</button>
        </div>
    </div>
</a>