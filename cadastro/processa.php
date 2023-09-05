<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $senha = "";
    $dbname = "registros";

    $conexion = mysqli_connect($server, $user, $senha, $dbname);

    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $sexo = $_POST ["sexo"];
    $morada = $_POST ["morada"];
    $nacionalidade = $_POST ["nacionalidade"];
    $contacto = $_POST ["contacto"];
    $senha = ($_POST ["senha"]);
    $resposta = $_POST ["resposta"];

    $input_user = "INSERT INTO aluno (email, nome, sexo, morada, nacionalidade, contacto, senha, resposta) VALUES ('$email', '$nome', '$sexo', '$morada', '$nacionalidade', '$contacto', '$senha', '$resposta')";

    $output_finish = mysqli_query($conexion, $input_user);


    if (!isset($output_finish)) {
        header("Location: cadastro.php");
    } else {

         $_SESSION['msg'] = "<p style='color: #408136; text-align: center; font-size: 2rem;'>Cadastro feito com sucesso</p>";
        header("Location: cadastro.php");
    }

?>