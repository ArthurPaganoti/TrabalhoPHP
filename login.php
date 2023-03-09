
<form method="post">
    Login: <input type="text" name="login" required ><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" name="acao" value="Enviar">
</form>

<?php
session_start();
if(isset($_POST['login'])) {
    if(isset($_POST['acao'])) {
        $login = 'art';
        $senha = '12345';
        $loginF = $_POST['login'];
        $senhaF = $_POST['senha'];
        if($login == $loginF and $senha == $senhaF) {
            $_SESSION['user'] = $login;
            $_SESSION["login_time_stamp"] = time();
            header('Location:home.php');

        } else {
            echo "<a href = 'login.php'> Clique neste link para voltar para aba de cadastro e preencha todos os dados corretamente <br> </a>";
        }
    }
}

if(isset($_SESSION["user"])){
    if(time() - $_SESSION["login_time_stamp"] >600) {
        session_unset();
        session_destroy();
        header("Location: login.php");
    }else{
        header("Location: home.php");
    }
}
?>