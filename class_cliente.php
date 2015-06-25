<?php

class clientes 
{
	private $codigo;
	private $nome;
	private $endereco;
	private $cpf;
	private $fone;
	private $idade;
	private $sexo;
	
	public function __construct() { }
	
	public function getCodigo(){ 
		return $this->codigo; 
	}
	public function setCodigo($codigo){ 
		$this->codigo=$codigo; 
	}

	public function getNome(){ 
		return $this->nome; 
	}
	public function setNome($nome){ 
		$this->nome=$nome; 
	}
	
	public function getEndereco(){ 
		return $this->endereco; 
	}
	public function setEndereco($endereco){ 
		$this->endereco=$endereco; 
	}
	
	public function getCpf(){ 
		return $this->cpf; 
	}
	public function setCpf($cpf){ 
		$this->cpf=$cpf; 
	}
	
	public function getFone(){ 
		return $this->fone; 
	}
	public function setFone($fone){ 
		$this->fone=$fone; 
	}
	
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
?>