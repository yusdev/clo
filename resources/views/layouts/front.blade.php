<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">

    <title>Closhop - Bienvenidos!</title>
  </head>

  <body>

    {{-- HEADER ----------------------------------------------------------- --}}

    <header class="header">
      <div class="menu">
        <div id="logo">
          <a href="{{route('index')}}"><img src="/images/logocloshop.png" alt="logo-closhop"></a>
        </div>
        <nav class="menu-nav">
          <ul>
            <li><a href="{{route('index')}}">INICIO</a></li>
            <li><a href="{{route('aboutus')}}">NOSOTROS</a></li>
            <li><a href="{{route('blog')}}">BLOG & SHOP</a></li>
            <li><a href="{{route('contactus')}}">CONTACTO</a></li>
          </ul>
        </nav>
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


  </body>
</html>
