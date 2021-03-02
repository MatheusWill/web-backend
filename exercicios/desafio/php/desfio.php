<?php

    foreach($_POST as $value){
        $soma = array_sum($_POST);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos valores</title>
</head>
<body>
    <?php
        echo "<h1>A soma é: $soma</h1>";
    ?>
</body>
</html>