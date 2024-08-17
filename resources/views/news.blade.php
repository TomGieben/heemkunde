@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    Nieuws
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($newsArticles as $article)
                    <div class="col-md-6 col-lg-4 col-12 mb-2">
                        <x-news-article-card :newsArticle="$article" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
