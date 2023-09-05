<?php
session_start();

if(isset($_POST['submit'])){
    if(empty($_POST['email']) || empty($_POST['senha'])){

        $_SESSION["loginErro"]="Email ou senha incorrecta";

    }else{
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $conn=mysqli_connect("localhost", "root", "");
        $db=mysqli_select_db($conn, "registros");
        $query=mysqli_query($conn, "SELECT *FROM aluno WHERE senha='$senha' AND email='$email'");
        $rows=mysqli_num_rows($query);
        if($rows==1){
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            header("Location: ../perfil/perfil.php");
        }else{
            $_SESSION["dadosIncorretos"]="Dados incorrectos";
        }
        mysqli_close($conn);
    }
}
/*$email=$_POST['email'];
$senha=$_POST['senha'];
echo "$email<br>$senha";*/
?>