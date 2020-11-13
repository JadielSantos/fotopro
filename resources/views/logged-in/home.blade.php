@extends('layouts.app')

@section('content')
  <section class="section-home">
    <div class="flex">
      <div class="flex__row flex__row-up">

        <div class="flex__row--item-left user-info u-center-text">
          <img src="{{ asset('/img/profile.png') }}" alt="User photo" style="height: 50px; margin-right: 1rem">
          <div>
            <h3 class="heading-tertiary">{{ Auth::user()->name }}</h3>
            <div>
              <i class="icon-basic-star" style="font-size: 1.5rem"></i>
              <i class="icon-basic-star" style="font-size: 1.5rem"></i>
              <i class="icon-basic-star" style="font-size: 1.5rem"></i>
              <i class="icon-basic-star" style="font-size: 1.5rem"></i>
              <i class="icon-basic-star" style="font-size: 1.5rem"></i>
            </div>
          </div>
        </div>

        <div class="flex__row--item-right section-title">
          <i class="icon-basic-picture feature-box__icon" style="font-size: 5rem;"></i>
        </div>

      </div>

      <div class="flex__row">

        <div class="flex__row--item-left side-menu-container">
          <ul class="side-menu">
            <li class="heading-tertiary u-margin-bottom-small"><a href="{{ route('galleries.index') }}">{{ __("Seleção de Fotos") }}</a></li>
            <li class="heading-tertiary u-margin-bottom-small"><a href="{{ route('customers.index') }}">{{ __("Clientes") }}</a></li>
            <li class="heading-tertiary u-margin-bottom-small"><a href="{{ route('home') }}">{{ __("Pagamentos") }}</a></li>
            <li class="heading-tertiary u-margin-bottom-small"><a href="{{ route('home') }}">{{ __("Suporte") }}</a></li>
          </ul>
        </div>

        <div class="flex__row--item-right">
          @yield('tool')
        </div>

      </div>
    </div>
  </section>
@endsection
