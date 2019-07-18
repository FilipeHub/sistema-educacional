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

	<!-- Listagem de cursos -->

	<section class="content">
		<div class="container">
			<h1 class="title">Cursos:</h1>

			<div class="courses">

				<div class="row">
					<article class="col-md-3 col-sm-6"> <!-- md (dispositivo grande ex tv) sm (tablet) e xm (celular). Ta dizendo que pra tv vai aparecer 4 cursos pra tablet 2 e pra celular 1 (de acordo com a divisão das telas) -->
						
						<div class="course">
						<img src="imgs/courses/curso-1.png" alt="Course">

						<h2 class="title-course">Curso de Vagrant</h2>

						<a class="btn-view" href="">Saiba mais...</a>
					</div><!-- Course -->
					</article>
					
					<article class="col-md-3 col-sm-6">
						
						<div class="course">
						<img src="imgs/courses/curso-1.png" alt="Course">

						<h2 class="title-course">Curso de Vagrant</h2>

						<a class="btn-view" href="">Saiba mais...</a>
					</div><!-- Course -->

					</article>

				<?php 
					for($i=0; $i< 6; $i++){ 
				?>

					

					<article class="col-md-3 col-sm-6">
						
						<div class="course">
						<img src="imgs/courses/curso-1.png" alt="Course">

						<h2 class="title-course">Curso de Vagrant <?=$i?> </h2>

						<a class="btn-view" href="">Saiba mais...</a>
					</div><!-- Course -->

					</article>

				<?php } ?> <!-- FOR -->
				</div><!-- row -->

				
			</div> <!-- Courses	-->

			<div class="page">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				        <span class="sr-only">Previous</span>
				      </a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>

			</div><!-- Page paginacao -->		


		</div><!-- Container -->

	</section> <!-- Section Content -->

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
		<p>Todos os direitos reservados LaraSchool - <?=date('Y')?></p>
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