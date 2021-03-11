<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-global.css">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0; $i < count($_POST); $i++) { 
            $media = (array_sum($_POST)) / count($_POST);

        //     $soma = 0;
        //     foreach ($_POST as $notas) {
        //         $soma += $notas;
        //     }
        //     $media = $soma / count($_POST);
         }  

    ?>
    <div class="input-group">
        <h1>A media é: <?= $media ?></h1>
        <h2>
            <?php 

                $maior = max($_POST);
                $menor = min($_POST);

                echo "<h2>A maior nota é: $maior <br></h2>" ;
                echo "<h2>A menor nota é: $menor </h2>" ;
            ?>
        </h2>
    </div>
</body>
</html>