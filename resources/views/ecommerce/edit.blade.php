@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Poroduct</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{route(product.update), $post->id}}" method="POST">
        @csrf
        
        @method('PUT')

        <div class="form-group">
            <x-jet-label value="{{ __('Name') }}" />
  
            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                         :value="old('name')" required autofocus autocomplete="name" />
            <x-jet-input-error for="name"></x-jet-input-error>
        </div>
        
        <div class="form-group">
            <label for="description">{{__('Description')}}</label>
            <textarea class="{{ $errors->has('description') ? 'is-invalid' : '' }} border-rounded" id="description" cols="140" rows="10" :value="old('description')" required autofocus autocomplete="autor"></textarea>
            {{-- <x-jet-input-error for="description"/></x-jet-input-error> --}}
        </div>
        <div class="form-group">
            <x-jet-label value="{{ __('Price') }}" />
  
            <x-jet-input class="{{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price"
                         :value="old('price')" required autofocus autocomplete="price" />
            <x-jet-input-error for="price"></x-jet-input-error>
        </div>
        <div class="form-group">
            <label for="photo">{{ __('Photo') }}</label>
            <input type="file" name="photo" id="photo" accept="image/png, image/jpeg">
        </div>

        <div class="mb-0">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                    {{ __('Upload') }}
                </x-jet-button>
                {{-- <x-jet-button>
                    {{ __('Reset') }}
                </x-jet-button> --}}
            </div>
        </div>
    </form>
@endsection