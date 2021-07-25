@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Create Partner</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('partners.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
        <form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group mt-4 col-12">
                    <x-jet-label value="{{ __('Name') }}" />
          
                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="form-group col-12">
                    <x-jet-label value="{{ __('Image') }}" />
          
                    <x-jet-input class="{{ $errors->has('image') ? 'is-invalid' : '' }}" type="file" name="image"
                                 :value="old('image')" required autofocus autocomplete="image" />
                    <x-jet-input-error for="image"></x-jet-input-error>
                </div>
        
                <div class="form-group col-12">
                    <label for="description">{{__('Description')}}</label>
                    <textarea class="{{ $errors->has('description') ? 'is-invalid' : '' }} border-rounded" id="description" cols="140" rows="10"
                        :value="old('description')" required autofocus autocomplete="description" name="description" placeholder="description partner"></textarea>
                    
                </div>
                
                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <x-jet-button>
                            {{ __('Validate') }}
                        </x-jet-button>
                    </div>
                </div>
            </div>
        </form>
@endsection
