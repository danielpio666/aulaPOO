﻿<?php

class juridica extends clientes implements Grau {
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