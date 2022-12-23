<?php 

/**
 * 
 */
abstract class Figurasgeometricas
{
	
	private $area;
	private $perimetro;
	public $resultado;

	function __construct()
	{
		// code...
	}

	abstract public function calcularArea();
	

	abstract public function calcularPerimetro();	

}

 ?>