@extends('layouts.app')
@section('content')
<div class="card-body">
  <form method="POST" action="{{ route('edit.user') }}">
      @csrf

      <div class="form-group">
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

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
          <div class="form-group">
              <div class="custom-control custom-checkbox">
                  <x-jet-checkbox id="terms" name="terms" />
                  <label class="custom-control-label" for="terms">
                      {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                          ]) !!}
                  </label>
              </div>
          </div>
      @endif

      <div class="mb-0">
          <div class="d-flex justify-content-end align-items-baseline">
              <x-jet-button>
                  {{ __('Register') }}
              </x-jet-button>
              <x-jet-button>
                  {{ __('Reset') }}
              </x-jet-button>
          </div>
      </div>
  </form>
</div>
@endsection