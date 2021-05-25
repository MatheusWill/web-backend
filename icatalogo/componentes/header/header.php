<?php
session_start();
?>
<link rel="stylesheet" href="/web-backend/icatalogo/componentes/header/header.css">
<?php
if (isset($_SESSION["mensagem"])) {
?>
    <div class="mensagens">
        <?= $_SESSION["mensagem"]; ?>
    </div>

    <script lang="javascript">
        setTimeout(() => {
            document.querySelector(".mensagens").style.display = "none"
        }, 4000);
    </script>

<?php
    unset($_SESSION["mensagem"]);
}
?>

<header class="header">
    <figure>
        <a href="/web-backend/icatalogo/produtos">
            <img src="/web-backend/icatalogo/imgs/logo3.png">
        </a>
    </figure>
    <input type="search" placeholder="Pesquisar" />
    <?php
    if (isset($_SESSION["login"])) {
    ?>
        <nav>
            <a onclick="logout()" id="logout" name="logout">Sair</a>
        </nav>
        <form action="/web-backend/icatalogo/componentes/header/loginActions.php" style="display:none" method="POST" id="form-logout">
            <input type="hidden" name="action" value="logout" />
        </form>
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
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="hidden" name="action" value="login" />
            <input type="password" name="senha" placeholder="Senha" required>
            <button name="login">Entrar</button>
        </form>
    </div>
</header>
<script lang="javascript">
    document.querySelector("#menu_admin").addEventListener("click", toggleLogin);

    function toggleLogin() {
        let containerLogin = document.querySelector("#container-login");
        let h1Form = document.querySelector("#container-login > h1");
        let form = document.querySelector("#container-login > form");
        //se estiver oculto, mostra 
        if (containerLogin.style.opacity == 0) {
            h1Form.style.display = "block";
            form.style.display = "flex";
            containerLogin.style.opacity = 1;
            containerLogin.style.height = "200px";
            //se não, oculta
        } else {
            h1Form.style.display = "none";
            form.style.display = "none";
            containerLogin.style.opacity = 0;
            containerLogin.style.height = "0px";
        }
    }

    function logout() {
        document.querySelector('#form-logout').submit()
    }
</script>