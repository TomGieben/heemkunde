<a href="">
    <div class="card news-card text-dark card-has-bg" style="background-image:url('{{ $newsArticle->getImageUrl() }}');">
        <img class="card-img d-none" src="{{ $newsArticle->getImageUrl() }}" alt="{{ $newsArticle->title }} afbeelding">
        <div class="card-img-overlay d-flex flex-column">
            <div class="card-body">
                <small class="card-meta mb-2"> {{ $newsArticle->summary }}</small>
                <h4 class="card-title mt-0 ">{{ $newsArticle->title }}</h4>
                <i class="far fa-clock"></i> {{ $newsArticle->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
</a>
