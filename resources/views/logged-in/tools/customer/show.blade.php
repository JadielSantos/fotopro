@extends('logged-in.home')

@section('tool')
  <section class="section-customer-item">
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Nome</label>
      <h3 class="heading-tertiary">{{ $customer->name }}</h3>
    </div>
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Email</label>
      <h3 class="heading-tertiary">{{ $customer->email }}</h3>
    </div>
    <div class="form__group" style="margin-right: 3rem">
      <label class="">Celular</label>
      <h3 class="heading-tertiary">{{ $customer->phone_number }}</h3>
    </div>
  </section>
@endsection
