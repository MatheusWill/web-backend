<?php
session_start();

include("../../database/conexao.php");

function validarCampos()
{
    $erros = [];

    if (!isset($_POST["usuario"]) && $_POST["usuario"] == "") {
        $erros[] = "Digite um usuário!";
    }

    if (!isset($_POST["senha"]) && $_POST["senha"] == "") {
        $erros[] = "Digite uma senha!";
    }

    return $erros;
}

$logout = fn() => session_destroy();

$sair = $_GET["logout"];

switch ($_POST["action"]) {
    case "login":

        if ($conexao == false) {
            die("ERRO AO CONECTAR" . mysqli_connect_error());
        }

        $erros = validarCampos();

        if (count($erros) > 0) {
            $_SESSION["erros"] = $erros;

            header("location: produtos/index.php");
        }

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sqlSelect = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario'";

        $resultado = mysqli_query($conexao, $sqlSelect) or die(mysqli_error($conexao));

        $teste = mysqli_fetch_array($resultado);

        if ($erros == true) {

            // header("location: /web-backend/icatalogo/produtos/index.php");
            echo "erro";
            $erros[] = "Usuário e/ou senha incorretos";
        }

        if ($usuario == $teste["usuario"] && $senha == $teste["senha"]) {

            $_SESSION["id"] = $teste["id"];
            $_SESSION["nome"] = $teste["nome"];
            $_SESSION["login"] = true;

            header("location: /web-backend/icatalogo/produtos/index.php");
        }

        // header("location: /web-backend/icatalogo/produtos/index.php");

        break;

    case "logout":
        session_destroy();

        break;
}


    //receber os campos do fomulário - OK

    //monstar o sql select na tabela tbl_adminitrador - OK

    //SELECT * FROM tbl_adminitrador WHERE usuario = $usuario; - OK

    //verificar se o usuário existe e se a senha está correta - OK

    //se estiver correta, salvar o id e o nome do usuário na sessão - OK
    
    //redirecionar para tela de listagem de produtos - OK

    // implementar a ação de login - OK

    // mostrar os botões de adicionar produto e categoria somente se estiver logado - OK

    // implementar o logout