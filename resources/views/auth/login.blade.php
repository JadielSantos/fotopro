@extends('layouts.app')

@section('content')
  <section class="section-sign-in-out">
    <div class="sign-in-out">
      <div class="sign-in-out__form">
        <div class="row">
          <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form__group u-center-text">
              <h2 class="heading-secondary u-margin-bottom-medium">{{ __('Entrar') }}</h2>
            </div>

            <div class="form__group">
              <input id="email" type="email" class="form__input u-width-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
              <label for="email" class="form__label">{{ __('E-Mail') }}</label>

              @error('email')
              <span class="paragraph invalid-message" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form__group">
              <input id="password" type="password" class="form__input u-width-full @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">
              <label for="password" class="form__label">{{ __('Senha') }}</label>

              @error('password')
              <span class="paragraph invalid-message" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form__checkbox-group">
              <input type="checkbox" class="form__checkbox-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember" class="form__checkbox-label">
                <span class="form__checkbox-button"></span>
                {{ __('Lembrar dados') }}
              </label>
            </div>

            <div class="form__group form__group--btn-with-text u-margin-top-medium u-center-text">
              <button type="submit" class="btn btn--green u-margin-bottom-small">
                {{ __('Entrar') }}
              </button>

              @if (Route::has('password.request'))
                <a class="heading-tertiary" href="{{ route('password.request') }}">
                  {{ __('Esqueceu sua senha??') }}
                </a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
