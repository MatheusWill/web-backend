<?php

// $peso = $_POST["peso"];
// $quantidade = $_POST["quantidade"];
// $valor = $_POST["valor"];
// $desconto = $_POST["desconto"];

$peso = 33;
$quantidade = 2;
$valor = 22;
$desconto = 10;

function soNumeros($peso, $quantidade, $valor, $desconto)
{
    if (is_numeric($peso) && is_numeric($quantidade) && is_numeric($valor) && is_numeric($desconto)) {
        echo "SUCESSO!!";
    } else {
        echo "ERRO";
    }
}

soNumeros($peso, $quantidade, $valor, $desconto);