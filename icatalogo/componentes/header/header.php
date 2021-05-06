<link rel="stylesheet" href="/web-backend/icatalogo/componentes/header/header.css">
<header class="header">
    <figure>
        <img src="/web-backend/icatalogo/imgs/logo3.png">
    </figure>
    <input type="search" placeholder="Pesquisar" />
    <?php
    if (isset($_SESSION["login"])) {
    ?>
        <nav>
            <a href="../../produtos/index.php" id="logout" name="logout">Sair</a>
        </nav>
    <?php
    } else {
    ?>
        <nav>
            <a id="menu_admin">Administrar</a>
        </nav>
    <?php
    }
    ?>
    <div class="container-login" id="container-login">
        <h1>Fazer Login</h1>
        <form action="/web-backend/icatalogo/componentes/header/loginActions.php" method="POST">
            <input type="hidden" name="action" value="login" />
            <input type="text" name="usuario" placeholder="Usuário">
            <input type="hidden" name="action" value="login" />
            <input type="text" name="senha" placeholder="Senha">
            <button name="login">Entrar</button>
        </form>
    </div>
</header>
<script lang="javascript">
    document.querySelector("#menu_admin").addEventListener("click", toggleLogin);

    function toggleLogin() {

        let containerLogin = document.querySelector("#container-login");

        if (containerLogin.style.opacity == 0) {
            containerLogin.style.opacity = 1;
            containerLogin.style.height = "200px";
        } else {
            containerLogin.style.opacity = 0;
            containerLogin.style.height = "0px";
        }
    }
</script>