<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (($login == 'adm') && ($senha == '123')){
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
            header('location: restrita/index-restrito.php');
    }
    else {
        header("location: index.php");
    }
    ?>