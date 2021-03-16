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
            <input type="text" id="nome" name="nome">
            <label for="cidades">Cidade</label>
            <select name="cidades" id="cidades" >
                <option value="Jandira">Jandira</option>
                <option value="Itapevi">Itapevi</option>
                <option value="Barueri">Barueri</option>
                <option value="Osasco">Osasco</option>
                <option value="Cotia">Cotia</option>
                <option value="Santana">Santana de Parnaíba</option>
                <option value="Carapicuiba">Carapicuíba</option>
                <option value="Sao-Paulo">São Paulo</option>
            </select>
            <button>Enviar</button>
        </div>
    </form>
</body>
</html>
