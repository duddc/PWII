<?php
    include_once("validador.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
    body{
        margin: 0;
        margin-bottom: 0;
        font-family: 'Noto Sans', sans-serif;
    }

    .main-confirmacao{
    width: 100vw;
    height: 100vh;
    background-color: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }

    h1{
        color:#77ffc0;
    }

    .card{
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding-top: 30px;
        padding-left: 35px;
        padding-bottom: 30px;
        padding-right: 35px;
        background-color: #2f2841 ;
        border-radius: 20px;
        box-shadow: 0px 10px 40px #00000056 ;
    }
    .button{
        width: 100%;
        padding-left: 16px;
        padding-top: 16px;
        padding-bottom: 16px;
        padding-right: 16px;
        border: none;
        border-radius: 8px;
        align-items: center;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #2b134b;
        cursor: pointer;
        background-color: whitesmoke;
        box-shadow: 0px 10px 40px -12px #00000056;
        text-decoration: none;
        float: left;
    }

    .button-sair{
        width: 100%;
        padding-left: 16px;
        padding-top: 16px;
        padding-bottom: 16px;
        padding-right: 16px;
        border: none;
        border-radius: 8px;
        align-items: center;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #2b134b;
        cursor: pointer;
        background-color: whitesmoke;
        box-shadow: 0px 10px 40px -12px #00000056;
        text-decoration: none;
        margin-top: 2%;
    }
</style>
<body>
    <div class="main-confirmacao">
        <div class="card">
            <h1>Aluno cadastrado com sucesso!</h1>
            <h2> <?php echo("Olá, ".$_SESSION['login-sessao']); ?> </h2>
            <a href="index-restrita.php" class="button">Voltar</a>
            <a href="../logout.php" class="button-sair">Sair</a>
        </div>
    </div>
</body>
</html>