@extends('layouts.app')

@section('content')
  <section class="section-customer-gallery-item">
    <form action="{{ route('galleries.submit_selection') }}" class="form" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <h2 class="heading-secondary">{{ $gallery->title }}</h2>
      </div>
      <div>
        <span style="font-size: 1.5rem">Preço por foto:</span>
        <h3 class="heading-tertiary reais">{{ $gallery->unit_price($gallery->customers[0]->id) }}</h3>
      </div>

      <div class="field__customer--container">
        @foreach($gallery->images as $image)
          <div class="field__item">
            <input id="images_{{ $image->id }}" type="checkbox" name="images[]" value="{{ $image->id }}">
            <label class="img--container" for="images_{{ $image->id }}">
              <img src="{{ Storage::url($image->path) }} " onclick="window.expand();">
            </label>
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
      <input id="gallery_id" type="hidden" name="gallery_id" value="{{ $gallery->id }}">
      <input id="unit_price" type="hidden" name="unit_price" value="{{ $gallery->unit_price($gallery->customers[0]->id) }}">
      <div class="form__group u-center-text">
        <button class="btn btn--green" type="submit">Enviar Seleção</button>
      </div>
    </form>
  </section>
@endsection
