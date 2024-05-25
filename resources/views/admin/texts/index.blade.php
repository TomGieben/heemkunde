@extends('layouts.admin')
@section('title', 'Teksten')
@section('back', route('admin.home'))

@section('content')
    <ul class="list-group">
        @foreach ($texts as $text)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <span class="h5">{{ $text->title }}</span>
                    <span class="badge bg-secondary mx-2 text-black">{{ $text->route }}</span>
                </div>
             
                <div>
                    <a href="{{ route('admin.texts.edit', $text) }}" class="btn btn-outline-dark">
                        <i class="fas fa-edit"></i> Bewerken
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
