<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: '.$money;
echo '<br>';
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

$taxInclededPrice = $price + $price * $taxRate;
if($taxInclededPrice < $money) {
  echo "商品を買うことができます";
} elseif($taxInclededPrice == $money) {
  echo "商品を買うことができますが、所持金がなくなります";
} else {
  echo "商品を買う事ができません";
}

?>