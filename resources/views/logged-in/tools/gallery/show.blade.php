@extends('logged-in.home')

@section('tool')
  <section class="section-gallery-item">
    <h2 class="heading-secondary">{{ $gallery->title }}</h2>
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Senha</label>
      <h3 class="heading-tertiary">{{ $gallery->password }}</h3>
    </div>

    <div>
      @foreach($gallery->images as $image)
        <div class="field__item">
          <img src="{{ Storage::url($image->path) }} " onclick="window.expand();">
        </div>
      @endforeach
    </div>
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
