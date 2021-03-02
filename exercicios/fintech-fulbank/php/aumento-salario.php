<?php

    if (!isset($_GET["nome"]) || !isset($_GET["salario"])){ 

        header("location: index.php");

    }

    $nome = $_GET["nome"];
    $salario = $_GET["salario"];

    if ($salario > 5000) {
        $salario += ($salario * 0.1);
    } else {
        $salario += ($salario * 0.2);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles-global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Salário Fintech Fulbank</title>
</head>

<body>
    <?php
        echo "<h1>O $nome passará a receber <em>R$$salario</em></h1>";
    ?>
</body>

</html>