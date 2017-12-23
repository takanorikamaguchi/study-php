<?php

$hh = 'next'.'<br>';
$hh = "コモド";
$jjj = $hh ;

if($hh == 'コモド'){
echo $jjj;
$hh = "OK just do it!";
}
echo $hh;

$mes = "0";

echo $mes > 9 ? $mes : 'から';

$x = "いつもここから";

$x === 0 ? -1 : $flag = $x;

echo $flag;

//echo true ? 0 : (false ? 'いいよ': 'NG');
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

