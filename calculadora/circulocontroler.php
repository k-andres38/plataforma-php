<?php

if (isset($_GET['radio'])) {
	
	include "circulos.php";

	$mycirculo = new circulo();
	
	//$lado1 = $_GET['lado1'];
	//$lado2 = $_GET['lado2'];

	$mycirculo->radio = $_GET['radio'];
	$resultadoArea = $mycirculo->calcularArea();
	$resultadoPerimetro = $mycirculo->calcularPerimetro();

	if (isset($resultadoArea) && isset($resultadoPerimetro)) {
		header ("Location: ../calculadora/index.php?resultadoA=".$resultadoArea."&resultadoP=".$resultadoPerimetro);	
	} else {
		header ("Location: index.html?error=404");
	}	
}
?>