<?php

function factorial(int $num): int {
  if ($num !== 0 ){ return $num * factorial($num - 1); }
  return 1;
}
echo factorial(3);

function getTriangleArea(float $base, float $height):float{
$jjj =<<<EOF
八百屋さんに買物へ行きました。
{$base}円払っていくら渡したでしょうか?
{$height}円!!!
EOF;
  return $base * $height.$jjj;
}

$mmm = 'getTriangleArea';
$next = $mmm(400,6000);
echo $next;

function gip(array $array, callable $func){
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}
function slow($value, $key){
  echo "{$key}".":"."{$value}<br />";
}
$date = ['Yokosuka', '適度','次作','ゴースト'];
gip($date, 'slow');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<section>
<?php for ($i = 0; $i < 5 ; $i++) { ?>
<p>これからが本題だ</p>
<?php } ?>
</section>
</body>
</html>
