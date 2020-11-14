@extends('logged-in.home')

@section('tool')
  <section class="section-gallery-item">
    <h3 class="heading-tertiary">{{ $gallery->title }}</h3>
    <h3 class="heading-tertiary">{{ $gallery->password }}</h3>

    @foreach($gallery->images as $image)
      <div class="field__item">
        <img src="{{ Storage::url($image->path) }} " onclick="window.expand();">
      </div>
    @endforeach
    <div class="container">
      <!-- Close the image -->
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

      <!-- Expanded image -->
      <img id="expandedImg" style="width:100%">

      <!-- Image text -->
      <div id="imgtext"></div>
    </div>
  </section>
@endsection
