<?php

require("../database/conexao.php");

switch ($_POST['action']) {
    case "salvar":

        if ($conexao == false) {
            die("ERRO AO CONECTAR" . mysqli_connect_error());
        }

        $descricao = $_POST["descricao"];

        $sqlInsert = "insert into tbl_categoria (descricao) values ('$descricao')";

        $resultado = mysqli_query($conexao, $sqlInsert) or die(mysqli_error($conexao));

        header("location: index.php");

        break;

    case "deletar":
        if (isset($_REQUEST["idDescricao"]) && $_REQUEST["idDescricao"] != "") {

        $idDescricao = $_REQUEST["idDescricao"];

        $sqlDelete = "delete from tbl_categoria where id = $idDescricao";

        $resultado = mysqli_query($conexao, $sqlDelete) or die(mysqli_error($conexao));;

        header("location: index.php");
        } else {
            echo "eerro";
        }

        break;

    default:
        # code...
        break;
}
