@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Partner</h2>
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
    <form action="{{route('partner.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <x-jet-label value="{{ __('Name') }}" />
  
            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                         :value="old('name')" required autofocus autocomplete="name" />
            <x-jet-input-error for="name"></x-jet-input-error>
        </div>
        <div class="form-group">
            <label for="description_partner">{{__('Description')}}</label>
            <textarea class="{{ $errors->has('description_partner') ? 'is-invalid' : '' }} border-rounded" id="description_partner" cols="140" rows="10" :value="old('description_partner')" required autofocus autocomplete="autor" name="description_partner"></textarea>   
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="logoPartner" class="form-control">
            </div>
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