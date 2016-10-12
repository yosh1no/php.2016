<?php
$food = array(
    'りんご',
    'みかん',
    'なし'
);
echo '<ul>';
/*
foreach($food as $value) {
  echo "<li>{$value}</li>";
}

$i = 0;
while($i < count($food)){
    $value = $food[$i];
    echo "<li>{$value}</li>";
    $i++;
}
*/
$food = array(
              'apple' => 'りんご',
              'orange' => 'みかん',
              'pear' => 'なし',
        );
/*
foreach ($food as $key => $value) {
  echo "<li>{$key}は、 「{$value}」です。</li>";
}
*/
  echo '<li>' . implode('</li><li>', $food) . '</li>';
echo '</ul>';

