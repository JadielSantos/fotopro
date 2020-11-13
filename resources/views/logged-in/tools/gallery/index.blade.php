@extends('logged-in.home')

@section('tool')
  <section class="section-gallery">
    <div class="form__group">
      <a href="{{ route('galleries.create') }}" class="btn btn--green">{{ __('Criar Galeria') }}</a>
    </div>

    @foreach($galleries as $gallery)
{{--        <img src="{{ Storage::url($image->path) }} " onclick="myFunction(this);">--}}
      <h1 class="heading-tertiary"><a href="galerias/{{ $gallery->id }}">{{ $gallery->title }}</a></h1>
    @endforeach

  </section>
@endsection
