<?php
function display_wordpress(){
  echo 'WordPress';
}

//引数の2つの数値を足して返す

function add($n1, $n2){
    $answer = $n1 + $n2;
    return $answer;
}

display_wordpress();

echo "<br />\n";

$num = add(4, 5);
echo $num;

echo "<br />\n";

echo add(3, 4);