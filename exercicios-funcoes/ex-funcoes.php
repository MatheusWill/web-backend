<?php

//Função que retorna a soma dos elementos
function somaElementos(int $a, int $b){
    return $a + $b;
}
$somaElementos = somaElementos(5, 11);
echo "<h2>Resultado soma dos elementos A e B: $somaElementos</h2>";

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