<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practice PHP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
    <?php
      for($i = 51; $i <= 100; $i ++) {
        echo $i;
        echo '<br>';
      }
    ?>

    <?php
      for($i = 1; $i <= 1000; $i ++) {
        if($i >= 501) {
          break;
        }
        echo $i. '<br>';
      }
    ?>
    
    <?php
      for($i = 1; $i <= 100; $i ++) {
        if($i % 2 == 0) {
          continue;
        }
        echo $i. '<br>';
      }
    ?>
  </body>
</html>