<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

#(1)
$number1 = 2 + 4 - 5;			#予測:1
$number2 = 4 - 5 + 2;			#予測:1
$number3 = 4 * 5 / 2;			#予測:10
$number4 = 5 / 2 * 4;			#予測:10

print $number1;			#値が1になる
print'<br/>';
print $number2;			#値が1になる
print'<br/>';

print $number3;			#値が10になる
print'<br/>';
print $number4;			#値が10になる
echo '<br/>';

#(2)
$number1 = 2 * 3 + 4 + 1;			#予測:11
$number2 = 2 * (3 + 4 + 1);			#予測:16

print$number1;			#値が11
print'<br/>';
print$number2;			#値が16
echo '<br/>';

#(3)
if ($username == "Admin") {
  echo ("Welcome to the admin page.");
} else {
  echo ("Welcome to the user page.");
}		

#true。$username="Admin"; を足す。
#false。$usernameを他の値に置き換える。

#(4)
$a = array('japan','usa','china');

foreach ($a as $b){
  print $b.'<br/>';
}

#(5)
$a = array('japan','usa','china');

sort($a);

foreach ($a as $b){
    print $b.'<br/>';           #china,japan,usaの順で表示。
}

#(6)		//修正済み。

$number = array (
  array (1,2,3),
  array (4,5,6),
  array (7,8,9)
);
echo'<br/>';

foreach ($number as $key1 => $val1) {		//foreach文
	foreach ($val1 as $key2 => $val2) {
		echo $key1 . $key2 . $val2 . '<br/>';
	}
}
echo '<br/>';

$key1 = 0;
$key2 = 0;
while ($key < $number) {		//while文
	while ($key2 < count ($number[$key1])) {
	echo ($key1 . $key2 . $number[$key1][$key2] . "<br/>");
	$key2++;
	}
	$key1++;
	$key2 = 0;
}

?>

</body>
</html>