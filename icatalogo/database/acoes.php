<?php

//validação vou fazer daqui a pouco
function validarCampos()
{

    $erros = [];

    //validar se campo descricao está preenchido
    if (!isset($_POST["descricao"]) && $_POST["descricao"] == "") {
        $erros[] = "O campo descrição é obrigatório";
    }

    //validar se o campo peso está preenchido
    if (!isset($_POST["peso"]) && $_POST["peso"] == "") {
        $erros[] = "O campo peso é obrigatório";
        //validar se o campo peso é um número
    } elseif (!is_numeric(str_replace(",", ".", $_POST["peso"]))) {
        $erros[] = "O campo erro deve ser um número";
    }

    return $erros;
}

require("../database/conexao.php");

$erros = validarCampos();

if (count($erros) > 0) {
    

    header("location: novo/index.php?erros=$erros");
}

$descricao = $_POST["descricao"];
$peso = $_POST["peso"];

$sqlInsert = " INSERT INTO tbl_produto (descricao, peso) VALUES ($descricao, $peso) ";

$resultado = mysqli_query($conexao, $sqlInsert) or die(mysqli_error($conexao));

if ($resultado) {
    $mensagem = "Produto inserido com sucesso!";
} else {
    $mensagem = "Erro ao inserir o produto!";
}

header("location: index.php");
