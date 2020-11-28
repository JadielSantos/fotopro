@extends('layouts.app')

@section('content')
  <section class="section-customer-gallery-item">
    <div style="display: flex; margin: 0 15rem">
      <div class="form__group" style="margin-right: 3rem">
        <label class="">Cliente</label>
        <h3 class="heading-tertiary">{{ $selection->customer()->name }}</h3>
      </div>
      <div class="form__group" style="margin-right: 3rem">
        <label class="">Status</label>
        <h3 class="heading-tertiary">{{ $selection->invoice()->status }}</h3>
      </div>
      <div class="form__group" style="margin-right: 3rem">
        <label class="">Preço total</label>
        <h3 class="heading-tertiary">R$ {{ $selection->invoice()->total_price }}</h3>
      </div>
    </div>
    <div class="field__customer--container">
      @foreach($selection->images as $image)
        <div class="field__item">
          <img src="{{ Storage::url($image->path()) }} " onclick="window.expand();">
        </div>
      @endforeach
    </div>
  </section>
@endsection
