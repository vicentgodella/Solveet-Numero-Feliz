<?php

class NumeroFeliz {
	private $numeros_calculados = array();

	public function getMayor($number)
	{
		for($i = $number-1; $i > 0; $i--)
		{
			$this->numeros_calculados = array();

			if($this->isFeliz($i))
				return $i;
		}

		return null;
	}

	public function isFeliz($number)
	{
		if($number == 1)
			return true;

		if(in_array($number, $this->numeros_calculados))
			return false;

		$this->numeros_calculados[] = $number;

		return $this->isFeliz($this->getSumaDeCuadrados($number));

	}

	public function getSumaDeCuadrados($number)
	{
		$array_cuadrados = array_map(function($i){
				return $i*$i;
			}, $this->getSumandos($number)
		);

		return array_sum($array_cuadrados);
	}

	public function getSumandos($number)
	{
		if($number < 10){
			return array($number);
		}else{
			return array_merge($this->getSumandos(floor($number/10)), array($number % 10));
		}
	}
}

?>