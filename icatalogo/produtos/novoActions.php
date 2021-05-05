<?php

session_start();
include("../database/conexao.php");
include("./funcionNovo.php");

switch ($_POST["acao"]) {
    case "salvar":

        if ($conexao === false) {
            die("ERRO AO CONECTAR" . mysqli_connect_error());
        }

        //faltou chamar a função aqui
        $erros = validarCampos();

        //aqui tem que verificar se tem erros e colocar na sessão
        if(count($erros) > 0){
            $_SESSION["erros"] = $erros;

            header("location: novo/index.php");
        }

        $descricao = $_POST["descricao"];
        $peso = str_replace(",", ".", $_POST["peso"]);
        $quantidade = $_POST["quantidade"];
        $cor = $_POST["cor"];
        $tamanho = $_POST["tamanho"];
        $valor = str_replace(",", ".", $_POST["valor"]);
        $desconto = $_POST["desconto"] != "" ? $_POST["desconto"] : 0;
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

                echo $sqlInsert;

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

        break;
}
