<?php
$angka = [3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
 div {
 width: 50px;
 height: 50px;
 background-color: salmon;
 text-align: center;
 line-height: 50px;
 margin: 3px;
 float: left;

 }
</style>
<body>

<?php for ($i = 0; $i < 7; $i++) { ?>
 <div><?php echo $angka [$i]; ?></div>
<?php } ?>

</head>
</body>
</html>