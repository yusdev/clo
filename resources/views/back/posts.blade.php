@extends('layouts.back')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Notas</h1>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
      <div class="panel panel-default">
      <div class="panel-body">

      <table class="table table-hover">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Título</th>
              <th>Extracto</th>
              <th>Categoría</th>
              <th>Autor</th>
              <th>Estado</th>
              <th>Fecha</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

            <?php for($i=0;$i<50;$i++){?>
              <tr>
                <td>Imagen</td>
                <td>Título</td>
                <td>Extracto</td>
                <td>Moda</td>
                <td>Closhop</td>
                <td>Publicada</td>
                <td>08/11/17</td>
                <td>
                  <button class="btn btn-xs btn-primary">Eliminar</button>
                  <button class="btn btn-xs btn-success">Aprobar</button>
                </td>
              </tr>
            <?php } ?>

          </tbody>
      </table>

    </div>
  </div>

  {{-- {{ $users->links() }} --}}

    </div>
</div>

@endsection
