<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practice PHP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  
  <body>
    <?php
      function getCircleArea($radius) {
        return $radius * $radius * 3;
      }
      $circleArea = getcircleArea(5);
      echo $circleArea;
    ?>
  </body>
</html>