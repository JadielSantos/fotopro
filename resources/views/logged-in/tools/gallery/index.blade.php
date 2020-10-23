@extends('logged-in.home')

@section('tool')
  <section class="section-gallery">
    <a href="{{ route('galleries.create') }}" class="btn btn--green">{{ __('Criar Galeria') }}</a>
  </section>
@endsection
