@extends('layouts.admin')
@section('title', 'Nieuws artikelen')
@section('back', route('admin.home'))

@section('header-buttons')
    <a class="btn btn-outline-light rounded-pill me-2" href="{{ route('admin.news-articles.create') }}" title="Nieuws artikel toevoegen">
        <i class="fas fa-plus"></i>
    </a>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Hier kunt u de nieuws artikelen van de website aanpassen. De aanpassingen zullen direct zichtbaar zijn op de website.
                </p>
                <hr class="my-4" />
            </div>

            @foreach ($newsArticles as $article)
                <x-news-article-admin-card :article="$article" />
            @endforeach
        </div>
    </div>
@endsection
