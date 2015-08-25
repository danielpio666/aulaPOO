<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:06
 */

namespace Aula\Clientes;


abstract class Clientes implements ClienteInterface, Grau, Cobranca
{
    private $codigo;
    private $nome;
    private $endereco;
    private $fone;
    private $grau;
    private $pessoa;
	private $idade;
	private $sexo;
	private $fantasia;
	private $responsavel;
    private $cobranca;

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

    abstract public function getDocumento();
    abstract public function setDocumento($documento);

    public function getFone(){
        return $this->fone;
    }
    public function setFone($fone){
        $this->fone=$fone;
    }

    public function getPessoa(){
        return $this->pessoa;
    }
    public function setPessoa($pessoa){
        $this->pessoa=$pessoa;
    }

    public function getGrau(){
        return $this->grau;
    }

    public function setGrau($grau) {
        $this->grau=$grau;
    }

    public function getCobranca(){
        return $this->cobranca;
    }

    public function setCobranca($cobranca) {
        $this->cobranca=$cobranca;
    }
	
	public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade=$idade;
    }
	
	public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo=$sexo;
    }
	
	public function getFantasia(){
        return $this->fantasia;
    }

    public function setFantasia($fantasia) {
        $this->fantasia=$fantasia;
    }
	
	public function getResponsavel(){
        return $this->responsavel;
    }

    public function setResponsavel($responsavel) {
        $this->responsavel=$responsavel;
    }

}