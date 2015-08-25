<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:14
 */

namespace Aula\Clientes\Types;

use Aula\Clientes\Clientes;

class Fisica extends Clientes {
    private $cpf;
	
    public function getDocumento(){
        return $this->cpf;
    }
    public function setDocumento($documento){
        $this->cpf = $documento;
    }
}