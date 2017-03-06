<!doctype html>
  <?php
  include 'connection.php';

  ?>
  <head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#btnSubmit').click(function(){
        alert(1);
      });
    });
  </script>
  </head>
  <body>
      <div class="container">
        <div class="blog-header">
          <h1 class="blog-title">Agregar Ingredientes</h1>
          <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>
        <div class="row">
          <form id="addItem" name="addItem" action="addStuffAction.php">
            <div class="col-sm-8">
                <p class="blog-post-meta">Nombre:</p>
                <input class="form-control" type="text" value="" id="nombre">

            </div><!-- /.blog-main -->
            <div class="col-sm-8">
                <p class="blog-post-meta">Tipo:</p>
                <select id="tipo" name="tipo" class="form-control">
                  <option value="Fruta">Fruta
                  <option value="Verdura">Verdura
                  <option value="Fibra">Fibra
                  <option value="Otro">Otro
                  <option value="Liquido">Liquido
                </select>
            </div><!-- /.blog-main -->
             <div class="col-sm-8">
                <p class="blog-post-meta">Tipo:</p>
                <button id="btnSubmit" type="button" class="btn btn-success">Agregar</button>
            </div><!-- /.blog-main -->
          </form>
        </div><!-- /.row -->
      </div>
  </body>

</html>