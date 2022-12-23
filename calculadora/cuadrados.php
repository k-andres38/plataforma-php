<?php 

include 'figurasgeometricas.php';

class Cuadrados extends Figurasgeometricas
{
	public $lado1;
	public $lado2;
	
	function __construct()
	{
		// code...
	}

	public function calcularArea()
	{
		$area = $this->lado1*$this->lado2;		
		return $area;
	}

	public function calcularPerimetro()
	{
		$perimetro = ($this->lado1*2)+($this->lado2*2);
		return $perimetro;
	}
}

 ?>