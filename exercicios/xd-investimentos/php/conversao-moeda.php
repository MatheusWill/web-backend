<?php
    
    if (!isset($_GET["real"]) && (!isset($_GET["dolar"]) || !isset($_GET["euro"]))){

        header("location: index.php");
        
    }

    $real = $_GET["real"];
    $dolar = 5.41;
    $euro = 6.57;
    $realConvertidoDolar = $real * $dolar;
    $realConvertidoEuro = $real * $euro;

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
        if (isset($_GET["dolar"]) && isset($_GET["euro"])) { 
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        } else if (isset($_GET["euro"])){ 
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        } else { 
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
        }
    ?>
</body>
</html>