<?php

$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];
$data[] = "GOG";

$file = @fopen('access.log', 'ab') or die( 'ファイル無理。');
fwrite($file, LOCK_EX);

fwrite($file, implode("\t", $data) . "\n");

flock($file, LOCK_UN);

fclose($file);

echo "<h2>完了</h2>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP study</title>
</head>
<body>
<h1>PHP study</h1>
<p><?php echo $toto['コマ']; ?></p>

<?php for ($i = 0; $i < 5 ; $i++) { ?>
<p>これからが本題だ</p>
<?php } ?>

</body>
</html>
