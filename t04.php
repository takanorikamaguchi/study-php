<?php
function gip(array $array, callable $func){
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}
function slow($value, $key){
  echo "{$key}".":"."{$value}<br />";
}
$date = [500,300,9003,989];
$re = 0;
gip($date, function(float $value, int $key)use(&$re){
  $re += $value;
});
echo $re;




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
