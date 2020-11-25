@extends('layouts.app')

@section('content')
  <section class="section-customer-gallery-item">
    <form>
      <h2 class="heading-secondary">{{ $gallery->title }}</h2>

      <div class="field__customer--container">
        @foreach($gallery->images as $image)
          <div class="field__item">
            <input id="checkbox_{{ $image->id }}" type="checkbox" name="checkbox_{{ $image->id }}">
            <label class="img--container" for="checkbox_{{ $image->id }}">
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
    </form>
  </section>
@endsection
