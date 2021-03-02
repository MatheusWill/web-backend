<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Calculo consumo de energia</title>
</head>
<body>
    <form method="GET" action="calculo-energia.php">
        <h1>Calculo de Consumo de Energia</h1>

        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div> 

        <div class="input-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Ex: Rua avenida">
        </div>

        <div class="input-group">
            <label for="numero">Nº</label>
            <input type="number" name="numero" id="numero" required>
        </div>

        <div class="input-group">
            <label for="consumo">Consumo</label>
            <input type="number" name="consumo" id="consumo" required>
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>