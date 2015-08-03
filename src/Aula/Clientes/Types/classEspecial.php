<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:11
 */

namespace Aula\Clientes\Types;

use Aula\Clientes\classClientes;

class classEspecial extends classClientes {
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