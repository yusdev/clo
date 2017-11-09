<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SB Admin 2 - Bootstrap Admin Theme -->

      <!-- Bootstrap Core CSS -->
      <link href="/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- MetisMenu CSS -->
      <link href="/sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

      <!-- Morris Charts CSS -->
      <link href="/sb-admin/vendor/morrisjs/morris.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- EDITTEXT -->
      <link rel="stylesheet" href="/js/edittext/trumbowyg/dist/ui/trumbowyg.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">
    <link rel="stylesheet" href="/css/back/styles.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Closhop PANEL</title>


    <body>

    <div id="wrapper">

        <!-- HEADER + SIDEBAR START -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}">CLOSHOP PANEL</a>
            </div>

            <!-- HEADER START -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i style="padding-right:5px">{{ Auth::user()->name }}</i><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Mis datos </a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- HEADER END-->


            <!-- MENU SIDEBAR START -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>

                        <!-- OPTION -->
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Mis datos </a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-support fa-fw"></i> Media </a>
                        </li>

                        <!-- MENU OPTION WITH SUBOPTIONS -->
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Blog <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Categorias</a>
                                </li>
                                <li>
                                    <a href="{{route('post.index')}}">Notas</a>
                                </li>
                                <li>
                                    <a href="{{route('post.create')}}">Nueva nota</a>
                                </li>
                            </ul>
                        </li>

                        <!-- MENU OPTION WITH SUBOPTIONS -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('usuarios.index')}}">Ver todos</a>
                                </li>
                                <li>
                                    <a href="{{route('usuarios.create')}}">Nuevo usuario</a>
                                </li>
                            </ul>
                        </li>

                        <!-- OPTION -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estadísticas</a>
                        </li>


                    </ul>
                </div>
            </div> <!-- SIDEBAR END -->
        </nav> <!-- HEADER + SIDEBAR END -->



        {{-- CONTENT ----------------------------------------------------------- --}}

        <!-- ADMIN PANEL BODY START -->
        <div id="page-wrapper">
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



    <!-- SB Admin 2 - Bootstrap Admin Theme -->
      <!-- jQuery -->
      <script src="/sb-admin/vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="/sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="/sb-admin/vendor/metisMenu/metisMenu.min.js"></script>

      <!-- Morris Charts JavaScript -->
      <script src="/sb-admin/vendor/raphael/raphael.min.js"></script>
      <script src="/sb-admin/vendor/morrisjs/morris.min.js"></script>
      <script src="/sb-admin/data/morris-data.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="/sb-admin/dist/js/sb-admin-2.js"></script>


    </body>
</html>
