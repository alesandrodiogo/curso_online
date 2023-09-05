<?php
include("logserver.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Descrição dos cursos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mega-menu.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/desc.css">
    <link rel="stylesheet" href="font-awesome/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/woff" href="glyphicons-halflings-regular.woff"/>
    <link rel="icon"  	   href="banners/logo.jpg">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

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

			<ul class="nav navbar-nav">
				<li><a href="index.php"><i class="fa fa-home fa-lg">&nbsp;</i>Página Inicial</a></li>
				<li><a href="ferramentas/ferramentas.php"><i class="fa fa-cloud-download"></i> &nbsp;Ferramentas para downloads</a></li>
				<li><a href="midia/midias.php"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;Mídias</a></li>

        <li><a href="descricao.php"><i class="fa fa-book"></i>&nbsp;Cursos</a></li>


				<li><a href="noticias/noticias.php"><i class="fa fa-bell"></i>&nbsp;Notícias</a></li>
				<li><a href="contactos/contacto.php"><i class="fa fa-address-book"></i> &nbsp;Contactos</a></li>
				<li><a href="sobreNos/sobreNos.php"><i class="fa fa-info">&nbsp;&nbsp;</i>Sobre Nós</a></li>
				<li><a href="cadastro/cadastro.php"><i class="fa fa-edit">&nbsp;</i>Cadastrar-se</a></li>
				<li><a href="#" data-toggle="modal" data-target="#showjanela"><i class="fa fa-user-circle-o"></i> &nbsp;Login</a></li>

            
			</ul>
		</nav>
	</nav>

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
                    <a href="recupsenha.php" style="color: black;">Esqueceu a senha? &nbsp;</a>
                      <button type="submit" class="btn btn-success" name="submit">Login</button><br/><span><br/>
                        <?php
                          echo $erro;
                        ?>
                          </span>
      </form>
        </div>
          </div>
            </div>
              </div>

  <div class="container">        
		<div class="row">

			<div class="col-lg-12 col-xs-12">
    		<h3 class="well text-center fundo">Cursos &#8212; Descrições </h3>
    	</div>

      <!-- modal -->
      
        <?php require_once 'modal.php'; ?>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-algoritmo">
          <img src="imagem/algoritmo.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-bd">
          <img src="imagem/base.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-c">
          <img src="imagem/c.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-cont">
          <img src="imagem/contgeral.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-corel">
          <img src="imagem/corel.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-ex">
          <img src="imagem/excell.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-hard">
          <img src="imagem/hard.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail" data-toggle="modal" data-target="#modal-info">
          <img src="imagem/informatica.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail" data-toggle="modal" data-target="#modal-ingles">
          <img src="imagem/ingles.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail" data-toggle="modal" data-target="#modal-java">
          <img src="imagem/java.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-logica">
          <img src="imagem/logica.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-shop">
          <img src="imagem/photos.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-portugues">
          <img src="imagem/portugues.jpg" alt="carro1">
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="t1.jpg" class="thumbnail"  data-toggle="modal" data-target="#modal-humanos">
          <img src="imagem/recusoshumanos.jpg" alt="carro1">
        </a>
      </div>
  </div>


		<footer class="rodape">
         	<p>Copyright © Ramossoft. Todos os direitos reservados.</p>
         </footer>

</body>
</html>