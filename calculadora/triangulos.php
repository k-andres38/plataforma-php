<?php 

include 'figurasgeometricas.php';

class triangulo extends Figurasgeometricas


{
	public $altura;
	public $base;
	
	function __construct()
	{
		// code...
	}

	public function calcularArea()
	{
		$resultadoArea = ($this->base*$this->altura)/2;

		return $resultadoArea;
	}

	public function calcularPerimetro()
	{
		$resultadoPerimetro = $this->base*3;
		return $resultadoPerimetro;
	}
}
 ?>