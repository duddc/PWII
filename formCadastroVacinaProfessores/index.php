<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de professores para vacinação</title>
    </head>
    <body>
        <h1>Cadastro de professores para vacinação</h1>
        <form action="cadastro-professores.php" method="post">
            <label>Nome:</label>
                <input type="text" name="txtNome" id="txtNome">
                <br>

                <label>CPF:</label>
                <input type="text" name="txtCpf" id="txtCpf">
                <br>

                <label>Data de nascimento:</label>
                <input type="date" name="txtData" id="txtData">
                <br>

                <label>Doses:</label>
                <input type="radio" name="rdDose" id="rdDose" value="1"> 1º Dose
                <input type="radio" name="rdDose" id="rdDose" value="2"> 2º Dose
                <input type="radio" name="rdDose" id="rdDose" value="3"> 3º Dose
                <input type="radio" name="rdDose" id="rdDose" value="4"> 4º Dose
                <br>

                <label>Selecione a escola sede:</label>
                <select name="slEscola" id="slEscola">
                    <option value="1">ETEC Guaianazes</option>
                    <option value="2">ETEC Camargo Aranha</option>
                    <option value="3">ETEC Itaquera II</option>
                    <option value="4">ETEC Sapopemba </option>
                </select>
                <br>
                
                <input type="submit" value="Cadastrar">
        </form>
        
    </body>
</html>