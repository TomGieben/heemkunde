<section>
    <div class="container">
        <div class="row d-flex g-3 mt-2">
            @foreach($newsArticles as $newsArticle)
                <div class="col-md-6 col-lg-4 col-12 mx-2 mb-2">
                    <x-news-article-card :newsArticle="$newsArticle" />
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-outline-primary btn-lg" href="{{ route('news') }}">
                Bekijk alle nieuwsberichten
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>