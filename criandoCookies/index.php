<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>

<?php
        if (isset($_COOKIE['bolacha'])){
            $cor = $_COOKIE['bolacha'];
            echo("<body bgcolor=".$cor.">");
            }
        else {
            echo("<body bgcolor='green'>");
        }
?>
        <form id="form1" name="form1" method="post" action="cor.php">
                <label>Selecione a cor: </label>
                <select name="corSelect">
                    <option value="#C366E3">Roxinho </option>
                    <option value="#FBC371">Amarelinho </option>
                    <option value="#E33834">Vermelhinho </option>
                    <option value="#7CDCFA">Azul clarinho </option>
                </select>
                <br />

                <input type="submit" name="Submit" value="colorir" />
        </form>
</html>