<?php

// Declarando um vetor PHP
$vetorDeInteiros = [1,
                    10,
                    2,
                    5,
                    50,
                    9,
                    100];

$vetorDeStrings = ["Fulano", 
                    "Ciclano",
                    "Beltrano",
                    "Jucicleison"];

// Função print_r é voltada a exibir vetores
print_r($vetorDeInteiros);

echo "<br><br>";

print_r($vetorDeStrings);

echo "<br> <br>";

// Função var_dump exibe as informações sobre uma variavel
var_dump($vetorDeInteiros);

echo "<br><br>";

var_dump($vetorDeStrings);

echo "<br><br>";

echo $vetorDeStrings[3] . ", " . $vetorDeStrings[0];

echo "<br><br>";

$vetorComChavesDefinidas = [
    "nome" => "Fulano",
    "idade" => 32,
    "sexo" => "M",
    "renda" => 2550.50,
    "estaTrabalhando" => true,
    10 => "alguma coisa",
    "endereco" => [
        "rua" => "AV tal",
        "numero" => 34,
        "bairro" => "Centro"
    ]
];

print_r($vetorComChavesDefinidas);

echo "<br><br>";

echo "O nome do usuario é: " . $vetorComChavesDefinidas["nome"];
echo ", e sua idade é: " . $vetorComChavesDefinidas["idade"];
echo ", ele mora na: " . $vetorComChavesDefinidas["endereco"]["rua"];
echo "<br><br>";

print_r($vetorComChavesDefinidas["endereco"]);

echo "<br><br>";

if ($vetorComChavesDefinidas["endereco"]["rua"] == "AV tal") {
    echo "SIM";
}

echo "<br><br>";

echo count($vetorComChavesDefinidas);

echo "<br><br>";

// Como percorrer vetores, utilizando laços de repetição

// Somar os valor do vetor de inteiros com o for

$soma = 0;
for ($i=0; $i < count($vetorDeInteiros); $i++) { 
    echo $vetorDeInteiros[$i] . " - ";
    $soma = array_sum($vetorDeInteiros);
}

echo "<br><br>";

echo $soma;

echo "<br><br>";

$soma = 0;
$i = 0;
while($i < count($vetorDeInteiros)){
    $soma = $soma + $vetorDeInteiros[$i];
    $i ++;
}
echo $soma;

echo "<br><br>";

foreach ($vetorDeStrings as $nome) {
 //   if ($nome == "Ciclano")  echo "Encontrado";
    echo $nome == "Ciclano" ? "encontrado - " : "Não existe - ";
}