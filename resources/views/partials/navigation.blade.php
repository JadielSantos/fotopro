<nav class="nav-menu">
  <ul class="menu">
    <li><a href="{{ route('home') }}">Início</a></li>
    <li><a href="#!">Sobre</a></li>
    <li><a href="#!">Fale Conosco</a></li>
    <li><a href="#!">FAQ</a></li>

    <div class="menu--right">
      @guest
        <li>
          <a href="{{ route('login') }}">{{ __('Entrar') }}</a>
        </li>
        @if (Route::has('register'))
          <li>
            <a href="{{ route('register') }}">{{ __('Registrar') }}</a>
          </li>
        @endif
      @else
        <li>
          <a id="navbarDropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
        </li>

        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Sair') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      @endguest
    </div>
  </ul>
</nav>
