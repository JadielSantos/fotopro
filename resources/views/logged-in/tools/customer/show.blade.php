@extends('logged-in.home')

@section('tool')
  <section class="section-customer-item">
    <h3 class="heading-tertiary">{{ $customer->name }}</h3>
    <h3 class="heading-tertiary">{{ $customer->email }}</h3>
    <h3 class="heading-tertiary">{{ $customer->phone_number }}</h3>
  </section>
@endsection
