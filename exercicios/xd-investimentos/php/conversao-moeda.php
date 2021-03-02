<?php
    
    if (!isset($_GET["real"])) {
        header("location: index.php");
        $_POST['dolar'] = ( isset($_POST["dolar"]) ) ? true : null;
        $_POST['euro']  = ( isset($_POST["euro"]) )  ? true : null;
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
        if (isset($_GET["dolar"])) { 
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
        } else if (isset($_GET["euro"])){ 
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        } else if (isset($_GET["euro"]) && isset($_GET["dolar"])){
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        }
    ?>
</body>
</html>