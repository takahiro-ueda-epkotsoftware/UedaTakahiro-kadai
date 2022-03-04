<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

//(1)
include 'php_kadai5_function.php';      //includeで関数を呼び出し。

echo sum (10,5).'<br/>';        //各計算処理を実行。
echo diff (10,5).'<br/>';
echo pro (10,5).'<br/>';
echo quo (10,5).'<br/>';
echo sur (10,5).'<br/>';

//(2)
//includeは一度でOK。
$a = 10;                //変数に任意の値を代入。
$b = 5;

echo $a = sansyo_sum ($a,$b).'<br/>';     //第一引数に$a、第二引数に$bを置いて呼び出し。
echo $a = sansyo_diff ($a,$b).'<br/>';
echo $a = sansyo_pro ($a,$b).'<br/>';
echo $a = sansyo_quo ($a,$b).'<br/>';
echo $a = sansyo_sur ($a,$b);

?>

</body>
</html>