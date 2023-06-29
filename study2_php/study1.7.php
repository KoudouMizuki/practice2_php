<?php
  $menus = array(
    array('name' => 'CURRY', 'price' => 900),
    array('name' => 'PASTA', 'price' => 1200),
    array('name' => 'COFFEE', 'price' => 600)
  );
  
  $totalPrice = 0;
  $maxPrice = 0;
  $maxPriceMenuName = "";
  foreach($menus as $menu) {
    $price = $menu['price'];
    $name = $menu['name'];
    echo "{$name}は{$price}円です";
    echo '<br>';
    $totalPrice += $price;
    if($maxPrice < $price) {
      $maxPrice = $price;
      $maxPriceMenuName = $name;
    }
  }
  echo "合計金額は{$totalprice}円です";
  echo '<br>';
  echo "{$maxPriceMenuName}が最高価格で{$maxPrice}円です";
?>