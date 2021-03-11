<?php
    $n = $_POST["n"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-global.css">
    <title>Notas</title>
</head>
<body>
    <form method="POST" action="calcular.php" >
        <?php
            for ($i=1; $i <= $n ; $i++) { 
        ?>
            <div class="input-group">
                <label for="nota<?= $i ?>">Digite a nota <?= $i ?></label>
                <input type="number" min="1" max="100" name="nota<?= $i ?>" id="nota<?= $i ?>">
            </div> 
        <?php
            }
        ?>
        <button>Calcular</button>
    </form>
</body>
</html>