<?php
    
    session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];


    require_once("PHPMailerAutoload.php");

    $mail = new PHPMailer();

    $mail-> isSMTP();
    $mail-> Host = 'smtp.gmail.com';
    $mail-> Port = 587;
    $mail-> SMTPSecure = 'tls';
    $mail-> SMTPAuth = true;
    $mail-> Username = "gouveiamartins6@gmail.com";
    $mail-> Password ="sextafeira";

    $mail-> setFrom("gouveiamartins6@gmail.com", "Ramossoft");
    $mail-> addAddress("gouveiamartins6@gmail.com");
    $mail-> Subject = "Email de contacto da Ramossoft Cursos Online";
    $mail-> AltBody = "de: {$nome} email:{$email} mensagem: {$mensagem}";

    if ($mail->send()) {

        header("Location: contacto.php");

    } else {

        $_SESSION["mensagem"] = "Mensagem enviada com sucesso, Obrigado!";
        header("Location: contacto.php");
       
    } die();

?>