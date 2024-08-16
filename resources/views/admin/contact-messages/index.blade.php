@extends('layouts.admin')
@section('title', 'Contactverzoeken')
@section('back', route('admin.home'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Hier kunt u de contactverzoeken bekijken die via het contactformulier zijn verstuurd.
                </p>
                <hr class="my-4" />
            </div>

            @foreach ($contactMessages as $message)
                <x-contact-message-admin-card :message="$message" />
            @endforeach
        </div>
    </div>
@endsection
