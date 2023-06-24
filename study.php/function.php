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
  
  <?php
    function hello() {
      echo "Hello,World!";
    }
    hello();
    echo '<br/>';
    
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    printRectangleArea(5, 10);
    ?>
  </body>
</html>