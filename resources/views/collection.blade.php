@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    Collectie
                </h1>
            </div>
        </div>
        <div class="container">
            <h2 class="mb-4">Nieuwste items</h2>
            <div class="mb-2">
                <x-brabant-cloud url="{{ env('GENERAL_COLLECTION_URL') }}"/>
            </div>
            <h2 class="mb-4">Populairste items</h2>
            <div class="mb-2">
                <x-brabant-cloud url="{{ env('PRAYER_CARDS_COLLECTION_URL') }}"/>
            </div>
        </div>
    </div>
@endsection
