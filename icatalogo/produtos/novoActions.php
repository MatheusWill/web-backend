<?php

include("../database/conexao.php");

switch ($_POST["acao"]) {
    case "salvar":

        if ($conexao === false) {
            die("ERRO AO CONECTAR" . mysqli_connect_error());
        }

        $descricao = $_POST["descricao"];
        $peso = $_POST["peso"];
        $quantidade = $_POST["quantidade"];
        $cor = $_POST["cor"];
        $tamanho = $_POST["tamanho"];
        $valor = $_POST["valor"];
        $desconto = $_POST["desconto"];
        $imagem = "1";

        $sqlInsert = "insert into tbl_produto (
            descricao,
            peso,
            quantidade,
            cor,
            tamanho,
            valor,
            desconto,
            imagem )
            values (
                '$descricao',
                $peso,
                $quantidade,
                '$cor',
                '$tamanho',
                $valor,
                $desconto,
                $imagem )";

        $resultado = mysqli_query($conexao, $sqlInsert) or die(mysqli_error($conexao));

        // if (mysqli_query($conexao, $sqlInsert)) {
        //     echo "Sucesso.";
        // } else {
        //     echo "ERRO" . mysqli_error($conexao);
        // }

        header("location: index.php");

        break;

    case "cancelar":

        break;

    default:
        # code...
        break;
}
