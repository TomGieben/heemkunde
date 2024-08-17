@extends('layouts.app')

@section('content')
    <div>
        <div class="py-4 mb-4">
            <div class="container">
                <h1 class="display-4">
                    Over ons
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2>@content('title-1')</h2>
                    <p>@content('paragraph-1')</p>
                </div>
                <div class="col-md-6 col-12">
                    <h2>@content('title-2')</h2>
                    <p>@content('paragraph-2')</p>
                </div>
            </div>
        </div>
    </div>
@endsection
