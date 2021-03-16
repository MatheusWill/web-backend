<?php

$nome =  $_POST['nome'];
$cidade = $_POST['cidades'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resolução</title>
</head>
<body>
    <Form>
        <h1>Olá <?=$nome ?>, de <?=$cidade ?>, seja bem-vindo. </h1>
    </Form>
</body>
</html>