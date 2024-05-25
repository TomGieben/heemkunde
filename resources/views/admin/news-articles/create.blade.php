@extends('layouts.admin')
@section('title', 'Nieuws artikel toevoegen')
@section('back', route('admin.news-articles.index'))

@section('content')
    <form action="{{ route('admin.news-articles.store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Algemene informatie</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titel *</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="summary" class="form-label">Samenvatting</label>
                            <textarea class="form-control" id="summary" name="summary" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Inhoud *</label>
                            <textarea class="form-control tinymce" id="content" name="content" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Afbeelding *</h5>
                    </div>
                    <div class="card-body">
                        <x-image-input></x-image-input>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Overig</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="user-id" class="form-label">Auteur</label>
                            <select class="form-select" id="user-id" name="user_id">
                                <option value="">Selecteer een auteur</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-secondary">Opslaan</button>
        </div>
    </form>
@endsection
