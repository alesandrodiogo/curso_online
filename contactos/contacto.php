<?php
include("logserver.php");
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contactos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="contato.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/woff" href="glyphicons-halflings-regular.woff"/>
	<script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="script.js"></script>
     <link rel="icon"  href="banners/logo.jpg">
    
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



<nav class="menu" data-container="nav-menu">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle btn btn-color" data-toggle="collapse" data-target="#MostrarMenu"><i class="fa fa-bars fa-lg"></i></button>
		</div>
	
		<nav class="collapse navbar-collapse" id="MostrarMenu">

			<ul class="nav navbar-nav ">
				<li><a href="../index.php"><i class="fa fa-home fa-lg" aria-hidden="true">&nbsp;</i>Página Inicial</a></li>
				<li><a href="../ferramentas/ferramentas.php"><i class="fa fa-cloud-download" aria-hidden="true""></i> &nbsp;Ferramentas para downloads</a></li>
				<li><a href="../midia/midias.php"><i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp;Mídias</a></li>

			<li><a href="../descricao.php"><i class="fa fa-book"></i> &nbsp;Cursos</a></li>

				<li><a href="../noticias/noticias.php"><i class="fa fa-bell"></i>&nbsp;Notícias</a></li>
				<li><a href="contacto.php"><i class="fa fa-address-book"></i> &nbsp;Contactos</a></li>
				<li><a href="../sobreNos/sobreNos.php"><i class="fa fa-info">&nbsp;</i>Sobre Nós</a></li>
				<li><a href="../cadastro/cadastro.php"><i class="fa fa-edit">&nbsp;</i>Cadastrar-se</a></li>
				<li><a href="#" data-toggle="modal" data-target="#showjanela"><i class="fa fa-user-circle-o"></i> &nbsp;Login</a></li>

            
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
                                  <span><br/>
                                      <?php
                                      echo $erro;
                                      ?>
                                      </span>
                                      </form>
                                </div>

                                </div>
                              </div>
                         </div>



                         <section>
                         	<div class="jumbotron contato">
                         	  <div class="container">
                         			  <div class="row">
                         			<div class="col-md-12 col-xs-12">
                         				<h1 id="texto-titulo">Contacto</h1>
          									<p id="texto-subtitulo">Dúvidas, valores, reservas ou um papo com um instrutor?</p>
                         			</div>
                         		</div>
                         	   </div>
                         	</div>
                         </section>



                         <section>
                         	<div class="container ">
                         		<div class="row">
                         		<div class="col-md-12 col-xs-12">
                         			<h2 id="text-destaque">Fale connosco</h2>
                                    <p class="text-center text-success">
                                        <?php
                                            if (isset($_SESSION["mensagem"])) {
                                                echo ($_SESSION["mensagem"]);
                                                unset($_SESSION["mensagem"]);
                                            }
                                        ?>
                                    </p>
                         		</div>
                         		</div>
                         	</div>
                         </section>

                         <section>
                         	<div class="container">
                         		<div class="row">
                         			<div class="col-md-8 col-xs-12 formulario">
                         				<div class="form-group">
                                            <form method="post" action="mail.php">
                         					<label for="nome" id="fm-label">Nome</label>
                         					 <input type="name" class="form-control text-door" id="nome" placeholder="Primeiro e segundo nome" name="nome" autofocus required="required"><br>

                         					 <label for="email" id="fm-label">E-mail</label>
                         					 <input type="email" class="form-control text-door" id="email" placeholder="Insira seu e-mail" name="email" required="required"><br>

                         					 <label for="mensagem" id="fm-label">Mensagem</label>
                                             <textarea class="form-control" id="mensagem" rows="5" placeholder="Dúvidas, sugestões, elogios etc" name="mensagem" required="required"></textarea>


                         				</div>
                         				 <button type="submit" class="btn-contacto" name="enviar" id="enviado">Enviar mensagem</button>
                                        </form>
                         			</div>
                         		</div>
                         	</div>
                         </section>


                         <section style="margin-top: 5%;">
                         	<div class="container">
                         		<div class="row">
                         			<div class="col-md-4 col-xs-12">
                         				<div class="seccao-contacto1"><br><br>
                         					<i class="fa fa-road fa-4x" style="margin-left: 40%;"></i><br><br>
                         					<p id="paragrafo-contacto">Estrada Direita do Calemba 2, centro comercial Maria Luísa, 2º andar, Porta 62
                         					<br>
                         					Tel: 923-29-29-70 / 939-46-76-06<br><br><br>
                         					<div class="ver">
                         					<a href="https://goo.gl/maps/ibk5EZAgP8z" target="_blank">Ver no mapa</a>
                         				      </div>
                         					</p>
                         				</div>
                         			</div>

                         			<div class="col-md-4 col-xs-12">
                         				<div class="seccao-contacto2"><br><br>
                         					<i class="fa fa-header fa-4x" style="margin-left: 40%;"></i><br><br>
                         					<p id="paragrafo-contacto"> <br>
                         						Centro de formação profissional <br>
                         					Viana, Condomínio Girassol, Instituto SmartBit <br>
                         					Tel: 924-48-43-43 / 937-36-99-38<br><br>
                         					<div class="ver">
                         					<a href="https://goo.gl/maps/QvY2jufAzBq" target="_blank">Ver no mapa</a>
                         				</div>
                         				 	</p>
                         				</div>
                         			</div>

                         			<div class="col-md-4 col-xs-12">
                         				<div class="seccao-contacto3"><br><br><br>
                         					<i class="fa fa-map fa-4x" style="margin-left: 42%;"></i><br><br>
                         					<p id="paragrafo-contacto">Centro de formação / Loja<br>
                         					Rua direita Viana, Kalemba 2, Junto a TPA<br>
                         					Tel: 929-00-54-28<br><br>
                         						<div class="ver">
                         					<a href="https://goo.gl/maps/kv2bBQpTrwB2" target="_blank">Ver no mapa</a>
                         						</div>
                         					</p>
                         			</div>
                         		</div>
                         </section>


                         <footer class="rodape">
                         	<p>Copyright © Ramossoft. Todos os direitos reservados.</p>
                         </footer>


                        
</body>
</html>