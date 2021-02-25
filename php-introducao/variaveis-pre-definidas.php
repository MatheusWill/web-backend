<?php
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $ano_nascimento = date("Y") - $idade;

    if (!isset($_GET["fez-aniversario"])) {
        $ano_nascimento = $ano_nascimento - 1;
    }

    echo "Olá, $nome, você nasceu em $ano_nascimento<br>";
    if($idade > 60){
        echo "Você é do grupo de risco, CUIDADO!!";
    } else {
        echo "Você não pertence ao grupo de risco";
    }
