@extends('layouts.admin')
@section('title', 'Gebruiker toevoegen')
@section('back', route('admin.users.index'))

@section('content')
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <div class="alert alert-light p-1 mb-3">
            <i class="fas fa-info-circle"></i> 
            <span>Let op! Een gebruiker kan toegang hebben tot gevoelige informatie.</span>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Naam</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        required>
                </div>
            </div>
            <div class="col-12 col-md-6">

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Wachtwoord bevestigen</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-secondary">Opslaan</button>
        </div>
    </form>
@endsection
