<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Fintech Salário</title>
</head>

<body>
    <form method="GET" action="aumento-salario.php">
        <h1>Calculo Aumento de Salário</h1>

        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Jonas Joares" required>
        </div>

        <div class="input-group">
            <label for="salario">Salário Atual</label>
            <input type="number" id="salario" name="salario" placeholder="Ex: 2000,00" step="0.01" min="0.01" required>
        </div>

        <button>Enviar</button>
    </form>
</body>

</html>