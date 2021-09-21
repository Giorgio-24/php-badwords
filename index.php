<?php 
$word = strtoupper($_GET["word"]); 
$sator_square = 'SATOR AREPO TENET OPERA ROTAS';

$sator_square = str_replace($word, '***', $sator_square);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>


    <h1><?php echo $sator_square ?></h1>
</body>
</html>