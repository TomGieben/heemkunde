@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    Contact
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    @if (session('success'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        @honeypot
                        <div class="mb-3">
                            <label for="name" class="form-label">Naam</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mailadres</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Bericht</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="w-100 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Verstuur</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card my-4">
                        <div class="card-body">
                            <h5 class="card-title">Contactgegevens</h5>
                            <p class="card-text">
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Adres:</strong>
                                        <p>@content('address')</p>
                                    </li>
                                    <li>
                                        <strong>Telefoonnummer:</strong>
                                        <p>@content('phone')</p>
                                    </li>
                                    <li>
                                        <strong>E-mailadres:</strong>
                                        <p>
                                            <a href="mailto:@content('email')">@content('email')</a>
                                        </p>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
@endsection
