<?php
    if ($_POST) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $hobbie = $_POST['hobby'];

        if (strlen($nome) < 6) {
             echo "O nome precisa ter no mínimo 6 caracteres.<br>";
             exit;
        }

        if ($idade < 18) {
            echo "A idade precisa ser maior que 18.<br>";
            exit;
        }

        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo "Hobby: " . $hobbie . "<br>";
    } 
?>
