<?php

//receber o id tarefa a ser editada

//select no banco da tarefa a ser editada

//SELECT * FROM tbl_task WHERE id = $tarefaId;

//executar a consulta (mysql_query)

//extrair a linha da consulta (mysql_fetch_array)

//colocar dentro do value do input a descrição da tarefa retornada do banco de dados

include("./database/conexao.php");

$tarefaId = $_GET["tarefaId"];

$query = "select * from tbl_tasks WHERE id = $tarefaId";

$tarefa = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

$linha = mysqli_fetch_array($tarefa);

if (!$linha) {
    die("Imposivel editar, tarefa não encontrada");
}

// $mensagem = "Tarefa editada";

// header("location: index.php?mensagem=$mensagem");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />

</head>

<body>

    <div class="content">
        <h1>Editar de Tarefas</h1>
        <form method="POST" action="taskActions.php">
            <input type="hidden" name="acao" value="editar" />
            <input type="hidden" name="tarefaId" value="<?= $linha["id"] ?>" />
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" value="<?= $linha["descricao"] ?>" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Editar</button>
        </form>

    </div>

</body>

</html>