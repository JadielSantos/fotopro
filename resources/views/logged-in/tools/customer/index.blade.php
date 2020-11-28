@extends('logged-in.home')

@section('tool')
  <section class="section-customer">
    <a href="{{ route('customers.create') }}" class="btn btn--green u-margin-bottom-small">{{ __('Cadastrar Cliente') }}</a>

    @foreach($customers as $customer)
      {{--        <img src="{{ Storage::url($image->path) }} " onclick="myFunction(this);">--}}
      <h1 class="heading-tertiary"><a href="clientes/{{ $customer->id }}">{{ $customer->name }}</a></h1>
    @endforeach
  </section>
@endsection
