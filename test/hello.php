<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hello</title>
</head>
<body>
<!-- 以下はPHPで出力 -->
<?php
/* ここから
複数行用のコメント
ここまで*/

$kosuu = 10;
echo 'みかんが' . $kosuu . '個あります。<br>';

echo "みかんが{$kosuu}個あります。<br>"; // phpでHelloを表示
echo 'みかんが{$kosuu}個あります。<br>'; // phpでHelloを表示

$number = 10;
echo $number;
echo '<br>';
$number = 20;
echo $number;
echo '<br>';

$food = array('りんご', 'みかん', 'なし');
echo $food[0];
echo '<br>';
echo $food[2];
echo '<br>';
var_dump($food);
echo '<br>';
$food = array(
        'apple' => 'りんご',
        'orange' => 'みかん',
        'pear' => 'なし',
      );
echo $food['apple'];
echo '<br>';
echo $food['orange'];
echo '<br>';
var_dump($food);
?>
<!-- 以上はPHPで出力 -->
</body>
</html>