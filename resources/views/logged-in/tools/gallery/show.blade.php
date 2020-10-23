@extends('logged-in.home')

@section('tool')
  <section class="section-gallery-item">
    <h2 class="heading-tertiary">{{ $gallery->title }}</h2>

    @foreach($gallery->images as $image)
      {{ $image->path }}
    @endforeach
  </section>
@endsection
