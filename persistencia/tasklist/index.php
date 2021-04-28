<?php

/**
 * CRUD
 * 
 * C = CREATE - (INSERÇÃO)
 * R = READ (LISTAGEM)
 * U = UPDATE (ATUALIZAÇÃO)
 * D = DELETE (EXCLUSÃO, DELEÇÃO)
 *  
 */

include("./database/conexao.php");

$query = "select * from tbl_tasks";

$tarefa = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
    <script>
        setTimeout(() => {
            document.querySelector(".mensagem").style.display = "none";
        }, 4000);
    </script>
</head>

<body>

    <div class="content">
        <?php
        if (isset($_GET["mensagem"])) {

        ?>
            <div class="mensagem" 
            
                <?= $_GET["tipoMensagem"] == "sucesso" 
                ? "style='background-color: #006600;'" : ""?>
                >

                <?= $_GET["mensagem"] ?>
            </div>
        <?php
        }
        ?>
        <h1>Lista de Tarefas</h1>
        <form method="POST" action="taskActions.php">
            <input type="hidden" name="acao" value="inserir" />
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
        <hr />
        <div class="tarefas">
            <?php
            while ($linha = mysqli_fetch_array($tarefa)) {
            ?>
                <div class="tarefa">
                    <?= $linha["descricao"] ?>
                    <form action="editarTarefa.php" method="GET" id="form_editar">
                        <input type="hidden" name="tarefaId" value="<?= $linha["id"] ?>" />
                        <button>&#128393;</button>
                    </form>
                    <form action="taskActions.php" method="POST">
                        <input type="hidden" name="acao" value="deletar" />
                        <input type="hidden" name="tarefaId" value="<?= $linha["id"] ?>" />
                        <button>&#128465;</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>

<?php
mysqli_close($conexao);
?>