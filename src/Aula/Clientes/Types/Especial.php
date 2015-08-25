<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:15
 */

namespace Aula\Clientes\Types;

use Aula\Clientes\Clientes;

class Especial extends Clientes {
    private $cpf;
	
    public function getDocumento(){
        return $this->cpf;
    }
    public function setDocumento($documento){
        $this->cpf = $documento;
    }
}