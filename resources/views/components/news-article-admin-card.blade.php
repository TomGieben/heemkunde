<div class="card mb-2">
    <div class="card-body p-3">
        <div class="row align-items-center m-0">
            <div class="col-auto d-flex align-items-center p-0">
                <img width="50px" height="50px" class="object-fit-cover" src="{{ $newsArticle->getThumbnailUrl() }}" alt="{{ $newsArticle->title }}">
            </div>
            <div class="col d-flex flex-column align-items-start">
                <strong class="text-secondary">Titel</strong>
                <small>{{ $newsArticle->title }}</small>
            </div>
            <div class="col d-flex flex-column align-items-start">
                <strong class="text-secondary">Auteur</strong>
                <small>{{ $newsArticle->author->name }}</small>
            </div>
            <div class="col-2 d-flex flex-column align-items-start me-4">
                <strong class="text-secondary">Aangemaakt op</strong>
                <small>{{ $newsArticle->created_at->format('d-m-Y') }}</small>
            </div>
            <div class="col-2 d-flex flex-column align-items-start">
                <strong class="text-secondary">Bewerkt op</strong>
                <small>{{ $newsArticle->updated_at->format('d-m-Y') }}</small>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.news-articles.edit', $newsArticle) }}" class="btn btn-secondary me-2">
                    <i class="fas fa-edit"></i> Bewerken
                </a>
                <x-delete-button :route="route('admin.news-articles.destroy', $newsArticle)" />
            </div>
        </div>
    </div>
</div>