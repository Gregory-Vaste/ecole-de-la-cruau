@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="card-body">
  <form method="POST" action="{{ route('store.user') }}">
      @csrf

      <div class="form-group mt-4">
          <x-jet-label value="{{ __('Name') }}" />

          <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                       :value="old('name')" required autofocus autocomplete="name" />
          <x-jet-input-error for="name"></x-jet-input-error>
      </div>
      <div class="form-group">
          <x-jet-label value="{{ __('FirstName') }}" />

          <x-jet-input class="{{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname"
                       :value="old('firstname')" required autofocus autocomplete="name" />
          <x-jet-input-error for="firstname"></x-jet-input-error>
      </div>
      <div class="form-group">
          <x-jet-label value="{{ __('Adress') }}" />

          <x-jet-input class="{{ $errors->has('adress') ? 'is-invalid' : '' }}" type="text" name="adress"
                       :value="old('adress')" required autofocus autocomplete="name" />
          <x-jet-input-error for="adress"></x-jet-input-error>
      </div>
      <div class="form-group">
          <x-jet-label value="{{ __('Zip Code') }}" />

          <x-jet-input class="{{ $errors->has('zipCode') ? 'is-invalid' : '' }}" type="number" name="zipCode"
                       :value="old('zipCode')" required autofocus autocomplete="name" />
          <x-jet-input-error for="zipCode"></x-jet-input-error>
      </div>

      <div class="form-group">
          <x-jet-label value="{{ __('Email') }}" />

          <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                       :value="old('email')" required />
          <x-jet-input-error for="email"></x-jet-input-error>
      </div>

      <div class="form-group">
          <x-jet-label value="{{ __('Password') }}" />

          <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                       name="password" required autocomplete="new-password" />
          <x-jet-input-error for="password"></x-jet-input-error>
      </div>

      <div class="form-group">
          <x-jet-label value="{{ __('Confirm Password') }}" />

          <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
      </div>

     
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="is_licencier">
      <label class="form-check-label{{$errors->has('is_licencier') ? 'is-invalide' : ''}}" for="is_licencier" value="is_licencier">{{__('Licencier')}}</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="is_adherent">
      <label class="form-check-label{{$errors->has('is_adherent') ? 'is-invalide' : ''}}" for="is_licencier" value="is_adherent">{{__('Adherent')}}</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="is_admin">
      <label class="form-check-label{{$errors->has('is_admin') ? 'is-invalide' : ''}}" for="is_licencier" value="is_admin">{{__('Admin')}}</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="is_superAdmin">
      <label class="form-check-label{{$errors->has('is_superAdmin') ? 'is-invalide' : ''}}" for="is_licencier" value="is_superAdmin">{{__('Super Admin')}}</label>
    </div>
    <div class="mb-0">
        <div class="d-flex justify-content-end align-items-baseline">
            <x-jet-button>
                {{ __('Submit') }}
            </x-jet-button>
        </div>
    </div>
  </form>
</div>
@endsection