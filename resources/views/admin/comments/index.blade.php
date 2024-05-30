@extends('layouts.admin')
@section('title', 'Reacties')
@section('back', route('admin.home'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Hier reacties op nieuws artikelen verwijderen en bekijken.
                </p>
                <hr class="my-4" />
            </div>

            @foreach ($comments as $comment)
                <x-comment-admin-card :comment="$comment" />
            @endforeach
        </div>
    </div>
@endsection
