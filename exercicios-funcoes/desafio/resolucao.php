<?php

$listaCidades = [
    1 => "Jandira",
    2 => "Itapevi",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Cotia",
    6 => "Santana de Parnaíba",
    7 => "Carapicuíba",
    8 => "São Paulo",
];

$cidadeSelecionada = $_POST["cidades"];
$nome = $_POST["nome"];

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
        <h1>Olá <?=$nome ?>, de <?=$listaCidades[$cidadeSelecionada] ?>, seja bem-vindo. </h1>
    </Form>
</body>
</html>