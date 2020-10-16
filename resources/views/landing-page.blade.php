@extends('layouts.app')

@section('content')
	@include('partials.header')

  @include('partials.description')

  @include('partials.feature')

  @include('partials.plans')

  {{--	@include('landing-page.partials.testimonials')--}}

  @include('partials.cta-register')
@endsection
