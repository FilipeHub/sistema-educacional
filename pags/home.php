<div class="container">
	<h1 class="title">Cursos:</h1>

	<div class="courses">

		<div class="row">
			<article class="col-md-3 col-sm-6"> <!-- md (dispositivo grande ex tv) sm (tablet) e xm (celular). Ta dizendo que pra tv vai aparecer 4 cursos pra tablet 2 e pra celular 1 (de acordo com a divisão das telas) -->
				
				<div class="course">
				<img src="imgs/courses/curso-1.png" alt="Course">

				<h2 class="title-course">Curso de Vagrant</h2>

				<a class="btn-view" href="?pg=curso">Saiba mais...</a>
			</div><!-- Course -->
			</article>
			
			<article class="col-md-3 col-sm-6">
				
				<div class="course">
				<img src="imgs/courses/curso-1.png" alt="Course">

				<h2 class="title-course">Curso de Vagrant</h2>

				<a class="btn-view" href="?pg=curso">Saiba mais...</a>
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