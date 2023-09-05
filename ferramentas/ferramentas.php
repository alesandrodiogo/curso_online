<?php
include("logserver.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ferramentas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="icon"  href="banners/logo.jpg">

    <style>
    	.news {background-color:#52C7DD; margin-top: 0.4%; color:#fff;}
    	#texto-titulo{ text-align: left; margin-left: 10%;  font-family: Roboto, Arial, sans-serif; padding-top: 3%;font-size: 3em; font-weight: lighter; color: #fff;}
    	#texto-subtitulo{font-family: Roboto, Arial, sans-serif; margin-left: 10%; margin-left: 10%; padding-bottom: 3%; font-weight: lighter; font-size: 1.5em;}
    	#text-destaque { color: #333; font-family: Roboto, Arial, sans-serif; font-size: 2em;}
		#text-destaque:after{ content: ""; width: 30px; height: 5px; display: block; margin: 10px auto 0 auto; background: #3b89da;}
		#titulo-news{color: #000; font-size: 1.4em;}
		.rodape{width: 100%; background-color: #444C58; margin-top: 5%; text-align: center; 
	padding-top: 3%; padding-bottom: 3%; color: #fff;}
	
    	.menu-fixo{z-index: 10; position: fixed; top: 0; width: 100%;}

    	@media only screen and (max-width: 767px){
    	#texto-titulo{text-align: center; margin-left: 0;}
    	#texto-subtitulo{text-align: center; margin-left: 0;}


	}

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

			<ul class="nav navbar-nav ">
				<li><a href="../index.php"><i class="fa fa-home fa-lg">&nbsp;</i>Página Inicial</a></li>
				<li><a href="#"><i class="fa fa-cloud-download"></i> &nbsp;Ferramentas para downloads</a></li>
				<li><a href="../midia/midias.php"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;Mídias</a></li>
				<li><a href="../descricao.php"><i class="fa fa-book"></i>&nbsp;Cursos</a></li>
				<li><a href="../noticias/noticias.php"><i class="fa fa-bell"></i>&nbsp;Notícias</a></li>
				<li><a href="../contactos/contacto.php"><i class="fa fa-address-book"></i> &nbsp;Contactos</a></li>
				<li><a href="../sobreNos/sobreNos.php"><i class="fa fa-info">&nbsp;&nbsp;</i>Sobre Nós</a></li>
				<li><a href="../cadastro/cadastro.php"><i class="fa fa-edit">&nbsp;</i>Cadastrar-se</a></li>
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
                         <span> <?php echo $erro;?></span>
                    </div>
				</div>
			</div>
		</div>
    </form>


    <section>
        <div class="jumbotron news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1 id="texto-titulo">Ferramentas para Download</h1>
          				<p id="texto-subtitulo">Baixe gratuitamente as ferramentas e aprimora o seu aprendizado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h2 id="text-destaque">Baixa Já</h2><br><br><br>
				</div>
			</div>
		</div>
	</section>


						<section>
							<div class="container">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/1.png">
											<div class="caption">
												<h3 id="titulo-news">Brackets</h3>
												<p>Um editor de textos Open Source que vem crescendo com uma grande velocidade, alcançando, e, ultrapassando alguns editores de texto já consolidados no mercado.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/6.png">
											<div class="caption">
												<h3 id="titulo-news">MySQL</h3>
												<p>O MySQL é um sistema de gerenciamento de banco de dados (SGBD), que utiliza a linguagem SQL (Linguagem de Consulta Estruturada) como interface.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/2.png">
											<div class="caption">
												<h3 id="titulo-news">Sublime Text</h3>
												<p>O Sublime Text é um software multiplataforma de edição de texto, no entanto utilizado por muitos desenvolvedores para editar código-fonte, escrito em linguagem Python.</p>
												<p><a href="apps/SublimeText.rar" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/7.png">
											<div class="caption">
												<h3 id="titulo-news">WAMP Server</h3>
												<p>WampServer é um software que instala um conjunto de softwares no computador, de modo a facilitar a configuração de scripts local e um banco de dados no sistema.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/3.png">
											<div class="caption">
												<h3 id="titulo-news">PHPstorm</h3>
												<p>PhpStorm fornece um editor para PHP, HTML e JavaScript com análise de código em tempo real, prevenção de erros e refatoração automatizada para código PHP e JavaScript.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/5.png">
											<div class="caption">
												<h3 id="titulo-news">XAMP</h3>
												<p>XAMPP é um servidor, software livre, que consiste principalmente na base de dados MySQL, o servidor web Apache e as linguagens de script: PHP e Perl.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/Workbench.png">
											<div class="caption">
												<h3 id="titulo-news">Workbench</h3>
												<p>O Workbench é uma ferramenta de design de banco de dados visual, administração, design de banco de dados e sistema de banco de dados MySQL.</p>
												<p><a href="apps/workbeach.msi" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="thumbnail">
											<img src="img/9.png">
											<div class="caption">
												<h3 id="titulo-news">EasyPHP</h3>
												<p>EasyPHP é um software mais abrangente que os servidores, um interpretador de script (PHP), que serve como administrador SQL phpMyAdmin. <br><br> O EasyPHP por padrão ainda não tem suporte para a nova versão do PHP, o PHP7.</p>
												<p><a href="#" class="btn btn-primary">Baixar</a></p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</section>


						<footer class="rodape">
                         	<p>Copyright © Ramossoft. Todos os direitos reservados.</p>
                         </footer>

</body>
</html>