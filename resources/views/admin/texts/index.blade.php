@extends('layouts.admin')
@section('title', 'Teksten')
@section('back', route('admin.home'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Op deze pagina kunt u de teksten van de website aanpassen. De aanpassingen zullen direct zichtbaar zijn op de website.
                </p>
                <hr class="my-4" />
            </div>

            <ul class="list-group my-4">
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
        </div>
    </div>
@endsection
