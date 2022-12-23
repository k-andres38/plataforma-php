<?php 

if (isset($_GET['resultadoArea'])) {
	$resultadoArea = $_GET['resultadoArea'];
} else {
	$resultadoArea = 0;
}

if (isset($_GET['resultadoPerimetro'])) {
	$resultadoPerimetro = $_GET['resultadoPerimetro'];
} else {
	$resultadoPerimetro = 0;
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
	

	
	  
	  <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Cuadrado
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Calcular Cuadrado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


	  <form action="../calculadora/cuadracontroler.php" method="get">
			<label class="text-success">Lado 1</label><br>
			<input class=" mb-0 form-control" type="number" name="lado1" required min="1"><br>
			<label class="text-success">Lado 2</label><br>
			<input class=" mb-0 form-control" type="number" name="lado2" required min="1"><br>
			<input class="btn btn-outline-success" type="submit" name="calcular" value="calcular">
			<hr>
			<div class="bg-primary " >
			
			
			<div class="bg-success d-flex justify-content-center align-items-center" style="height: 7vh;">
			<label for="" class="text-white fs-3">Area =  </label>
			<label for=""  class="text-white fs-3">
				<?php 
					echo "  ".$resultadoArea;
				 ?>
			</label>
			</div>
			<hr>
			<div class="bg-success d-flex justify-content-center align-items-center" style="height: 7vh;">
			<label for="" class="text-white fs-3">Perimetro =  </label>
			<label for=""  class="text-white fs-3">
				<?php 
					echo " ". $resultadoPerimetro;
				 ?>
			</label>
			</div>
			</div>
		</form>
      </div>
      
    </div>
  </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>

<?php



if(isset($_GET['resultadoArea'])){
  

?>
<script>


  $(function(){
    $('#exampleModal1').modal('show');
  });


</script>

<?php
};


?>