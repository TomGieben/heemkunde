@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    {{ $article->title }}
                </h1>
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
                            <h4 class="fst-italic">Meer activiteiten</h4>
                            <a href="https://gildedagoeffelt.nl/programma/zondag-gildedag" class="event-card-small">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded w-100 m-1 img-article" loading="lazy"
                                            src="https://gildedagoeffelt.nl/storage/100/ea_2808_1505_01.jpg"
                                            alt="Wat is bodemisolatie?">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <div class="m-1 d-flex flex-column">
                                            <span class="h5">Zondag - Gildedag</span>
                                            <span>2 maanden geleden</span>
                                        </div>
                                    </div>
                                </div>
                            </a> <a href="https://gildedagoeffelt.nl/programma/zaterdag-schietcompetitie"
                                class="event-card-small">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded w-100 m-1 img-article" loading="lazy"
                                            src="https://gildedagoeffelt.nl/storage/168/thumbnail_koningsdag-(37).jpg"
                                            alt="Wat is bodemisolatie?">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <div class="m-1 d-flex flex-column">
                                            <span class="h5">Zaterdag - Schietcompetitie</span>
                                            <span>1 maand geleden</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
