<?php

require("../../database/conexao.php");

$query = "select * from tbl_categoria";

$resultado = mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles-global.css" />
  <link rel="stylesheet" href="./novo.css" />
  <title>Administrar Produtos</title>
</head>

<body>
  <?php
  include("../../componentes/header/header.php");

  if (!isset($_SESSION["id"])) {

    $_SESSION["mensagem"] = "Você precisa fazer login!";

    header("location: ../index.php");
  }
  ?>
  <div class="content">
    <section class="produtos-container">
      <main>
        <form class="form-produto" method="POST" action="../novoActions.php" enctype="multipart/form-data">

          <h1>Cadastro de produto</h1>
          <ul>
            <?php
            if (isset($_SESSION["erros"])) {
              foreach ($_SESSION["erros"] as $erros) {
            ?>
                <li><?= $erros ?></li>
            <?php
              }
              unset($_SESSION["erros"]);
            }
            ?>
          </ul>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" required>
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso" required>
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" id="quantidade" name="quantidade" required>
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" required>
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" id="tamanho" name="tamanho">
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" required>
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="desconto">Desconto</label>
            <input type="text" id="desconto" name="desconto">
          </div>

          <input type="hidden" name="acao" value="salvar" />
          <div class="input-group">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria">
              <option value="">SELECIONE</option>
              <?php
              while ($itemDescricao = mysqli_fetch_array($resultado)) {
              ?>
                <option value="<?= $itemDescricao["id"] ?>">
                  <?= $itemDescricao["descricao"] ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" />
          </div>

          <button onclick="javascript:window.location.href = '../'">Cancelar</button>
          <button name="salvar">Salvar</button>
        </form>
      </main>
    </section>
  </div>
  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
</body>

</html>