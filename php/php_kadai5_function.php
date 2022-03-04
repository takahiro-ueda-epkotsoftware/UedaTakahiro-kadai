<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

//(1)
function sum ($a,$b){       //各計算処理をする関数を作成。名前は各処理に合わせた名前。
  echo $a + $b;
}

function diff ($a,$b){
  echo $a - $b;
}

function pro ($a,$b){
  echo $a * $b;
}

function quo ($a,$b){
  echo $a / $b;
}

function sur ($a,$b){
  echo $a % $b;
}

//(2)
function sansyo_sum (&$a,&$b){       //引数に & を付けて参照渡しにする。
  echo $a + $b;                     //参照渡し用の関数名をつける。
}

function sansyo_diff (&$a,&$b){
  echo $a - $b;
}

function sansyo_pro(&$a,&$b){
  echo $a * $b;
}

function sansyo_quo (&$a,&$b){
  echo $a / $b;
}

function sansyo_sur (&$a,&$b){
  echo $a % $b;
}

?>

</body>
</html>