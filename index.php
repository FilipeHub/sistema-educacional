<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Layout School</title>
	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Fonts Awesome-->
	<!-- <link rel="stylesheet"  href="css/fontawesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS Person -->
	<link rel="stylesheet"  href="css/style.css">

	<!-- CSS Reset -->
	<link rel="stylesheet"  href="css/reset.css">

	

</head>
<body>
	<nav class="navbar navbar-expand-lg nav-header">
	  <a class="navbar-brand" href="#">
		<img src="imgs/logo-laraschool.png" class="logo" alt="LaraSchool">
	  </a>
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
	    <!-- <span class="navbar-toggler-icon"></span> -->
	    
	    <span class="icon-bar"></span>
	    
	    <span class="icon-bar"></span>

	    <span class="icon-bar"></span>
	  </button>
<!--
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
	    <span class="navbar-toggler-icon"></span>
	  </button>
-->
	  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
	    <ul class="navbar-nav mr-auto menu-itens">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Meus Cursos</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Instrutor
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Cursos</a>
	          <a class="dropdown-item" href="#">Alunos</a>
	          <a class="dropdown-item" href="#">Vendas</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Cadastrar Curso</a>
	        </div>
	      </li>
	      
	    </ul>

	    <ul class="navbar-nav navbar-right">
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <img src="imgs/perfil.png" class="img-perfil">
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Perfil</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Sair</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<!-- Fim menu -->

	<section class="content">
		
			<?php
				if(!$_GET){
					include "pags/home.php";
				}elseif (isset($_GET['pg']) && file_exists("pags/{$_GET['pg']}.php")) {
					include "pags/{$_GET['pg']}.php";
				}else{
					include "pags/404.php";
				}

			?>

		
	</section> <!-- Section Content -->


	<!-- Listagem de cursos -->

	

	<?php for($j=0; $j <4; $j++){ ?>
		<br>
	<?php } ?>
	<footer class="footer">
		<div class="container">
			<div class="col-md-6">
				<img src="imgs/logo-laraschool.png" class="logo-footer" alt="LaraSchool">
			</div>
			<div class="col-md-6">
				<ul class="social">
					<li>
						<a href="" class="facebook">
							<i class="fa fa-facebook"></i>	
						</a>	
					</li>
					<li>
						<a href="" class="twitter">
							<i class="fa fa-twitter"></i>	
						</a>	
					</li>
					<li>
						<a href="" class="youtube">
							<i class="fa fa-youtube"></i>	
						</a>	
					</li>
					<li>
						<a href="" class="instagram">
							<i class="fa fa-instagram"></i>	
						</a>	
					</li>
				</ul> <!-- Ul Social -->
			</div>

		</div> <!-- Footer container -->
	</footer>
	<div class="copy text-center">
		<p>Todos os direitos reservados Filipe Cavalcante - <?=date('Y')?></p>
	</div>


	<!-- JS -->
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					</article>


</body>
</html>
