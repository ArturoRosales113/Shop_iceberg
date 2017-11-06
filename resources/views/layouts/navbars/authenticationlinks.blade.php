<!-- Authentication Links -->
@guest
    <li class="nav-item">
     <a class="nav-link" href="{{ route('customer.login') }}">Iniciar Sesión</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="{{ route('customer.register') }}">Registrar</a>
    </li>
@else
 @if (Auth::guard('frontweb')->check())
  <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          Cerrar Sesión
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
  </li>
 @else
  <li class="nav-item">
   <a class="nav-link" href="{{ route('customer.login') }}">Iniciar Sesión</a>
  </li>
  <li class="nav-item">
   <a class="nav-link" href="{{ route('customer.register') }}">Registrar</a>
  </li>
 @endif

@endguest
