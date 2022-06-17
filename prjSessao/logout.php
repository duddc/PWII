<?php
    header("Location: index.php");
    session_start();

    unset($_SESSION['login-sessao']);
    unset($_SESSION['senha-sessao']);

    session_destroy();
?>