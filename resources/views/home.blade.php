@extends('layouts.admin')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Welkom, {{ Auth::user()->name }}</h1>
                <p>Hier kan je alle functionaliteiten van de admin omgeving vinden.</p>
            </div>
        </div>
    </div>
@endsection
