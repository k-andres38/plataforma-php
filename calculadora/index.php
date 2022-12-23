<?php
session_start();

$rol= ( isset($_SESSION['estado'] )) ? $_SESSION['estado'] : '';
$id=( isset($_SESSION['id'] )) ? $_SESSION['id'] : '';
if(!$id){
    header("Location: ../public/index.php");
    session_destroy();
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


	<header>
		
		<nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end   ">
		<h3 class="text-start text-white">Platafoma Virtual</h3>
			<ul class="d-flex flex-direccion mb-0 " style="list-style:none">

				<li><a href="../public/plataforma.php" class="btn btn-primary">Atras</a></li>


			</ul>

		</nav>

	</header>
	<section class="d-flex justify-content-around flex-wrap  my-5 ">
		<div class="card" style="width: 18rem;">
			<img src="../calculadora/imagenes/cuadrado.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Cuadrado</h5>
				<p class="card-text">Hacer cálculo del cuadrado</p>
				<div class="m-3"><?php include '../calculadora/views/cuadrado.php'; ?></div>
			</div>
		</div>
		
			<div class="card" style="width: 18rem;">
				<img src="../calculadora/imagenes/circulo.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Circulo</h5>
					<p class="card-text">Hacer cálculo del Cículo</p>
					<div class="m-3"><?php include '../calculadora/views/circulo.php'; ?></div>
				</div>
			</div>

			
				<div class="card" style="width: 18rem;">
					<img src="../calculadora/imagenes/triangulo.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Triangulo</h5>
						<p class="card-text">Hacer cálculo del Triángulo</p>
						<div class="m-3"><?php include '../calculadora/views/triangulo.php'; ?></div>
					</div>
				</div>





	</section>
</body>

</html>