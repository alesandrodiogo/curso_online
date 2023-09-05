<?php

$alerta='';

if(isset($_POST['submit'])){
    if(empty($_POST['email']) && empty($_POST['resposta'])){
      $alerta="Email ou Resposta errada";
    }else{
        $email=$_POST['email'];
        $resposta=$_POST['resposta'];
        $novapass=$_POST['novapass'];
        $conn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($conn,"registros");
        $query=mysqli_query($conn,"SELECT *FROM aluno WHERE resposta='$resposta' AND email='$email'");
        $rows=mysqli_num_rows($query);
        if($rows==1){
            $query=mysqli_query($conn,"UPDATE aluno SET senha='$novapass' WHERE email='$email'");
            $alerta="<p style='text-align: center;'>Senha definida com sucesso!</p>";
        }else{
            $alerta="<p style='text-align: center; color: red'>Dados Incorretos<p>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="banners/logo.jpg">

    <title>Recuperar Senha</title>

    <style>

    .formulario{ margin-left: 20%; }

	.text-door{padding-top: 4%; padding-bottom: 4%;}
      
      @media only screen and (max-width: 767px) {

		.formulario{ margin-left:0;} 
}

  </style>

</head>

<body>

<div class="login">

    <h1 style="text-align: center; margin-top: 2%;">Recuperar Senha</h1>

    				<span class="alert-success"><?php echo $alerta; ?></span><br/><br/>

    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-xs-12 formulario">

    				<form method="post" action="" style="text-align: center;">

    					<div class="form-group">

    						<input type="text" class="form-control text-door" id="email" placeholder="O seu email" name="email" autofocus required="required"><br>

    						<input type="text" class="form-control text-door" id="resposta" placeholder="Qual é o teu prato favorito?" name="resposta" autofocus required="required"><br>

    						<input type="password" class="form-control text-door" id="novapass" placeholder="Palavra-passe nova" name="novapass" autofocus required="required"><br>

    						<button class="btn btn-success" name="submit" type="submit">Alterar</button>
    						<button class="btn btn-primary" name="submit" type="submit"><a href="index.php"> Voltar</a></button>

    					</div>

    				</form>
    			</div>
    		</div>
    	</div>

</body>
</html>