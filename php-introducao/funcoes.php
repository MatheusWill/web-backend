<?php

    //Declarando funções com PHP
    function exibirMensagem(){
        $mensagem = "Ola mundo das funções";

        echo $mensagem;
    }

    // Invocando a função
    exibirMensagem();

    echo "<br><br>";

    //passar paramentros
    function somar ($a, $b){
        echo $a + $b;
    }

    somar(100, 50);

    echo "<br><br>";

    somar(40, 35);

    echo "<br><br>";

    //retornado valores de uma função
    function nomeFormatado($nome, $sobrenome){
        $nomeFormatado = $nome . " " . $sobrenome;

        return $nomeFormatado;
    }
    $nome = nomeFormatado("Matheus", "Willian");

    echo $nome;

    echo "<br><br>";

    //argumentos opcionais, devendo sempre ficar por ultimo
    function fomartarData(int $dia, $mes, $ano = 1996){
        $dataFormatada = $dia . "/" . $mes . "/" . $ano;

        return $dataFormatada;
    }

    echo fomartarData(15, 02);

    //passando vetores para funções
    function mostrarNomes(array $nomes){
        foreach($nomes as $nome){
            echo $nome . "<br>";
        }
    }

    echo "<br><br>";

    mostrarNomes(["Matheus", "Vitoria", "Seni"]);