<?php

//Função que retorna a soma dos elementos

function soma (array $vetorInteiros){
    $soma = 0;
    for ($i=0; $i < count($vetorInteiros); $i++) { 
        $soma = $soma + $vetorInteiros[$i];
    }
    return $soma;
}
$soma = soma([2, 2, 30, 4]);
echo "<h2>Resultado soma dos elementos: $soma</h2>";

// function somarElementos (array $elementos){
//     return array_sum($elementos);
// }
// $elementosSomados = somarElementos([1, 2, 5, 3, 5]);

//  echo "<h2>Resultado soma dos elementos: $elementosSomados</h2>";

// ----------------------------------------------------------------------------

//Função que procura um nome e retorna true ou false
function nomes(array $nome, $nomeEspecifico){
    foreach($nome as $x){

        if($x == $nomeEspecifico){
            $y = "true";
            break;
        } else if ($x != $nomeEspecifico){
            $y = "false";
        }
    }
    echo "<h2>$y</h2>";
}

nomes(["matheus", "carla", "joão", "maria"], "joão");

// ----------------------------------------------------------------------------

//Função para inverter a ordem do vetor

function inverter(array $vetor){
    $vetorInvertido = [];

    for ($i= (count($vetor) - 1); $i >= 0; $i--) { 
        $vetorInvertido[] = $vetor[$i];
    }

    return $vetorInvertido;
}

$vetorInvertido = inverter(["Olá", 1, 2, "Trinta"]);

print_r($vetorInvertido);

// function inverter (array $arrayInverso){

//     foreach(array_reverse($arrayInverso) as $i => $arrayInverso){
        
//         echo "<b>$arrayInverso </b>";
     
//     }

// }

echo "<br><br>";

// ----------------------------------------------------------------------------

//Função de deletar valor
function deletarValor (array $deletarVetor, $valorDeletar){

    print_r($deletarVetor);
    echo "<br>";
    print_r($valorDeletar);
    echo "<br>";

    foreach($deletarVetor as $key => $i){

        if ($i == $valorDeletar) {

           unset($deletarVetor[$key]);
           
           echo "<b>O valor deletado foi: $i </b>";
           echo "<br>";

           print_r($deletarVetor);
           break;

        } else {
            echo false;     
        } 
    }
}

deletarValor([5, 10, 15, 20, "batata"], "batata");