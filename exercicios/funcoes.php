<?php

    function aumentoSalario ($salario){
        if ($salario > 5000) {
            $salario += ($salario * 0.1);
        } else {
            $salario += ($salario * 0.2);
        }
        
        return $salario;
    }

    function calculoEnergia ($consumo){
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

    }

    function conversaoMoeda ($real){

        $dolar = 5.41;
        $euro = 6.57;
        $realConvertidoDolar = $real * $dolar;
        $realConvertidoEuro = $real * $euro;

        if (isset($_GET["dolar"]) && isset($_GET["euro"])) { 
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        } else if (isset($_GET["euro"])){ 
            echo "<h1>Valor total em Euro: €$realConvertidoEuro</h1>";
        } else { 
            echo "<h1>Valor total em Dolar: $$realConvertidoDolar</h1>";
        }

    }

    function somaArrays ($teste){

        foreach($teste as $value){
            return  array_sum($_POST);
        }
    }
    