@extends('layouts.admin')
@section('title', 'Nieuws artikelen')
@section('back', route('admin.home'))

@section('header-buttons')
    <a class="btn btn-outline-light rounded-pill me-2" href="{{ route('admin.news-articles.create') }}" title="Nieuws artikel toevoegen">
        <i class="fas fa-plus"></i>
    </a>
@endsection

@section('content')
    @foreach ($newsArticles as $article)
        <x-news-article-admin-card :article="$article" />
    @endforeach
@endsection
