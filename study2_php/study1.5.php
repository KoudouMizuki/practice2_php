<?php
  $prices = array(1000, 650, 750, 800);
  echo '$pricesの値: ';
  foreach ($prices as $price) {
    echo $price.' ';
  }
  echo '<br>';
  echo '-----';
  echo '<br>';
  
  $totalPrice = 0;  #合計金額の定義
  $maxPrice = 0;  #最高価格の定義
  foreach($prices as $price) {
    $totalPrice += $price;  #繰り返し処理で価格を足していく
    if($maxPrice < $price) {  #if文で＄maxPriceと$priceを比較して$peiceの方が高ければ$maxPriceに代入する
      $maxPrice = $price;
    }
  }
  echo "合計金額は{$totalPrice}円です";
  echo '<br>';
  echo "最高価格は{$maxPrice}円です";
?>