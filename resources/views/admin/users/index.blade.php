@extends('layouts.admin')
@section('title', 'Gebruikers')
@section('back', route('admin.home'))

@section('header-buttons')
    <a class="btn btn-outline-light rounded-pill me-2" href="{{ route('admin.users.create') }}">
        <i class="fas fa-plus"></i>
    </a>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Op deze pagina kunt u gebruikers beheren. Gebruikers kunnen toegang hebben tot gevoelige informatie.
                </p>
                <hr class="my-4" />
                <strong class="mb-0">Algemeen</strong>
                <p>
                    De algemene instellingen van de website hebben betrekking op de website zelf.
                </p>
                <div class="list-group mb-5">
                    @foreach ($users as $user)
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-0">
                                        {{ $user->name }}
                                    </strong>
                                    <p class="text-muted">
                                        {{ $user->email }}
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <x-delete-button :route="route('admin.users.destroy', $user)" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
