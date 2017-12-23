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

$str = ['僕が読んだ本は実装したらJavaScriptがこわれた','あの日見た本がまだ戻らない'];
$src = ['本','ら'];
$rep = ['誓書','こだわり'];

print_r(str_replace($src,$rep,$str,$cnt))."<br>";
echo "{$cnt}個";
