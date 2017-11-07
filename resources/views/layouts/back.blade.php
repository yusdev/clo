<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">
    <link rel="stylesheet" href="/css/back/styles.css">

    <title>Closhop PANEL</title>

    <header class="header">
      <div class="menu">
        <div id="logo">
          <a href="{{route('index')}}"><img src="/images/logocloshop.png" alt="logo-closhop"></a>
        </div>

        <ul class="menu-nav">
          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li> Hola, {{ Auth::user()->name }}! </li>
              <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> SALIR </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              </li>
          @endguest
        </ul>
      </div>
    </header>


      {{-- CONTENT ----------------------------------------------------------- --}}

      <div class="content-container">
            @yield('content')
      </div>



    {{-- FOOTER ----------------------------------------------------------- --}}

    <footer class="footer">
      <div class="footer-content">
            <p>CLOSHOP 2017 Copyright - Todos los derechos reservados</p>
            <p>Developed by CLO</p>
      </div>
    </footer>

  </div>

</body>
</html>
