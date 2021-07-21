@extends('layouts.app')
@section('content')
    <form action="{{route(post.store)}}" method="POST">
        @csrf
        <div class="form-group">
            <x-jet-label value="{{ __('Title') }}" />
  
            <x-jet-input class="{{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title"
                         :value="old('title')" required autofocus autocomplete="title" />
            <x-jet-input-error for="title"></x-jet-input-error>
        </div>
        <div class="form-group">
            <x-jet-label value="{{ __('Autor') }}" />
  
            <x-jet-input class="{{ $errors->has('Autor') ? 'is-invalid' : '' }}" type="text" name="autor"
                         :value="old('autor')" required autofocus autocomplete="autor" />
            <x-jet-input-error for="autor"></x-jet-input-error>
        </div>
        <div class="form-group">
            <x-jet-label value="{{__('Description')}}" />
            <x-jet-textarea class="{{$errors->has('description') ? 'is-invalid' : ''}}" style="height: 150px" name="description"
                            :value="old('description')" required autofocus autocomplete="autor" />
            <x-jet-input-error for="description"/></x-jet-input-error>
        </div>

        <div class="mb-0">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                    {{ __('Register') }}
                </x-jet-button>
                {{-- <x-jet-button>
                    {{ __('Reset') }}
                </x-jet-button> --}}
            </div>
        </div>
    </form>
@endsection