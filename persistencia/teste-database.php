<?php

const HOST = "localhost";
const USER = "root";
const PASSWORD = "13128359";
const DATABEASE = "dbTaskList";

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABEASE);

$query = "select * from tbl_tasks";

$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

// $linha1 = mysqli_fetch_array($resultado);

// $linha2 = mysqli_fetch_array($resultado);

// $linha3 = mysqli_fetch_array($resultado);

// print_r($linha1);
// echo "<br>";
// print_r($linha2);
// echo "<br>";
// echo "A tarefa é:" . $linha2["descricao"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">

        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
        </tr>

        <?php
            while($linha = mysqli_fetch_array($resultado)){
        ?>

            <tr>
                <td> <?= $linha["id"] ?> </td>
                <td> <?= $linha["descricao"] ?> </td>
            </tr>

        <?php
            }
        ?>

    </table>
</body>
</html>