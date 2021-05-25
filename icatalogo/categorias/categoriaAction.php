<?php
session_start();
require("../database/conexao.php");

function validaCampos()
{
    $erros = [];

    if (!isset($_POST["descricao"]) || $_POST["descricao"] == "") {
        $erros[] = "O campo descrição é obrigatório!";
    }
    return $erros;
}

switch ($_POST["action"]) {
    case "salvar":

        $erros = validaCampos();

        if (count($erros) > 0) {
            $_SESSION["erros"] = $erros;
            header("location: index.php");

            exit();
        }

        $descricao = $_POST["descricao"];

        $sqlInsert = "insert into tbl_categoria (descricao) values ('$descricao')";

        $resultado = mysqli_query($conexao, $sqlInsert) or die(mysqli_error($conexao));

        if ($resultado) {
            $_SESSION["mensagem"] = "Categoria adicionada com sucesso!";
        } else {
            $_SESSION["mensagem"] = "Erro ao adicionar categoria!";
        }

        header("location: index.php");

        break;

    case "deletar":
        if (isset($_REQUEST["idDescricao"]) && $_REQUEST["idDescricao"] != "") {

            $idDescricao = $_REQUEST["idDescricao"];

            $sqlDelete = "delete from tbl_categoria where id = $idDescricao";

            $resultado = mysqli_query($conexao, $sqlDelete) or die(mysqli_error($conexao));;

            $_SESSION["mensagem"] = "Categoria deletada com sucesso!";

            header("location: index.php");
        } else {
            echo "eerro";
        }

        break;

    default:
        # code...
        break;
}
