<?php

// function soma (array $vetorInteiros){
//     $soma = 0;
//     for ($i=0; $i < count($vetorInteiros); $i++) { 
//         $soma = $soma + $vetorInteiros[$i];
//     }
//     return $soma;
// }
// $soma = soma([2, 2, 30, 4]);
// echo "<h2>Resultado soma dos elementos: $soma</h2>";

//Função que retorna a soma dos elementos
function somarElementos (array $elementos){
    return array_sum($elementos);
}
$elementosSomados = somarElementos([1, 2, 5, 3, 5]);

 echo "<h2>Resultado soma dos elementos: $elementosSomados</h2>";

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

//Função para inverter a ordem do vetor
function inverter (array $arrayInverso){

    foreach(array_reverse($arrayInverso) as $i => $arrayInverso){
        
        echo "<b>$arrayInverso </b>";
     
    }

}

inverter(["Olá", 1, 2, "Trinta"]);

//Função de deletar valor
function deletarValor (array $deletarVetor, $valorDeletar){

    foreach($deletarVetor as $i){

        if($i == $valorDeletar){
            unset($deletarVetor[$valorDeletar]);
            print_r($i);
            // echo "<b>$i</b>";
        } else {
            $y = "False";
        }
    }
    
    print_r($deletarVetor);
    echo $y;
}

deletarValor([5, 10, 15, 20], 10);