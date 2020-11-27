@extends('layouts.app')

@section('content')
  <section class="section-customer-gallery-item">
    <form action="{{ route('galleries.password') }}" class="form sign-in-out__form" method="post" enctype="multipart/form-data">
      @csrf
      <h3 style="font-size: 3rem" class="heading-tertiary u-margin-bottom-small">Insira a senha para acessar a galeria: {{ $gallery->title }}</h3>

      <div class="form__group u-flex-basis-100" style="text-align: left">
        <input id="password" type="password" style="width: 100%" class="form__input" name="password" placeholder="Senha" value="{{ old('password') }}" required autofocus>
        <label for="password" class="form__label">{{ __('Senha') }}</label>
      </div>

      <input id="gallery_id" type="hidden" class="form__input" name="gallery_id" value="{{ $gallery->id }}">

      <div class="form__group u-center-text">
        <button class="btn btn--green" type="submit">Acessar</button>
      </div>
    </form>
  </section>
@endsection
