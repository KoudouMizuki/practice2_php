<!DOCTYPE html>
<html>
  <head>
    <mata charset = "utf-8">
    <title>practice PHP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  
  <body>
    <?php
      $sum = 11;
      $remainder = $sum % 3;
      
      switch($remainder) {
        case 0:
          echo "大吉です。";
          break;
        case 1:
          echo "中吉です。";
          break;
        case 2:
          echo "小吉です。";
          break;
        default:
          echo "凶です。";
      }
    ?>
  </body>
</html>