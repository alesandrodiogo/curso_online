<?php
include("logserver.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ramossoft</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
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
				<li><a href="#"><i class="fa fa-home fa-lg">&nbsp;</i>Página Inicial</a></li>
				<li><a href="ferramentas/ferramentas.php"><i class="fa fa-cloud-download"></i> &nbsp;Ferramentas para downloads</a></li>
				<li><a href="midia/midias.php"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;Mídias</a></li>
				<li>
               <a href="descricao.php"><i class="fa fa-book"></i> &nbsp;Cursos</a>
				</li>

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
  <div class="jumbotron first-slide">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 text-color">
          <h1>Mercado de trabalho não espera por você</h1>
          <p>Acesse do seu computador, tablet ou celular. Nosso sistema é 100% compatível com você e o mundo. Todos os dias e a qualquer hora, você tem acesso ao conteúdo dos cursos que estiver matriculado</p>
          <p><a href="#cursos" class="btn btn-primary btn-lg" role="button">Faça um curso agora »</a></p>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
	
<div id="videoshow" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   
  </ol>
	<div class="container-fluid">
			
		<div class="carousel-inner">

			<div class="item active">

				<img src="banners/Banner1.jpg">
				<div class="carousel-caption d-none d-md-block">
    				<h5>Melhor centro de formação</h5>
    				<p>	Formando muitos profissionais á 9 anos</p>
			</div>
		</div>

			<div class="item">
				<img src="banners/Banner2.jpg">
				<div class="carousel-caption d-none d-md-block">
			</div>
			</div>

			<div class="item">
				<img src="banners/Banner3.jpg">
				<div class="carousel-caption d-none d-md-block">
    				<h5>Matricula-se já</h5>
    				<p>Estamos online e presencial 24h</p>
			</div>
			</div>
		</div>

                                      
			<a class="left carousel-control" href="#videoshow" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span> 
			</a>

				<a class="right carousel-control" href="#videoshow" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
	</div>
</div>
</section>                             


        
         <div class="container" id="cursos">

    <div class="row">
    <div class="col-md-12 col-xs-12"><br><br>
				<h2 id="text-destaque">Cursos mais feitos</h2><br><br><br>
			</div>

    	<div class="col-md-4 col-xs-12">
    		<div class="service1">
    			<img src="img/6.png" class="imgSize" alt="curso de contabilidade">
    				<div class="descricao">
						<p>Aprenda a gerenciar empresas com este curso. Você aprenderá a criar, gerenciar muitos relatórios.</p>
					</div>
    			<div class="contorno">
							<span>Preço: 12.500kz</span>
					</div>
    		</div>
    	</div>

    	<div class="col-md-4 col-xs-12">
			<div class="service1">
				<img src="img/3.jpg" class="imgSize" alt="curso de inglês">
					<div class="descricao">
						<p>Comunica-se com o mundo aprendendo a maior língua falada, o Inglês.</p>
					</div>
				<div class="contorno">
							<span>Preço: 5.000kz</span>
					</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12">
			<div class="service1">
				<img src="img/11.png" class="imgSize" alt="curso de Excel Avançado">
					<div class="descricao">
						<p>Aprenda a criar, organizar, estelizar tabelas e fazer calculos com o Excel.</p>
					</div>
				<div class="contorno">
							<span>Preço: 17.500kz </span>
					</div>
			</div>
		</div>

		 <div class="col-md-4 col-xs-12">
			<div class="service1">
				<img src="img/10.png" alt="curso de hardware" class="imgSize">
					<div class="descricao">
						<p>Conheça e soluciona os problemas com o curso de hardware.</p>
					</div>
				<div class="contorno">
						<span>Preço: 10.000kz </span>
					</div>
                  </div>
        </div>

        <div class="col-md-4 col-xs-12">
			<div class="service1">
				<img src="img/corel.jpg" class="imgSize" alt="curso de Photoshop">
					<div class="descricao">
						<p>Crie, Vetorize e edita gráficos e imagens com a maior ferramenta, o CorelDraw.</p>
					</div>
				<div class="contorno">
							<span>Preço: 15.500kz </span>
					</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12 col-sm-8">
			<div class="service1">
				<img src="img/2.jpg" class="imgSize" alt="curso de algoritmo">
					<div class="descricao">
						<p>Aprenda a criar pequenos programas excelentes com o curso de algoritmo.</p>
					</div>
				<div class="contorno">
							<span>Preço: 14.500kz </span>
					</div>
			</div>
		</div>
    </div>
</div>


			<div class="container" style="margin-top: 5%; padding-bottom: 2%; background-color: #E0EAF1;">
	<div class="row">
             
             <div class="col-md-12 col-xs-12">
				<h2 id="text-destaque">Depoimentos</h2><br>
			</div>

		<div class="col-md-4 col-xs-12">
		<div class="bloco-depoimento"><br>
			<div class="titulo" style="background-color:#F56461;">
				<h4>Domingas Firmino</h4>
				</div>

				<div class="subtitulo">
					<p id="seccao-depoimento">Quando soube que a Ramossoft criou uma plantaforma para cursos onlines, eu disse wau, isto é incrível. Não terei mais que andar muito pra uma instituição física. E ainda
					posso obter o certificado sem muita burocracia.</p>
				</div>
			</div>
			</div>

			<div class="col-md-4 col-xs-12">
		<div class="bloco-depoimento"><br>
			<div class="titulo" style="background-color:#4995E8;">
				<h4>Gabriel Diogo</h4>
				</div>

				<div class="subtitulo">
					<p id="seccao-depoimento">Cursos onlines? Que bom. Assim não terei que me deslocar muito, vivo distante e por vezes
					tenho chegado atrasado na instituição, com o cursos onlines encurta as distâncias. Legal!.</p>
				</div>
			</div>
			</div>

			<div class="col-md-4 col-xs-12">
		<div class="bloco-depoimento"><br>
			<div class="titulo" style="background-color:#42BC79;">
				<h4>Maria de Fátima</h4>
				</div>

				<div class="subtitulo">
					<p id="seccao-depoimento">É um mais uma tecnologia facilitando a minha vida, com o trabalho, não tenho tido de fazer um
					curso integral por falta de tempo. Mas com está plantaforma, posso fazer um curso a qualquer hora
				e de qualqyer lugar.</p>
				</div>
			</div>
			</div>
		</div>
	</div>


<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" >
        <h1>Forma de pagamento aceita</h1>
			<img src="icones/multicaixa.png" width="80" height="80">
      </div>
    </div>
  </div>
</section><br><br>

<div class="section well pre-rodape">
    <div class="container">
   	  <div class="row">

		<div class="col-lg-4 col-md-4">
            <h3 class="text-center">Quem somos?</h3>
            <h5>Nascemos para ser a sua fonte segura de informação e aprendizado para a sua formação
            	profissional. Por isso aqui você encontra materias gratuitos, livros, notícias e muitas
            	recomendações. Esperamos que gostes!</h5>
        </div>

		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">Encontra-nos</h3>
            <address class="text-center">
  				<strong>Ramossoft, Inc.</strong><br>
  					Luanda-Sul, Maria Luísa,<br>
  					Telefone-Fixo, 92329-2970, AO<br>
  			         Telefone: (+244)93946-7606
		    </address>
		</div>

		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">Suporte Técnico</h3>
		  <p class="text-center">Telefone: (+244)93946-7606<br> Email:info@ramossoft.com </p>
    </div>

			</div>
		</div>
    </div>
</div>


    <footer class="text-center rodape">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 text-rodape">
        <p >Copyright © Ramossoft. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>