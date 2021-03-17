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
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Desafio</title>
</head>
<body>
    <form method="POST" action="./resolucao.php" >
        <h1>Olá!</h1>
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="cidades">Cidade</label>
            <select name="cidades" id="cidades" required>
                <option value=""></option>
                <?php
                    foreach($listaCidades as $key => $cidade) {
                ?>
                    <option value="<?= $key ?>"><?= $cidade ?></option>
                <?php
                    }
                ?>

                <!-- <option value=""></option>
                <option value="1">Jandira</option>
                <option value="2">Itapevi</option>
                <option value="3">Barueri</option>
                <option value="4">Osasco</option>
                <option value="5">Cotia</option>
                <option value="6">Santana de Parnaíba</option>
                <option value="7">Carapicuíba</option>
                <option value="8">São Paulo</option> -->
            </select>
            <button>Enviar</button>
        </div>
    </form>
</body>
</html>
