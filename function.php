<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practice PHP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
  <?php
    $str = 'Progate';
    echo strlen($str);
    echo '<br>';
    
    $array = array("HTML", "CSS", "PHP");
    echo count($array);
    
    echo rand(10, 15);
  ?>
  </body>
</html>