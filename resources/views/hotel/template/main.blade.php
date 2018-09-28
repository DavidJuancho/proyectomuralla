<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Gran Muralla | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Style's de la pagina..
    ================================================== -->

    <link rel="stylesheet" href="{{ asset('docs/4/flatly/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('docs/_assets/css/custom.min.css') }}">
    <!-- Fin Style's de la pagina..
    ================================================== -->
</head>
<body>

    @include('hotel.template.partials.nav')
    <div class="container">

        @include('includes.partials.messages')
        @yield('content')

      <footer id="footer">
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="float-lg-right"><a href="#top">Regresar arriba</a></li>
            </ul>
            <p>Dirección<br>Av. Raimondi 487 | Tingo María (Huánuco)<br><br>Contacto<br>Tel.: 062-562934 | Cel.: 971186833</p>

          </div>
        </div>

      </footer>
    </div>

    <!-- Scripts de la pagina -->
    <script src="{{ asset('docs/_vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('docs/_vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('docs/_vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('docs/_assets/js/custom.js') }}"></script>
    @yield('my-js')
</body>
</html>


