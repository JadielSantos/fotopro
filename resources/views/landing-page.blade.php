@extends('layouts.app')

@section('content')
	@include('partials.navigation')

	@include('partials.header')

	@include('partials.feature')

  @include('partials.plans')

{{--	@include('landing-page.partials.image-showcases')--}}

{{--	@include('landing-page.partials.testimonials')--}}

{{--	@include('landing-page.partials.call-to-action')--}}
@endsection
