<div class="details-course">
	<div class="row">
		<div class="col-md-7">
			<h1 class="title-course-detail">Titulo do curos</h1>
			<h2 class="description">Breve descrição do curso</h2>

			<p class="info"><strong>Clasificação:</strong> 12</p>
			<p class="info"><strong>Total de ALunos:</strong> 13.000</p>
			<p class="info"><strong>Professor:</strong> Filipe Cavalcante</p>
			<p class="info"><strong>Tital de Aulas:</strong> 56</p>
			<p class="info"><strong>Horas:</strong> 32:34</p>
			<p class="info"><strong>Tempo de acesso:</strong> 2 anos</p>
			
		</div><!-- col-md-7 -->

		<div class="col-md-5 text-center">
			<img src="imgs/courses/curso-1.png" alt="Course" class="img-course-detail">
		
			<a class="btn-buy" href="#">Comprar Agora</a>
		</div><!-- col-md-5 -->
		
	</div><!-- row -->


</div><!-- datails-course -->

<div class="details-course-itens">
	
	<div class="container">
		<div class="accordion" id="accordionExample">
		  
		  <?php 
		  	for($i=1; $i <= 4; $i++){
		  ?>
		  <div class="card">
		    <div class="card-header" id="heading<?=$i ?>">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-controls="collapse<?=$i?>">
		          Módulo <?=$i ?>
		        </button>
		      </h5>
		    </div>

		    <div id="collapse<?=$i ?>" class="collapse <?php if($i == 1){?> show <?php  }?> <?php if($i > 1){ ?> collapsed<?php } ?>" aria-labelledby="heading<?=$i ?>" data-parent="#accordionExample">
		      <div class="card-body">
		        Descrição do módulo <?=$i ?>: 

		        Aulas aqui...
		      </div>
		    </div>
		  </div>

		<?php } ?>
		</div><!-- accordion -->

	</div> <!-- container -->

</div><!-- details-course-itens -->


