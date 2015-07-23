<?php

namespace Aula\Clientes\Types;

use \Aula\Clientes\classClientes;

class classFisica extends classClientes {
	private $idade;
	private $sexo;

	public function getIdade(){
		return $this->idade;
	}
	public function setIdade($idade){
		$this->idade=$idade;
	}

	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo=$sexo;
	}

}