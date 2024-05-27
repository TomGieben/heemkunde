@extends('layouts.admin')
@section('title', 'Instellingen')
@section('back', route('admin.home'))

@section('content')
<form action="{{ route('admin.settings.store') }}" method="POST">
    @method('POST')
    @csrf

    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <p>
                    Op deze pagina kunt u uw instellingen aanpassen.
                    Het aanpassen van instellingen kan gevolgen hebben voor de website, wees voorzichtig.
                </p>
                <hr class="my-4" />
                <strong class="mb-0">Algemeen</strong>
                <p>
                    De algemene instellingen van de website hebben betrekking op de website zelf.
                </p>
                <div class="list-group mb-5">
                    @foreach ($settings as $setting)
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-0">
                                        {{ $setting->name }}
                                    </strong>
                                    <p class="text-muted mb-0">
                                        {{ $setting->description }}
                                    </p>
                                </div>
                                <div class="col-auto">
                                    @if($setting->type->value === 'checkbox')
                                        <input type="hidden" name="settings[{{ $setting->key }}]" value="0">
                                        <input 
                                            type="checkbox" 
                                            class="form-check-input" 
                                            name="settings[{{ $setting->key }}]" 
                                            value="1" 
                                            @checked($setting->value)
                                            @disabled(!$setting->is_editable)
                                        >
                                    @else
                                        <input 
                                            class="form-control" 
                                            style="min-width: 200px;" 
                                            type="{{ $setting->type->value }}" 
                                            name="settings[{{ $setting->key }}]" 
                                            value="{{ $setting->value }}"
                                            @disabled(!$setting->is_editable)
                                        >
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary">Opslaan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection