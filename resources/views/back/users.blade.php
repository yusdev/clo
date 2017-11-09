@extends('layouts.back')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuarios</h1>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
      <div class="panel panel-default">
      <div class="panel-body">

      <table class="table table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>E-mail</th>
              <th>Rol</th>
              <th>Acciones</th>
            <tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role}}</td>
                <td>
                  <button class="btn btn-xs btn-primary">Delete</button>
                  <button class="btn btn-xs btn-success">Edit</button>
                </td>
              <tr>
            @endforeach
          </tbody>
      </table>

    </div>
  </div>

  {{-- {{ $users->links() }} --}}

    </div>
</div>

@endsection
