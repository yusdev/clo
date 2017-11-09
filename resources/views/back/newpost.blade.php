@extends('layouts.back')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nueva nota</h1>
        </div>
    </div>

    <div class="row">
        <form action="texttest.php" method="post">
          {{csrf_field()}}

          <div class="col-lg-9">
            <div class="form-group">
                <label>Título de la nota</label>
                <input name="title" class="form-control" placeholder="Ingrese un título" required>
            </div>
            <div id="my-editor" style="padding:0"name="msg">Hello</div>
          </div>

          <div class="col-lg-3">
            <div style="text-align:right;">
              <input class="btn btn-s btn-success" type="submit" name="save" value="Guardar">
              <input class="btn btn-s btn-primary" type="submit" name="post" value="Publicar">
            </div>

            <div class="panel panel-default" style="margin-top:10px;">
              <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i> Categorías
              </div>
              <div class="panel-body">
                <div class="checkbox">
                  <ul>
                  <?php for($i=1;$i<6;$i++){?>
                  <li><label><input type="checkbox" value="">Categoría <?=$i?></label></li>
                  <?php } ?>
                </ul>
                </div>
              </div>
            </div>

            <div class="panel panel-default" style="margin-top:10px;">
              <div class="panel-heading">
                <i class="fa fa-edit fa-fw"></i> Extracto
              </div>
              <div class="panel-body">
                <div class="form-group">
                    <textarea class="form-control" name="abstract" rows="6" placeholder="Ingrese un extracto"></textarea>
                </div>
              </div>
            </div>

          </div>



        </form>
    </div>





<!-- Import jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<!-- Import Trumbowyg -->
<script src="/js/edittext/trumbowyg/dist/trumbowyg.js"></script>
<!-- Import all plugin you want AFTER importing jQuery and Trumbowyg -->
<script src="/js/edittext/trumbowyg/dist/plugins/base64/trumbowyg.base64.js"></script>
<!-- Init Trumbowyg -->
<script>
// Doing this in a loaded JS file is better, I put this here for simplicity

$('#my-editor').trumbowyg({
btnsDef: {
    // Create a new dropdown
    image: {
        dropdown: ['insertImage', 'base64'],
        ico: 'insertImage'
    }
},
// Redefine the button pane
btns: [
    ['viewHTML'],
    ['formatting'],
    ['strong', 'em', 'del'],
    ['superscript', 'subscript'],
    ['link'],
    ['image'], // Our fresh created dropdown
    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
    ['unorderedList', 'orderedList'],
    ['horizontalRule'],
    ['removeformat'],
    ['fullscreen']
]
});
</script>

@endsection
