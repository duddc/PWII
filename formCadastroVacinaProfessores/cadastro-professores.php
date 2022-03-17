<?php
    $nomeProfessor = $_POST['txtNome'];
    $cpfProfessor = $_POST['txtCpf'];
    $escola = $_POST['slEscola'];
    $dose = $_POST['rdDose'];
    $dataNascimento = $_POST['txtData'];

    switch($escola){
        case 1:
            $escola = "ETEC Guaianases";
        break;
        case 2:
            $escola = "ETEC Camargo Aranha";
        break;
        case 3:
            $escola = "ETEC Itaquera II";
        break;
        case 4:
            $escola = "ETEC Sapopemba";
        break;
    }

    switch($dose){
        case 1:
            $dose = "1º DOSE";
        break;
        case 2:
            $dose = "2º DOSE";
        break;
        case 3:
            $dose = "3º DOSE";
        break;
        case 4:
            $dose = "4º DOSE";
        break;
    }

    echo("Professor: ".$nomeProfessor);
    echo(" <br> CPF: " .$cpfProfessor);
    echo(" <br> Data de Nascimento:".$dataNascimento);
    echo(" <br> Escola:" .$escola);
    
    echo(" <br> Tomou a " .$dose. " da vacina. Parabéns você é um jacarezinho!");
    
?>