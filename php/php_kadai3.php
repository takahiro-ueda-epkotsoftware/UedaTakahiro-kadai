<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP課題</title>
</head>
<body>

<?php

#(1)
$number = rand(1,100);          #1~100をランダムで表示。

if($number > 70){           #ランダムの数字が70以上だったら'1等'。
    echo '1等';
}
elseif($number >=30 && $number <=69){   #ランダムの数字が30以上,69以下だったら'2等'。
    echo '2等';
}
else{
    echo'3等';          #それ以外だったら'3等'。
}

#(2)
$number = rand (1,2);

echo $number===1 ? '当たり' : 'ハズレ';     #1が出たら'当たり'、2が出たら'ハズレ'を表示。

#(3)
$int = rand(1,4);

switch($int){
    case'1':
            echo'A賞';
            break;

    case'2':
            echo'B賞';
            break;

    case'3':
            echo'C賞';
            break;
 
   case'4':
            echo'D賞';
            break;
}

#(4)
$int = rand(1,4);

#breakを抜いた処理の予測:caseがランダムに複数実行される。
//break文で処理が止まらない。下の行の他のcaseの処理も実行される。

switch($int){
    case'1':
            echo'A賞';

    case'2':
            echo'B賞';

    case'3':
            echo'C賞';
 
   case'4':
            echo'D賞';
}

#(5)
$int = rand(1,6);

switch($int){
    case'1':
            echo'A賞';
            break;

    case'2':
            echo'B賞';
            break;

    case'3':
            echo'C賞';
            break;
 
   case'4':
            echo'D賞';
            break;
    default:                    #defaultでcase1~case4以外の場合エラーを表示。
            echo 'エラー';
            break;
}

#(6)
$int = rand(1,4);

switch($int):           # { を : に変更。
    case'1':
            echo'A賞';
            break;

    case'2':
            echo'B賞';
            break;

    case'3':
            echo'C賞';
            break;
 
   case'4':
            echo'D賞';
            break;
endswitch;              # } を endswitch に変更。

#(7)        //修正済み。
$a = 1;

while($a <= 10){
    echo $a.'回目のループです。';
    echo'<br/>';
    $a++;
}

#(8)        //修正済み。
$a = 1;

do{
    echo $a.'回目のループです。';
    echo '<br/>';
    $a++;
}
while ($a <= 10);        #whileの条件を満たすまで、doで処理。

#(9)
for ($counter = -3; $counter < 10; $counter++) {
  if($counter == 0){        //もし$counterが0になったらbreak処理。
  break;
  }
  echo 100 / $counter;
  echo '<br/>';
}
echo '<br/>';

#(10)
for ($counter = -3; $counter < 10; $counter++) {
  if($counter == 0){
  continue;     //continueで$counterが0の時だけスキップ。
  }
  echo 100 / $counter;
  echo '<br/>';
}

?>

</body>
</html>