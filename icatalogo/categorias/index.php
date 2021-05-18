<?php
// if (!isset($_SESSION["id"])) {

//     $_SESSION["mensagem"] = "Você precisa fazer login!";

//     header("location: ../produtos/index.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./categorias.css" />
    <title>Administrar Categorias</title>
</head>

<body>
    <?php
    include("../componentes/header/header.php");
    include("./categoriaAction.php");

    $query = "select * from tbl_categoria";

    $resultado = mysqli_query($conexao, $query);

    // $itemDescricao = mysqli_fetch_array($resultado);



    ?>
    <div class="content">
        <section class="categorias-container">
            <main>
                <form class="form-categoria" method="POST" action="./categoriaAction.php">
                    <h1 class="span2">Adicionar Categorias</h1>
                    <div class="input-group span2">
                        <input type="hidden" name="action" value="salvar">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" />
                    </div>
                    <button name="salvar">Salvar</button>
                    <button>Cancelar</button>
                </form>
                <h1>Lista de Categorias</h1>
                <?php
                while ($itemDescricao = mysqli_fetch_array($resultado)) {
                ?>
                    <div class="card-categorias">
                        <?= $itemDescricao["descricao"] ?>
                        <form action="./categoriaAction.php" method="POST" id="form-button-deletar">
                            <input type="hidden" name="action" value="deletar" />
                            <input type="hidden" name="idDescricao" value="<?= $itemDescricao["id"] ?>" />
                            <button>
                                <img src="https://icons.veryicon.com/png/o/construction-tools/coca-design/delete-189.png" />
                            </button>
                        </form>
                    </div>
                <?php
                }
                ?>
            </main>
        </section>
    </div>
</body>

</html>