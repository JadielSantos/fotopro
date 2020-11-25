@extends('layouts.app')

@section('content')
  <section class="section-customer-gallery-item">
    <form action="{{ route('galleries.password') }}" class="form" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form__group u-flex-basis-100">
        <input id="password" type="password" class="form__input" name="password" placeholder="Por favor, insira a senha desta galeria para acessá-la" value="{{ old('password') }}" required autofocus>
        <label for="password" class="form__label">{{ __('Por favor, insira a senha desta galeria para acessá-la') }}</label>
      </div>

      <input id="gallery_id" type="hidden" class="form__input" name="gallery_id" value="{{ $gallery->id }}">

      <div class="form__group u-center-text">
        <button class="btn btn--green" type="submit">Acessar</button>
      </div>
    </form>
  </section>
@endsection
