<?php

$now = new DateTime();
$now->setTimestamp(time());
print $now->format('Y/m/d') ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP study</title>
</head>
<body>
<p>pushの内容その2</p>
<h1>PHP study</h1>
<p><?php echo $toto['コマ']; ?></p>

<?php for ($i = 0; $i < 5 ; $i++) { ?>
<p>これからが本題だ</p>
<?php } ?>

</body>
</html>
