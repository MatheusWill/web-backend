<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="desfio.php">
        <h1>Soma dos numeros</h1>

        <div class="input-group">
            <label for="numero[]">Numero 1</label>
            <input type="number" name="numero[]">
        </div>

        <div class="input-group">
            <label for="numero[]">Numero 2</label>
            <input type="number" name="numero[]">
        </div>

        <div class="input-group">
            <label for="numero[]">Numero 3</label>
            <input type="number" name="numero[]">
        </div>

        <div class="input-group">
            <label for="numero[]">Numero 4</label>
            <input type="number" name="numero[]">
        </div>

        <div class="input-group">
            <label for="numero[]">Numero 5</label>
            <input type="number" name="numero[]">
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>