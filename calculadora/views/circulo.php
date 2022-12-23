<?php 

if (isset($_GET['resultadoA'])) {
	$resultadoA = $_GET['resultadoA'];
} else {
	$resultadoA = 0;
}

if (isset($_GET['resultadoP'])) {
	$resultadoP = $_GET['resultadoP'];
} else {
	$resultadoP = 0;
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<title>Calculadora</title>
</head>
<body>
	

	<!-- <header>
		<nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end   ">
		  <ul class="d-flex flex-direccion mb-0 " style="list-style:none">
			
			<li><a href="../public/index.php" class="btn btn-primary">Atras</a></li>
	
	
		  </ul>
	
		</nav>
	
	  </header> -->

	  <main>


	  <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Circulo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Circulo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="../calculadora/circulocontroler.php" method="get">
			<label class="text-success">Ingrese el radio de circulo</label><br>
			<input class=" mb-0 form-control" type="number" name="radio" required min="1"><br>

			<input class="btn btn-outline-success"  type="submit" name="calcular" value="calcular">
			<hr>
      <div  class="bg-primary ">

      <div class="bg-success d-flex justify-content-center align-items-center" style="height: 7vh;">
			<label for="" class="text-white fs-3">Area =  </label>
			<label for="" class="text-white fs-3">
				<?php 
					echo $resultadoA;
				 ?>
			</label>
      </div>
			<hr>
      <div class="bg-success d-flex justify-content-center align-items-center" style="height: 7vh;">
			<label for="" class="text-white fs-3">Perimetro = : </label>
			<label for="" class="text-white fs-3">
				<?php 
					echo $resultadoP;
				 ?>
			</label>
      </div>
      </div>
		</form>
      </div>
      
    </div>
  </div>
</div>

	  </main>
	 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>


<?php



if(isset($_GET['resultadoA'])){
  

?>
<script>


  $(function(){
    $('#exampleModal').modal('show');
  });


</script>

<?php
};


?>