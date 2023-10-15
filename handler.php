<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    <?php
    if ( isset( $_POST['radius'] ) ){
      $radius = $_POST['radius'];
      $area = $radius ** 2 * 3.14;
      $circumference = $radius * 2 * 3.14;
    }
    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = ".$area."\n";
    echo "<p>Circumference = ".$circumference."\n";
    ?>
    
  </body>
  
</html>
  
</html>
