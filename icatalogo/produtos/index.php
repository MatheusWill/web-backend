<?php

include("../database/conexao.php");

if (!isset($_GET["q"]) || $_GET["q"] == '') {
    $query = "select p.*, c.descricao as categoria from tbl_produto p
            inner join tbl_categoria c on p.categoria_id = c.id
            order by p.id desc";
} else {
    $q = $_GET["q"];
    $query = "select p.*, c.descricao as categoria from tbl_produto p
                inner join tbl_categoria c on p.categoria_id = c.id
                where p.descricao like '%$q%'
                or c.descricao like '%$q%'
                order by p.id desc";
}

$produto = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./produtos.css" />
    <title>Administrar Produtos</title>
</head>

<body>
    <?php
    include("../componentes/header/header.php");
    ?>
    <div class="content">
        <!-- <div style="position: absolute; top: 0; right: 0;">
            <?php
            if (isset($_SESSION["erros"])) {
                echo $_SESSION["erros"][0];
            }
            if (isset($_SESSION["mensagem"])) {
                echo $_SESSION["mensagem"];
            }
            unset($_SESSION["erros"]);
            unset($_SESSION["mensagem"]);
            ?>
        </div> -->

        <section class="produtos-container">
            <header>
                <?php
                if (isset($_SESSION["login"])) {
                ?>
                    <button onclick="javascript:window.location.href ='./novo/'">Novo Produto</button>
                    <button onclick="javascript:window.location.href ='../categorias'">Adicionar Categoria</button>
                <?php
                }
                ?>
            </header>
            <main>

                <?php
                while ($linha = mysqli_fetch_array($produto)) {
                    $valor = $linha["valor"];
                    $desconto = $linha["desconto"];
                    $image = $linha["imagem"];

                    if ($desconto > 0) {
                        $desconto = ($desconto / 100) * $valor;
                    }

                    if ($valor > 1000) {
                        $parcelamento = 12;
                        $valor = $valor - $desconto;
                        $valorParcelado = $valor / $parcelamento;
                    } else {
                        $parcelamento = 6;
                        $valor = $valor - $desconto;
                        $valorParcelado = $valor / $parcelamento;
                    }

                    // $qtnParcelas = $valor > 1000 ? 12 : 6;

                    // $valor = $valor - $desconto;
                    // $valorParcelado = $valor / $parcelamento;

                ?>
                    <input type="hidden" name="acao" value="<?= $linha["id"] ?>" />
                    <article class="card-produto">
                        <figure>
                            <input type="hidden" name="acao" value="deletar" />
                            <input type="hidden" name="imagem" value="<?= $linha["imagem"] ?>" />
                            <img src="./novo/fotos/<?= $linha["imagem"] ?>" />
                        </figure>
                        <section>
                            <span class="preco">R$ <?= number_format($valor, 2, ',', '.') ?></span>
                            <span class="parcelamento">ou em
                                <em>
                                    <?= $parcelamento ?>x R$<?= number_format($valorParcelado, 2, ',', '.') ?> sem juros
                                </em>
                            </span>

                            <span class="descricao">
                                <?= $linha["descricao"] ?> de cor <?= $linha["cor"] ?> novo perfeito estado
                            </span>

                            <span class="categoria">
                                <em><?= $linha["categoria"] ?></em>
                            </span>
                            <?php
                            if (isset($_SESSION["login"])) {
                            ?>
                                <form action="./novoActions.php" method="POST" id="form-button-deletar">
                                    <input type="hidden" name="acao" value="deletar" />
                                    <input type="hidden" name="idDescricao" value="<?= $linha["id"] ?>" />
                                    <button>Deletar</button>
                                </form>
                            <?php
                            }
                            ?>
                        </section>

                    </article>
                <?php
                }
                ?>


            </main>
        </section>
    </div>
    <footer>
        SENAI 2021 - Todos os direitos reservados
    </footer>
</body>

</html>