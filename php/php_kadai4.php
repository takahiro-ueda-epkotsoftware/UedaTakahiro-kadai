<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

#(1)
$hairetsu = array ('月曜日','火曜日','水曜日','木曜日','金曜日');

foreach ($hairetsu as $value){
  echo $value.'<br/>';
}

#(2)
$rensou = array ('japan' => '日本', 'dog' => '犬', 'house' => '家');

foreach ($rensou as $key => $value){
  echo $key.'=>';
  echo $value.'<br/>';
}

#(3)
$hairetsu = array ('月曜日','火曜日','水曜日','木曜日','金曜日');
$rensou = array ('japan' => '日本', 'dog' => '犬', 'house' => '家');

echo $hairetsu[1].'<br/>';
echo $rensou['house'];

#(4)
$hairetsu = array ('月曜日','火曜日','水曜日','木曜日','金曜日');
$rensou = array ('japan' => '日本', 'dog' => '犬', 'house' => '家');

$a = count ($hairetsu);
$b = count ($rensou);

echo $a.'<br/>';
echo $b;

#(5)        //確認済み。
$country = array
(
  'japan' => array ('tokyo' => '東京', 'osaka' => '大阪'),
  'usa' => array ('newyork' => 'ニューヨーク', 'seattle' => 'シアトル')
);

foreach ($country as $hairetsu){
  echo '<br/>';
foreach ($hairetsu as $key => $value){
  echo $key.'=>';
  echo $value.'<br/>';
  }
}

?>

</body>
</html>