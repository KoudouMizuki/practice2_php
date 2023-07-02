<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>practice PHP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
    <?php echo "Hello, World"; ?>

    <?php echo 7 * 2; ?>

    <?php echo 8 % 3; ?>
    
    <?php echo 5 +7; ?>
    
    <?php echo '5 + 7'; ?>
    
    <?php
      $fruit = "りんご";
      echo $fruit;
    ?>
    
    <?php
      $sum = 8 + 9;
      echo $sum;
    ?>
    
    <practice>
      <?php
        $x = 5;
        $y = 2;
        $a = 8;
        $b = 4;
      ?>
      
      <?php
        $x += 10;
        echo $x;
      ?>
      
      <?php
        $y *= 5;
        echo $y;
      ?>
      
      <?php
        $a += 1;
        echo $a;
      ?>
      
      <?php
        $b -= 1;
        echo $b;
      ?>
    </practice>
    
  </body>
</html>


