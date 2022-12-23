<?php 

include 'figurasgeometricas.php';

class circulo extends Figurasgeometricas
{
	public $radio;

	
	function __construct()
	{
		// code...
	}

	public function calcularArea()
	{
		$resultadoArea = $this->radio*$this->radio*(M_PI);

		return $resultadoArea;
	}

	public function calcularPerimetro()
	{
		$resultadoPerimetro = (2*M_PI)* $this->radio;
		return $resultadoPerimetro;
	}
}

 ?>