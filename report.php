<!doctype html>
  <?php
  $servername = "areliablewindowcleaning.com";
  $username = "areliabl";
  $password = "uGgo7gOq55ggA";
  $dbname = "areliabl_licuado";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $mode =  $_GET['mode'];
  if(!$_GET['mode']) {
    $mode = "Licuado";
    
  } 
  $sql = "SELECT *
  FROM licuado";
  $result = $conn->query($sql);

  $rows = array();
  
  ?>
  <head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#btnSubmit').click(function(){
        
      });
    });
  </script>
  </head>
  <body>
      <div class="container">
        <div class="blog-header">
          <h1 class="blog-title">Reporte <?echo($mode)?></h1>
          <p class="lead blog-description">Reporte de <?echo($mode)?>s</p>
        </div>
        <div class="container">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <?
                while($r = $result->fetch_assoc()) {
                 echo('<tr><td>'.$r[id].'</td><td>'.$r[licuado].'</td><td>'.$r[tipo].'</td></tr>');
                }       
              ?>
          </table>
      </div>
  </body>

</html>