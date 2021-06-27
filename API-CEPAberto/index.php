<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\style.css">
    <script src="./main.js" defer></script>
    <title>Exercicio - Consumo de API CEP Aberto</title>
</head>
<body>
    <main class="container">
        <h1 class="title">Cadastro API CEP Aberto</h1>
        <div class="row">
            <div class="inputbox">
                <input type="text" id="nome" required>
                <label for="nome">Nome</label>
            </div>
            <div class="inputbox">
                <input type="text" id="email"  required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="inputbox">
                <input type="text" id="cep" maxlength="8" required>
                <label for="cep">CEP</label>
            </div>
            <div class="inputbox">
                <input type="text" id="endereco"  required>
                <label for="endereço">Endereço</label>
            </div>
            <div class="inputbox">
                <input type="text" id="numero" required>
                <label for="numero">Número</label>
            </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
            <div class="inputbox">
                <input type="text" id="bairro"  required>
                <label for="bairro">Bairro</label>
            </div>
            <div class="inputbox">
                <input type="text" id="cidade"  required>
                <label for="cidade">Cidade</label>
            </div>
            <div class="inputbox">
                <input type="text" id="estado"  required>
                <label for="estado">Estado</label>
            </div>
        </div>
        <div class="row">
            <button>Salvar</button>
        </div>
    </main>
    <footer>
        Matheus Willian de Oliveira &#169 2021
    </footer>
</body>
</html>