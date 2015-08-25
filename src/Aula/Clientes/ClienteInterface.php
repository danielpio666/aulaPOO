<?php

namespace Aula\Clientes;

interface ClienteInterface {
    public function getCodigo();
    public function getNome();
    public function getEndereco();
    public function getDocumento();
    public function getFone();
    public function getPessoa();
    public function getGrau();
	public function getIdade();
    public function getSexo();
	public function getFantasia();
	public function getResponsavel();
	
	
}

?>