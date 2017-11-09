<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">
    <link rel="stylesheet" href="/css/back/styles.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Closhop PANEL</title>

    <header class="header">
      <div class="menu">
        <ul class="menu-nav">
          <li> Hola, {{ Auth::user()->name }}! </li>
          <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> SALIR </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </header>


      {{-- CONTENT ----------------------------------------------------------- --}}

      <div class="">
            @yield('content')
      </div>



    {{-- FOOTER ----------------------------------------------------------- --}}

    <footer class="footer">
      <div class="footer-content">
            <p> 2017 © CLOSHOP.  Todos los derechos reservados</p>
            <p>by CLO</p>
      </div>
    </footer>

  </div>

</body>
</html>
