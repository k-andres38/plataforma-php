<?php

if (isset($_GET['lado1']) && isset($_GET['lado2'])) {
	
	include "cuadrados.php";

	$myCuadrado = new Cuadrados();
	
	//$lado1 = $_GET['lado1'];
	//$lado2 = $_GET['lado2'];

	$myCuadrado->lado1 = $_GET['lado1'];
	$myCuadrado->lado2 = $_GET['lado2'];
	$resultadoArea = $myCuadrado->calcularArea();
	$resultadoPerimetro = $myCuadrado->calcularPerimetro();

	if (isset($resultadoArea) && isset($resultadoPerimetro)) {
		header ("location: ../calculadora/index.php?resultadoArea=".$resultadoArea."&resultadoPerimetro=".$resultadoPerimetro);	

		
	} else {
		header ("location: index.html?error=404");
	}	
}
?>