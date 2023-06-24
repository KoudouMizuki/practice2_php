<?php
  $menus = array(
    array('name' => 'CURRY', 'price' => 900),
    array('name' => 'PASTA', 'price' => 1200),
    array('name' => 'COFFEE', 'price' => 600)
  );
  
  $totalPrice = 0;
  foreach($menus as $menu) {
    $price = $menu['price'];
    $name = $menu['name'];
    echo "{$name}は{$price}円です";
    echo '<br>';
    $totalPrice += $price;
  }
  echo "合計金額は{$totalprice}円です";
?>