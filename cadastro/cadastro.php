<?php
include ("logserver.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastra-se</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/mega-menu.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="icon"  href="banners/logo.jpg">

    <style>

    .dropdown:hover .dropdown-menu{
            display: block; margin-top: 0;
        }
    	.cadastro {background-color:#52C7DD; margin-top: 0.4%; color:#fff;}
    	#texto-titulo{ text-align: left; font-family: Roboto, Arial, sans-serif; padding-top: 3%; font-size: 3em; font-weight: lighter; color: #fff;}
    	#texto-subtitulo{font-family: Roboto, Arial, sans-serif; padding-bottom: 3%; font-weight: lighter; font-size: 1.5em;}
    	#text-destaque { color: #333; font-family: Roboto, Arial, sans-serif; font-size: 2em;}
		#text-destaque:after{ content: ""; width: 30px; height: 5px; display: block; margin: 10px auto 0 auto; background: #3b89da;}

		#fm-label{color:#5a5a5a;  font-size: 1.5em; margin-bottom: 0.5em; font-family: Roboto, sans-serif,Arial;}
		.formulario{ margin-left: 20%;}

		.text-door{padding-top: 4%; padding-bottom: 4%;}
		
		.btn-cadastro{ padding-top: 2%; padding-bottom: 2%; padding-left: 5%; padding-right: 5%;
    				border-radius: 3px; border: 0; background-color: #5589e0; color: #fff; font-size: 1.1em;
     				cursor: pointer; margin-left: 30%;}

@media only screen and (max-width: 767px) 
{	#texto-titulo{
	text-align: center; margin-left: 0;}
	#texto-subtitulo{margin-left: 0; text-align: center;}
	.formulario{ margin-left:0;} 
}

.btn-cadastro:hover{ background-color: #286090;}
.menu-fixo{z-index: 10; position: fixed; top: 0; width: 100%;}
.rodape{width: 100%; background-color: #444C58; margin-top: 5%; text-align: center; padding-top: 3%; 
	padding-bottom: 3%; color: #fff;}
    </style>

</head>
<body>
	<header class="cabecalho">

        <div class="titulos">

        <div class="logotipo">
        	<img src="banners/logotipo.png">
        </div>

        	<div class="logomarca">
        		<h3>Centro de formação online</h3>
        	</div>
        </div>

	</header>


                                <!--COMEÇO DO MENU-->


	<nav class="menu" data-container="nav-menu">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle btn btn-color" data-toggle="collapse" data-target="#MostrarMenu"><i class="fa fa-bars fa-lg"></i></button>
		</div>
	
		<nav class="collapse navbar-collapse" id="MostrarMenu">

			<ul class="nav navbar-nav">
				<li><a href="../index.php"><i class="fa fa-home fa-lg" aria-hidden="true">&nbsp;</i>Página Inicial</a></li>
				<li><a href="../ferramentas/ferramentas.php"><i class="fa fa-cloud-download" aria-hidden="true""></i> &nbsp;Ferramentas para downloads</a></li>
				<li><a href="../midia/midias.php"><i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp;Mídias</a></li>

				<li><a href="../descricao.php"><i class="fa fa-book"></i>&nbsp;Cursos</a></li>

				<li><a href="../noticias/noticias.php"><i class="fa fa-bell"></i>&nbsp;Notícias</a></li>
				<li><a href="../contactos/contacto.php"><i class="fa fa-address-book" aria-hidden="true""></i> &nbsp;Contactos</a></li>
				<li><a href="../sobreNos/sobreNos.php"><i class="fa fa-info">&nbsp;&nbsp;</i>Sobre Nós</a></li>
				<li><a href="cadastro.php"><i class="fa fa-edit">&nbsp;</i>Cadastrar-se</a></li>
				<li><a href="#" data-toggle="modal" data-target="#showjanela"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;Login</a></li>

            
			</ul>
		</nav>
	</nav>

                         
                         <!--JANELA MODAL-->

                                       <form method="post" action="">
                         <div class="modal fade" role="dialog" id="showjanela">
                            <div class="modal-dialog modal-sm">

                                <div class="modal-content">

                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                <h3 class="modal-title">Login</h3>
                                
                              </div>

                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="senha" class="form-control" placeholder="senha">
                                </div>
                              </div>

                              <div class="modal-footer">
                                <a href="../recupsenha.php" style="color: black;">Esqueceu a senha? &nbsp;</a>
                                <button type="submit" class="btn btn-success" name="submit">Login</button><br/>
                                  <span>
                                    <?php

                                        if (isset($_SESSION["loginErro"])) {
                                            echo( $_SESSION["loginErro"]);
                                            unset( $_SESSION["loginErro"]);
                                        }

                                        if (isset($_SESSION["dadosIncorretos"])) {
                                            echo( $_SESSION["dadosIncorretos"]);
                                            unset( $_SESSION["dadosIncorretos"]);
                                        }

                                    ?>
                                      </span>
                                      </form>
                              </div>

                              </div>
                            </div>
                         </div>


                         <section>
                         	<div class="jumbotron cadastro">
                         	<div class="container">
                         		<div class="row">
                         			<div class="col-md-12 col-xs-12">
                         				<h1 id="texto-titulo">Cadastramento</h1>
                         				<p id="texto-subtitulo">Crie uma conta e faça milhares de cursos</p>
                         			</div>
                         		</div>
                         	</div>
                         	</div>
                         </section>

                         <section>
                         	<div class="container">
                         		<div class="row">
                         			<div class="col-md-12 col-xs-12">
                         				<h2 id="text-destaque">Regista-se já</h2><br><br><br>
                         			</div>
                         		</div>
                         	</div>
                         </section>


                                <?php

                                    if (isset($_SESSION['msg']))
                                     {
                                        echo $_SESSION['msg'];
                                        unset ($_SESSION['msg']);
                                      } 
                                    ?> 
 <section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 formulario">
                <form method="post" action="processa.php">
                    <div class="form-group">
                        <label for="nome" id="fm-label">Nome</label>
                         	<input type="name" class="form-control text-door" id="nome" placeholder="Primeiro e último nome" name="nome" autofocus required="required"><br>

                         <label for="email" id="fm-label">E-mail</label>
                         	<input type="email" class="form-control text-door" id="email" placeholder="nome@exemplo.com" name="email" required="required"><br>


                        <label id="fm-label">Sexo</label>
                        <select id="inputState" class="form-control" name="sexo">
       					<option value="M" name="sexo" selected>Masculino</option>
        				<option value="F" name="sexo">Femenino</option>
     					</select><br>

     										<label for="morada" id="fm-label">Morada</label>
     											<input type="address" class="form-control text-door" id="morada" placeholder="Viana Vila Rua 3" name="morada" required="required"><br>

     										<label for="nacionalidade" id="fm-label">Nacionalidade</label>
     											<input type="text" class="form-control text-door" id="nacionalidade" placeholder="Angola" name="nacionalidade" required="required"><br>
     										
     										<label for="telefone" id="fm-label">Telefone</label>
     											<input type="cell" class="form-control text-door" id="telefone" placeholder="996103129" name="contacto" required="required"><br>
     										

     										<label for="senha" id="fm-label">Palavra-passe</label>
     											<input type="password" class="form-control text-door" id="senha" placeholder="***********" name="senha" required="required"><br>

     										<label for="resposta" id="fm-label">Pergunta de Segurança</label>
     											<input type="text" class="form-control text-door" id="resposta" placeholder="Qual é o teu prato favorito?" name="resposta" required="required"><br>
     										


                         				</div>
                         				
                         				 <button type="submit" class="btn-cadastro">Cadastrar-se</button>
                                          
                                            </form>
                         			</div>
                         		</div>
                         	</div>
                         </section>



                         <footer class="rodape">
                         	<p>Copyright © Ramossoft. Todos os direitos reservados.</p>
                         </footer>
</body>
</html>