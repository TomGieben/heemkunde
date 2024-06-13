<section class="page-section portfolio bg-primary" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Nieuws
        </h2>
        <div class="row d-flex g-3 mt-2">
            @foreach($newsArticles as $newsArticle)
                <div class="col-md-6 col-lg-4 mb-5">
                    <x-news-article-card :newsArticle="$newsArticle" />
                </div>
            @endforeach
        </div>
    </div>
</section>