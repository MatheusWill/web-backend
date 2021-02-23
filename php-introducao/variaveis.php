<?php
    // Declarar uma variavel, usa o $
    $nome = "Matheus Willian de Oliveira";

    
    $ano_nascimento = 1996;
    // date() Usado para pegar a data atual de hoje, usando o "Y" para pegar o ano
    $ano_atual = date("Y");
    $idade = $ano_atual - $ano_nascimento;

    echo "Olá <b>$nome</b> você nasceu em <b>$ano_nascimento</b>, está com <b>$idade</b> anos.<br>";
    echo "Hoje é ". date("d/m/Y"); 