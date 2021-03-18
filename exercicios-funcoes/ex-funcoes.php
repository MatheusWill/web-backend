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
echo "<br><br>";

// ----------------------------------------------------------------------------

//Retornar apenas as chaves do vetor
function retorna (array $vetor){

    foreach($vetor as $key => $i){
        $chavesVertor = $key;
    }
    return $chavesVertor;
}

print_r (retorna([1, 2, 5, 6, 5, 6]));
echo "<br><br>";

// ----------------------------------------------------------------------------

//Função que retorna o maior e menor numero dentro do vetor
function maiorMenor (array $vetor){
    $maior = 0;
    $menor = $vetor;
    
    foreach($vetor as $key => $i){      
        
        if($i > $maior){
            $maior = $i;
        } 
        if ($i < $menor) {
            $menor = $i;
        }    
    }
    return $resultado = [$maior, $menor]; 
}

print_r (maiorMenor([11, 7, 59, 105, 5, 9]));

echo "<br><br>";

// ----------------------------------------------------------------------------

//Função que retorna a media de notas

function media (array $notas){

    $mediaNotas = 0;

    foreach($notas as $i){
        $mediaNotas = $mediaNotas + $i;
    }

    return $mediaNotas/count($notas);
}


print_r(media([9, 9, 7, 6]));

echo "<br><br>";

// ----------------------------------------------------------------------------

//Função para saber se um numeor é primo

function numeroPrimo($numero){
    $divisor = 0;

    for ($i=2; $i < $numero; $i++) { 
        if ($numero % $i == 0) {
            $divisor++;
        }
    }
    echo $divisor ?  "Não é primo" : "É numero primo";

    // if ($divisor) {
    //     echo "<b>Não é numero primo</b>";
    // } else {
    //     echo "<b>É numero primo</b>";
    // }
}

numeroPrimo(17);

echo "<br><br>";

// ----------------------------------------------------------------------------

function procurarValor (array $primeiroVetor, array $segundoVetor){

    foreach($segundoVetor as $i){

        foreach($primeiroVetor as $j){

            if($i == $j){
                $y = "true";
                break;
            } else if ($j != $i){
                $y = "false";
            }
        }
    }
    echo "<h2>$y</h2>";
}

procurarValor ([1, 2, 10, 56, 55, 57], [2, 55, 57, 1]);