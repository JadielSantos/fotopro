@extends('layouts.app')

@section('content')
  <section class="" style="max-width: 500px; margin: 3rem auto">
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Cliente</label>
      <h3 class="heading-tertiary">{{ $invoice->customer->name }}</h3>
    </div>
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Status</label>
      <h3 class="heading-tertiary">{{ $invoice->status }}</h3>
    </div>
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Preço total</label>
      <h3 class="heading-tertiary">R$ {{ $invoice->total_price }}</h3>
    </div>
    <div class="form__group">
      <label class="">Total pago</label>
      <h3 class="heading-tertiary">R$ {{ $invoice->total_paid }}</h3>
    </div>
  </section>
@endsection
