<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:06
 */

namespace Aula\Clientes;

use Aula\Clientes\interfaceCobranca;
use Aula\Clientes\interfaceGrau;

class classClientes implements interfaceGrau, interfaceCobranca {
    private $codigo;
    private $nome;
    private $endereco;
    private $documento;
    private $fone;
    private $grau;
    private $pessoa;
    private $cobranca;

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

    public function getDocumento(){
        return $this->documento;
    }
    public function setDocumento($documento){
        $this->documento=$documento;
    }

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

}

?>