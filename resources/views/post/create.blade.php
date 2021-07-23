@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
          
        </div>
    </div>
</div>
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group mt-4">
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
            <label for="description">{{__('Description')}}</label>
            <textarea class="{{ $errors->has('description') ? 'is-invalid' : '' }} border-rounded" id="description" cols="140" rows="10" :value="old('description')" required autofocus autocomplete="autor" name="description"></textarea>
            
        </div>

        <div class="mb-0">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                    {{ __('Validate') }}
                </x-jet-button>
               
            </div>
        </div>
    </form>
@endsection