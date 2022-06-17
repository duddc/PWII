
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/reset.css">
    <link href="../css/login.css">
    
    <title></title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
    body{
        margin: 0;
        font-family: 'Noto Sans', sans-serif;
    }
    .main-login{
    width: 100vw;
    height: 100vh;
    background-color: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .left-login{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .left-login > h1{
        color:#77ffc0;
    }

    .rigth-login{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-login{
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
        margin: 0;
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

    .button-acessar{
        width: 100%;
        padding: 16px 0px;
        border: none;
        border-radius: 8px;
        align-items: center;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #2b134b;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00000056;
    }
</style>
<body>

    <div class="main-login">
        <div class="left-login">
            <h1>Acesse sua conta educacional</h1>
            <img src="images/logo.png" alt="">
        </div>
        <div class="rigth-login">
            <div class="card-login">
                    <h2>LOG IN</h2>
                    <form action="autenticaSessao.php" method="post">
                        <div class="textfield">
                            <label>Usuário:</label>
                            <input type="text" name="txtlogin" placeholder="Digite seu usuário">
                        </div>
                        <div class="textfield ">
                            <label>Senha:</label>
                            <input type="password" name="txtsenha" placeholder="Digite sua senha">
                        </div>
                        <br>
                        <input class="button-acessar" type="submit" value="Acessar">
                    </form>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>