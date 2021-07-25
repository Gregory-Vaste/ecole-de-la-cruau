@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create email Configuration</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mail.index') }}"> Back</a>
        </div>
    </div>
</div>
    <form action="{{route('mail.store')}}" method="POST">
        @csrf
        <div class="form-group mt-4">
            <x-jet-label value="{{ __('SMTP Driver') }}" />
  
            <x-jet-input class="{{ $errors->has('driver') ? 'is-invalid' : '' }}" type="text" name="driver"
                         :value="old('driver')" required autofocus autocomplete="driver" />
            <x-jet-input-error for="driver"></x-jet-input-error>
        </div>
        <div class="form-group">
            <x-jet-label value="{{ __('Port') }}" />
  
            <x-jet-input class="{{ $errors->has('port') ? 'is-invalid' : '' }}" type="text" name="port"
                         :value="old('port')" required autofocus autocomplete="port" />
            <x-jet-input-error for="port"></x-jet-input-error>
        </div>
        <div class="form-group">
            <x-jet-label value="{{ __('User Name') }}" />
  
            <x-jet-input class="{{ $errors->has('userName') ? 'is-invalid' : '' }}" type="text" name="userName"
                         :value="old('userName')" required autofocus autocomplete="userName" />
            <x-jet-input-error for="userName"></x-jet-input-error>
        </div>

        <div class="form-group">
            <x-jet-label value="{{ __('Sender Name') }}" />
  
            <x-jet-input class="{{ $errors->has('senderName') ? 'is-invalid' : '' }}" type="text" name="senderName"
                         :value="old('senderName')" required autofocus autocomplete="senderName" />
            <x-jet-input-error for="senderName"></x-jet-input-error>
        </div>
        
        <div class="form-group">
            <x-jet-label value="{{ __('Sender Email') }}" />
  
            <x-jet-input class="{{ $errors->has('senderEmail') ? 'is-invalid' : '' }}" type="text" name="senderEmail"
                         :value="old('senderEmail')" required autofocus autocomplete="senderEmail" />
            <x-jet-input-error for="senderEmail"></x-jet-input-error>
        </div>
        

        <div class="mb-0">
            <div class="d-flex justify-content-end align-items-baseline">
                <x-jet-button>
                    {{ __('save') }}
                </x-jet-button>
            </div>
        </div>
    </form>
@endsection