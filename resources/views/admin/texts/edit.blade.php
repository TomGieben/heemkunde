@extends('layouts.admin')
@section('title', 'Tekst bewerken')
@section('back', route('admin.texts.index'))

@section('content')
    <form action="{{ route('admin.texts.update', $text) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="d-flex justify-content-between mb-3">
            <h3>{{ $text->title }}</h3>
            <div class="alert alert-light p-1">
                <i class="fas fa-info-circle"></i> 
                <span>Het aanpassen van een tekst kan gevolgen hebben voor de website, wees voorzichtig.</span>
            </div>
        </div>

        <div class="mb-3">
            <textarea class="form-control" id="body" name="body" rows="10">{{ old('body', $text->body) }}</textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-secondary">Opslaan</button>
        </div>
    </form>
@endsection
