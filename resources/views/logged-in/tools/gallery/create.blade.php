@extends('logged-in.home')

@section('tool')
  <form action="{{ route('galleries.store') }}" class="form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form__group">
      <input id="title" type="text" class="form__input" name="title" placeholder="Título" value="{{ old('name') }}" required autocomplete="title" autofocus>
      <label for="title" class="form__label">{{ __('Título') }}</label>
    </div>

    <div class="form__group">
      <input id="images" class="form__input" placeholder="Imagens" value="{{ old('title') }}" type="file" name="images[]" multiple>
    </div>

    <div class="form__group">
      <button class="btn btn--green" type="submit">Enviar Imagens</button>
    </div>
  </form>
@endsection
