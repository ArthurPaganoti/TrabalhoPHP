<a href ="?logout">Desconnect</a>
<?php
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION["login"]);
    session_destroy();
    header('Location:login.php');
}
if(!isset($_SESSION["user"])){
    session_unset();
    header("Location:login.php");
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <br><br>
    <textarea name="message" placeholder ="Texto" rows="5" cols="60" required></textarea> <br><br>
    <button type ="submit" >Enviar</button>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $to      = 'arthur.ifgoiano@gmail.com';
        $subject = 'arthur';
        $message = $_POST["message"];

        $send = mail($to, $subject, $message);
        if($send) {
            echo "O E-mail foi enviado com sucesso, responderemos em breve";
        } else {
            echo "Ocorreu um erro ao enviar, tente novamente";
        }
    }
    ?>
</form>

<form action= 'tab.php'>
    <button type ="submit" >Pagina Tabela</button><br><br>