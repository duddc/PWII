<?php include_once("validador.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
    body{
        margin: 0;
        margin-bottom: 0;
        font-family: 'Noto Sans', sans-serif;
    }
    .main-cadastro{
    width: 100vw;
    height: 100vh;
    background-color: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .left-cadastro{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .left-cadastro > h1{
        color:#77ffc0;
    }

    .rigth-cadastro{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-cadastro{
        width: 50%;
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

    h2{
        color: #00ff88;
        font-weight: 800;
        margin-left: 10%;
    }
    
    form{
        width: 100%;
    }

    .textfield{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .textfield > input{
        width: 100%;
        border: none;
        border-radius: 10px;
        padding: 15px;
        background-color: #514869;
        color: #f0ffffde;
        font-size: 12pt;
        box-shadow: 0px 10px 40px #00000056;
        outline: none;
        box-sizing: border-box;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    label{
        color: whitesmoke;
    }
    .textfield > input::placeholder{
        color: #f0ffff94;
    }

    .textfield > select{
        width: 100%;
        border: none;
        border-radius: 10px;
        padding: 15px;
        background-color: #514869;
        color: #f0ffffde;
        font-size: 12pt;
        box-shadow: 0px 10px 40px #00000056;
        outline: none;
        box-sizing: border-box;
        margin-top: 10px;
        margin-bottom: 10px;
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

    }
</style>
<body>
    <div class="main-cadastro">
        <div class="rigth-cadastro">
            <div class="card-cadastro">
                    <form action="autenticaSessao.php" method="post">
                        <div class="textfield">
                            <label for="nome"> Nome:</label>
                            <input type="text" placeholder="Insira seu nome" name="nome">
                        </div>
                        <div class="textfield ">
                            <label for="cpf"> CPF:</label>
                            <input type="text" placeholder="Insira seu CPF" name="cpf" >
                        </div>
                        <div class="textfield">
                            <label for="RG"> RG:</label>
                            <input type="text" placeholder="Insira seu RG" name="rg" >
                        </div>
                        <div class="textfield ">
                            <label for="turmas">Escolha sua turma:</label>
                            <select name="turmas" id="turmas">
                                <option value="1DSA">1° DS A </option>
                                <option value="1DSB">1° DS B</option>
                                <option value="2DS">2° DS</option>
                                <option value="3DS">3° DS</option>
                            </select>
                        </div>
                        <br>
                        <a href="cadastro.php" class="button">Cadastrar</a>
                        <a href="../logout.php" class="button-sair">Sair</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br><br>
   
</body>
</html>