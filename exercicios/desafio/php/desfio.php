<?php

    include("../../funcoes.php");

    $somaArrays = somaArrays($_POST);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Soma dos valores</title>
</head>
<body>
    <?php
        echo "<h1>A soma é: $somaArrays</h1>";
    ?>
</body>
</html>