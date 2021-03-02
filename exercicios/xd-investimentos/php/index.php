<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles-global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Câmbio Moedas</title>
</head>

<body>
    <form method="GET" action="conversao-moeda.php" >
        <h1>Conversão para Dolar e Euro</h1>

        <div class="input-group">
            <label for="real">Informe o valor em reais:</label>
            <input type="number" name="real" id="real" placeholder="Ex: 2000,00" step="0.01" min="0.01" required required>
        </div>
        
        <div id="moedas">   
            <label for="dolar" class="container">Dolar
                <input type="checkbox" name="dolar" id="dolar" value="dolar">
                <span class="checkmark"></span>
            </label>

            <label for="euro" class="container">Euro
                <input type="checkbox" name="euro" id="euro" value="euro">
                <span class="checkmark"></span>
            </label>

        </div>

        <button>Enviar</button>
    </form>
</body>

</html>