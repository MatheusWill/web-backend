<?php

    if (!isset($_POST["num01"]) || !isset($_POST["num02"]) && (!isset($_POST["operac"])) ) {
       
        header("location: index.php");
    }

    $num01 = filter_input(INPUT_POST,'num01');
    $num02 = filter_input(INPUT_POST,'num02');
    $operac = filter_input(INPUT_POST,'operac');
    $resul = null;

    if ($num01 && $num02) {
        
        switch ($operac) {
            case '+': $resul = $num01 + $num02; break;
            case '-': $resul = $num01 - $num02; break;
            case '/': $resul = $num01 / $num02; break;
            case '*': $resul = $num01 * $num02; break;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>

<body>
    <form method="POST" action="./index.php">
        <h1>Calculadora PHP</h1>

        <div class="input-group">
            <label for="num01">Numero 1:</label>
            <input type="number" name="num01" id="num01" step="0.01" required>

            <label for="num02">Numero 2:</label>
            <input type="number" name="num02" id="num02" step="0.01" required>
        </div>
        
        <div id="operacoes">   
            <label for="soma" class="container">Soma
                <input type="radio" name="operac" id="soma" value="+">
                <span class="checkmark"></span>
            </label>

            <label for="sub" class="container">Subtração
                <input type="radio" name="operac" id="sub" value="-">
                <span class="checkmark"></span>
            </label>

            <label for="multi" class="container">Multiplicação
                <input type="radio" name="operac" id="multi" value="*">
                <span class="checkmark"></span>
            </label>

            <label for="div" class="container">Divisão
                <input type="radio" name="operac" id="div" value="/">
                <span class="checkmark"></span>
            </label>
        </div>

        <div class="resultado">
            <h1>RESULTADO: <em id="resultado"><?=$resul?></em></h1>
        </div>

        <div class="btn">
            <button>Calcular</button>
            <button type="reset" onclick="myFunction()">Limpar</button>
        </div> 
    </form>
</body>
<script>
    function myFunction() {
        document.getElementById("resultado").innerHTML = "";
    }
</script>
</html>
