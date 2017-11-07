@extends('layouts.back')

@section('content')

<div class="panel-menu-container">
  <div class="panel-menu">
    <ul>
      <li><a href="#">Mi perfil</a></li>
      <li> <a href="#">Blog</a>
          <ul>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Nuevo Post</a></li>
          </ul>
      </li>
      <li><a href="#">Usuarios</a>
          <ul>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Nuevo usuario</a></li>
          </ul>
      </li>
      <li><a href="#">Estadisticas</a></li>
    </ul>
  </div>
</div>



@endsection
