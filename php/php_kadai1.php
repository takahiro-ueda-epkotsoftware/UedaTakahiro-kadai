<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

#(1)
if (strcasecmp ('php', 'PHP') == 0 ){
	print'同じ文字列';
}
echo '<br/>';

#(2)
$renketsu1 = '来年は';
$renketsu2 = '2022年';
$renketsu3 = 'です。';
$renketsu4 = $renketsu1.$renketsu2.$renketsu3;

print $renketsu4;
echo '<br/>';

#(3)
$number = '100';
$price = '円です。';

print $number.$price;
echo '<br/>';

#(4)
define("DEF","あいうえお");
print DEF;
print'<br/>';

const CON = 'かきくけこ';		//修正済み。
echo CON;
echo '<br/>';

#(5)
print __LINE__;		#行番号を表示
print'行目';
print'<br/>';

print'ファイル名:';
print __FILE__;		#ファイル名を表示
echo '<br/>';

#(6)
$number = 300;

print$number / 365;
echo '<br/>';

#(7)
$number = 100;
print $number++;
print'<br/>';
print $number;
echo '<br/>';

#(8)
$number = 100;
print $number--;
print'<br/>';
print $number;
echo '<br/>';

#(9)		//修正済み。
$number = 100;
echo $number++.'<br/>';
echo $number.'<br/>';
echo ++$number.'<br/>';

#(10)
$a = 3;
$b = 2;
$total = $a + $b;

echo $total;      #5と表示。
echo '<br/>';

#(11)
$suuchi = 1234;
var_dump($suuchi);				#数値1234が表示。
print '<br/>';

$mojiretsu = (string) $suuchi;
var_dump($mojiretsu);			#文字列1234が表示。
echo '<br/>';

#(12)
$locations = 3;
$c = $locations + 2;

print $c;

?>

</body>
</html>