@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('post.index') }}"> Back</a>
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
    <form action="{{route(post.update), $post->id}}" method="POST">
        @csrf
        
        @method('PUT')

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
                    {{ __('Submit') }}
                </x-jet-button>
                {{-- <x-jet-button>
                    {{ __('Reset') }}
                </x-jet-button> --}}
            </div>
        </div>
    </form>
@endsection