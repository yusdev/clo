@extends('layouts.back')

@section('content')
<div class="asdf">

<div class="panel-menu-container">
  <div class="panel-menu">
    <ul>
      <li><a href="#">Mi perfil</a></li>
      <li> <a href="#">Blog</a>
          <ul class="sub-panel-menu">
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Nuevo Post</a></li>
          </ul>
      </li>
      <li><a href="#">Usuarios</a>
          <ul class="sub-panel-menu">
            <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
            <li><a href="{{route('usuarios.create')}}">Nuevo usuario</a></li>
          </ul>
      </li>
      <li><a href="#">Estadisticas</a></li>
    </ul>
  </div>
</div>

<div class="panel-content">
  @yield('sub-content')
</div>

</div>

@endsection
