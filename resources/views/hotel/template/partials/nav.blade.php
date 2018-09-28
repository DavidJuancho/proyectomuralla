
    <div  class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">Hotel La gran Muralla</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}"> Inicio </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reservaciones') }}">Reservar</a>
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            @if (Auth::guest())
            <li>{!! link_to('auth/login', trans('navs.login')) !!}</li>
            <p> | </p>
            <li>{!! link_to('auth/register', trans('navs.register')) !!}</li>
            @else           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">{{ Auth::user()->name }}<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a class="dropdown-item" href="{{ route('habitacion.create') }}">Agregar Habitacion</a></li>
                <li><a class="dropdown-item" href="{{ route('reservas.index') }}">Ver Reservas</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="{{ route('tipo.create') }}">Agregar Tipo</a></li>
                <div class="dropdown-divider"></div>
                <li>
                  {!! link_to('auth/logout', trans('navs.logout')) !!}
                </li>
              </ul>
            </li>
            @endif
          </ul>

        </div>
      </div>
    </div>
