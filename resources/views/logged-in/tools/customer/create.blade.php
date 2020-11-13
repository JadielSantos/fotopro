@extends('logged-in.home')

@section('tool')
  <section class="section-gallery">
    <form action="{{ route('customers.store') }}" class="form" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form__group u-flex-basis-100">
        <input id="name" type="text" class="form__input" name="name" placeholder="Nome" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label for="name" class="form__label">{{ __('Nome') }}</label>
      </div>

      <div class="form__group u-flex-basis-100">
        <input id="email" type="email" class="form__input" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="email" class="form__label">{{ __('E-mail') }}</label>
      </div>

      <div class="form__group u-flex-basis-100">
        <input id="phone_number" type="tel" class="form__input" name="phone_number" placeholder="Celular" value="{{ old('phone_number') }}" required autocomplete="tel" autofocus>
        <label for="phone_number" class="form__label">{{ __('Celular') }}</label>
      </div>

      <div class="form__group u-center-text">
        <button class="btn btn--green" type="submit">Cadastrar</button>
      </div>
    </form>
  </section>
@endsection
