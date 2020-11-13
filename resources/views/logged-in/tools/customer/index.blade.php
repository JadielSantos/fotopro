@extends('logged-in.home')

@section('tool')
  <section class="section-customer">
    <a href="{{ route('customers.create') }}" class="btn btn--green">{{ __('Cadastrar Cliente') }}</a>
  </section>
@endsection
