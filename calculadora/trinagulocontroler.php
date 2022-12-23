<?php

if (isset($_GET['base']) && isset($_GET['altura'])) {
	
	include "triangulos.php";

	$myTriangulo = new triangulo();
	

	$myTriangulo->base = $_GET['base'];
	$myTriangulo->altura = $_GET['altura'];
	$resultadoArea = $myTriangulo->calcularArea();
	$resultadoPerimetro = $myTriangulo->calcularPerimetro();

	if (isset($resultadoArea) && isset($resultadoPerimetro)) {
		header ("location: ../calculadora/index.php?resultado_area=".$resultadoArea."&resultado_perimetro=".$resultadoPerimetro);	
	} else {
		header ("location: index.html?error=404");
	}	
}
?>