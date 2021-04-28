<?php

include("./database/conexao.php");

switch ($_POST["acao"]) {
    case "inserir":
        if (isset($_POST["tarefa"]) && $_POST["tarefa"] != "") {
            $teste = $_POST["tarefa"];

            $sqlInsert = "insert tbl_tasks (descricao) values ('" . $teste . "')";

            $resultado = mysqli_query($conexao, $sqlInsert);

            if ($resultado == false) {

                $mensagem = "Erro ao criar a tarefa";
                $tipoMensagem = "erro";
            } else {

                $mensagem = "Tarefa criada com sucesso";
                $tipoMensagem = "sucesso";
            }
        }
        break;

    case "deletar":
        if (isset($_POST["tarefaId"]) && $_POST["tarefaId"] != "") {
            $tarefaId = $_POST["tarefaId"];

            $sqlDelete = "DELETE FROM tbl_tasks WHERE id = $tarefaId";

            $resultado = mysqli_query($conexao, $sqlDelete) or die(mysqli_error($conexao));

            if ($resultado == false) {

                $mensagem = "Erro ao deletar a tarefa";
                $tipoMensagem = "erro";
            } else {

                $mensagem = "Tarefa deletada com sucesso";
                $tipoMensagem = "sucesso";
            }
        }
        break;

    case "editar":
        if (isset($_POST["tarefa"]) && isset($_POST["tarefaId"])) {
            $tarefa = $_POST["tarefa"];
            $tarefaId = $_POST["tarefaId"];

            $sqlUpdate = "UPDATE tbl_tasks SET descricao = '$tarefa' WHERE id = '$tarefaId'";

            $resultado = mysqli_query($conexao, $sqlUpdate);

            if ($resultado) {

                $mensagem = "Tarefa editada com sucesso";
                $tipoMensagem = "sucesso";
            } else {

                $mensagem = "Erro ao editar tarefa!";
                $tipoMensagem = "erro";
            }
        }

        break;

    default:
        die("Ação invalida!!");
        break;
}

header("location: index.php?mensagem=$mensagem&tipoMensagem=$tipoMensagem");
