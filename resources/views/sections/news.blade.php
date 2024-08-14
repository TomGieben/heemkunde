<section id="portfolio">
    <div class="container">
        <h2 class="text-center mb-0">
            Nieuws
        </h2>
        <div class="row d-flex g-3 mt-2">
            @foreach($newsArticles as $newsArticle)
                <div class="col-md-6 col-lg-4 col-12 mx-2 mb-2">
                    <x-news-article-card :newsArticle="$newsArticle" />
                </div>
                {{-- <livewire:comments :newsArticle="$newsArticle" :key="uniqid()" /> --}}
            @endforeach
        </div>
    </div>
</section>