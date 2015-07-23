<?php

namespace Aula\Clientes\Types;

class classJuridica extends \Aula\Clientes\classClientes {
	private $fantasia;
	private $responsavel;
	
	public function getFantasia(){ 
		return $this->fantasia; 
	}
	public function setFantasia($fantasia){ 
		$this->fantasia=$fantasia; 
	}
	
	public function getResponsavel(){ 
		return $this->responsavel; 
	}
	public function setResponsavel($responsavel){ 
		$this->responsavel=$responsavel; 
	}
}