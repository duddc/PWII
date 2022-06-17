<?php

    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if(($login == 'adm') && ($senha == '123')) {
        header("Location: area-restrita/index-restrita.php");
        session_start();
        $_SESSION['login-sessao'] = $login;
        $_SESSION['senha-sessao'] = $senha;
    }
    else{
        header("Location: index.php");
    }
?>