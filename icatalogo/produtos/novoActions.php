<?php

session_start();
include("../database/conexao.php");
include("./funcionNovo.php");

switch ($_POST["acao"]) {
    case "salvar":

        if ($conexao === false) {
            die("ERRO AO CONECTAR" . mysqli_connect_error());
        }

        $erros = validarCampos();

        if (count($erros) > 0) {
            $_SESSION["erros"] = $erros;

            header("location: novo/index.php");

            exit();
        }

        //pegamos o nome original do arquivo       
        $nomeArquivo = $_FILES["foto"]["name"];

        //extraímos do nome original a extensão        
        $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

        //geramos um novo nome único utilizando o unix timestamp        
        $novoNomeArquivo = md5(microtime()) . ".$extensao";

        //movemos a foto para a pasta fotos dentro de produtos       
        move_uploaded_file($_FILES["foto"]["tmp_name"], "novo/fotos/$novoNomeArquivo");

        $descricao = $_POST["descricao"];
        $peso = str_replace(",", ".", $_POST["peso"]);
        $quantidade = $_POST["quantidade"];
        $cor = $_POST["cor"];
        $tamanho = $_POST["tamanho"];
        $valor = str_replace(",", ".", $_POST["valor"]);
        $desconto = $_POST["desconto"] != "" ? $_POST["desconto"] : 0;
        $categoriaId = $_POST["categoria"];

        $sqlInsert = "insert into tbl_produto (
            descricao,
            peso,
            quantidade,
            cor,
            tamanho,
            valor,
            desconto,
            imagem,
            categoria_id )

            values (
                '$descricao',
                $peso,
                $quantidade,
                '$cor',
                '$tamanho',
                $valor,
                $desconto,
                '$novoNomeArquivo',
                $categoriaId )";

        echo $sqlInsert;

        $resultado = mysqli_query($conexao, $sqlInsert) or die(mysqli_error($conexao));

        if ($resultado) {
            $mensagem = "Produto inserido com sucesso!";
        } else {
            $mensagem = "Erro ao inserir o produto";
        }

        $_SESSION["mensagem"] = $mensagem;

        header("location: index.php");

        break;

    case "cancelar":

        break;

    default:

        break;
}
