@extends('layouts.app')

@section('content')
  <section class="section-sign-in-out">
    <div class="sign-in-out">
      <div class="sign-in-out__form">
        <div class="row">
          <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form__group u-text-center">
              <h2 class="heading-secondary u-margin-bottom-medium">{{ __('Registre-se!') }}</h2>
            </div>

            <div class="form__group">
              <input id="name" type="text" class="form__input u-width-full @error('name') is-invalid @enderror" name="name" placeholder="Nome Completo" value="{{ old('name') }}" required autocomplete="name" autofocus>
              <label for="name" class="form__label">{{ __('Nome Completo') }}</label>

              @error('name')
              <span class="paragraph invalid-message" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form__group">
              <input id="email" type="email" class="form__input u-width-full @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">
              <label for="email" class="form__label">{{ __('E-Mail') }}</label>

              @error('email')
              <span class="paragraph invalid-message" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            <div class="form__group">
              <input id="password" type="password" class="form__input u-width-full @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">
              <label for="password" class="form__label">{{ __('Senha') }}</label>

              @error('password')
              <span class="paragraph invalid-message" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form__group">
              <input id="password-confirm" type="password" class="form__input u-width-full" name="password_confirmation" placeholder="Confirme a senha" required autocomplete="new-password">
              <label for="password-confirm" class="form__label">{{ __('Confirme a senha') }}</label>
            </div>

            <div class="form__group u-text-center">
              <button type="submit" class="btn btn--green">
                {{ __('Enviar') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
