@extends('logged-in.home')

@section('tool')
  <section class="section-gallery">
    <div style="display: flex; flex-wrap: wrap">
      @foreach($invoices as $invoice)
        <a href="selecoes/{{ $invoice->selection() }}" class="link-item u-flex-basis-100">
          <div style="display: flex">
            <div class="form__group" style="margin-right: 3rem">
              <label class="form__label">Cliente</label>
              <h3 class="heading-tertiary">{{ $invoice->customer->name }}</h3>
            </div>
            <div class="form__group" style="margin-right: 3rem">
              <label class="form__label">Status</label>
              <h3 class="heading-tertiary">{{ $invoice->status }}</h3>
            </div>
            <div class="form__group" style="margin-right: 3rem">
              <label class="form__label">Preço total</label>
              <h3 class="heading-tertiary">R$ {{ $invoice->total_price }}</h3>
            </div>
            <div class="form__group">
              <label class="form__label">Total pago</label>
              <h3 class="heading-tertiary">R$ {{ $invoice->total_paid }}</h3>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </section>
@endsection
