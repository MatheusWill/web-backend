<?php

    include("../../funcoes.php");
    
    if (!isset($_GET["real"]) && (!isset($_GET["dolar"]) || !isset($_GET["euro"]))){

        header("location: index.php");
        
    }

    $real = $_GET["real"];
    $valorconvertido = conversaoMoeda($real);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles-global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>$valorconvertido</h1>";
    ?>
</body>
</html>