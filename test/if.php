<?php
/*
$flg = false;
if($flg){
    echo '$flgは true です。';
}else {
    echo '$flgは false です。';
}

echo "<br />\n";

$num = 10;
if($num > 10){
    echo '$numは 10より大きいです。';
} else {
    echo '$numは 10以下です。';
}

echo "<br />\n";

$num = 12;
if($num > 5 && $num < 10){
  echo '$num が 5より大きく、 10より小さいです。';
} else {
  echo '$num は 5より大きく、 10より小さい範囲外の値です。';
}

$name = '吉野';
if($name == '山田'){
    echo '$nameは「山田」です。';
}elseif($name == '佐藤'){
    echo '$nameは「佐藤」です。';
}elseif($name == '田中'){
    echo '$nameは「田中」です。';
}else{
  echo '$nameはどれにも当てはまりませんでした。';
}
*/
$name = '田中';
if($name == '山田'):
?>
$nameは「山田」です。
<?php elseif($name == '佐藤'): ?>
$nameは「佐藤」です。
<?php elseif($name == '田中'): ?>
$nameは「田中」です。
<?php else: ?>
$nameはどれにも当てはまりませんでした。
<?php endif; ?>