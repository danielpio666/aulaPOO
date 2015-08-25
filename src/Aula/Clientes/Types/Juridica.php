<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:15
 */

namespace Aula\Clientes\Types;

use Aula\Clientes\Clientes;

class Juridica extends Clientes {
    private $cnpj;

    public function getDocumento(){
        return $this->cnpj;
    }
    public function setDocumento($documento){
        $this->cnpj = $documento;
    }

}