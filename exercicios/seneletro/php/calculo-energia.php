<?php

    include("../../funcoes.php");

    if (!isset($_GET["nome"]) 
    || !isset($_GET["endereco"]) 
    || !isset($_GET["numero"]) 
    || !isset($_GET["consumo"])){

        header("location: index.php");
    }

    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $numero = $_GET["numero"];
    $consumo = $_GET["consumo"];

    $consumoEnergia = calculoEnergia($consumo);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Calculo de consumo de energia</title>
</head>
<body>
    <?php
        echo "<h1>Conta de luz de <em>$nome</em></h1>";
        echo "<h2>$endereco, n.º $numero</h2>";
        echo "<h2>$consumoEnergia</h2>"
    ?>
</body>
</html>