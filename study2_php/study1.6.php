<?php
  $menu = array('name' => 'CURRY', 'price' => 900);
  echo '$menuの値: ';
  var_export($menu);
  echo '<br>';
  echo '-----';
  echo '<br>';
  
  echo "{$menu['name']}は{$menu['price']}円です";  #パターン１
  //------------------------------------------------------------//
  $name = $menu['name'];  #パターン２
  $price = $menu['price'];
  echo "{$name}は{$price}円です";
?>