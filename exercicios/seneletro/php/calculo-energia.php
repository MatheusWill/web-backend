<?php

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
        if ($consumo > 120) {
            $valorPagar = $consumo * 0.42;
            $valorPagar = number_format ($valorPagar, 2, ",", ".");
            echo "<h2>Consumo: <spam style='color: red;'>$consumo kWh</spam></h2>";
            echo "<h2>Valor a pagar: <em>$valorPagar reais</em></h2>";
        } else {
            $valorPagar = $consumo * 0.32;
            $valorPagar = number_format ($valorPagar, 2, ",", ".");
            echo "<h2>Consumo: <spam style='color: blue;'>$consumo kWh</spam></h2>";
            echo "<h2>Valor a pagar: <em>$valorPagar reais</em></h2>";
            echo "<h1>Obrigado por economizar!</h1>";
        }
    ?>
</body>
</html>