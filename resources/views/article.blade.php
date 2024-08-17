@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    {{ $article->title }}
                </h1>
                <small class="text-muted">
                    <span class="me-2">
                        <i class="fas fa-calendar"></i>
                        {{ $article->created_at->format('d-m-Y') }}
                    </span>
                    <span>
                        <i class="fas fa-user"></i>
                        {{ $article->author->name }}
                    </span>
                </small>
            </div>
        </div>
        <div class="container">
            <div class="row mt-2 mb-4">
                <div class="col-md-8">
                    <div class="blog-post mb-4">
                        <div class="mb-4">
                            <img src="{{ $article->getImageUrl() }}"
                                class="img-fluid rounded" style="max-height: 500px" alt="{{ $article->title }}">
                        </div>
                        <h2 class="blog-post-title">{{ $article->title }}</h2>
                        <div>
                            {!! $article->content !!}
                        </div>
                    </div>
                    <livewire:comments :newsArticle="$article" :key="uniqid()" />
                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">Gerelateerde artikelen</h4>
                            @foreach ($related as $relatedArticle)
                                <x-news-article-card-small :newsArticle="$relatedArticle" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
