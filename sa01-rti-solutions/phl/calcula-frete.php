<?php
    
    if (!isset($_GET["origem"]) 
        || !isset($_GET["destino"]) 
        || !isset($_GET["distancia"]) 
        || !isset($_GET["pedagios"])){
        
            header("location: index.php");
    }

    $origem = $_GET["origem"];
    $destino = $_GET["destino"];
    $distancia = $_GET["distancia"];
    $pedagios = $_GET["pedagios"];

    $custoPedagio = $pedagios * 9.4;
    $custoDistancia = $distancia * 6.0;

    $custoTotal = $custoPedagio + $custoDistancia;


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles-global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Frete PHL</title>
</head>
<body>
    <?php
        if ($custoPedagio > 100) {
            echo "<h1 style='color: red;'>Valor dos pedágios: <em>R$ $custoPedagio</em></h1>";
        } else{
            echo "<h1 style='color: green;'>Valor dos pedagios: <em>R$ $custoPedagio</em></R1></h1>";
        }
    ?>
    <h1>A viagem de <?= $origem?> à <?= $destino?> irá custar o valor de R$ <em><?=number_format($custoTotal, 2, ",", ".")?></em></h1>
</body>
</html>