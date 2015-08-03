<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 03/08/2015
 * Time: 08:08
 */

namespace Aula\Clientes;

interface interfaceCliente {
    public function getCodigo();
    public function getNome();
    public function getEndereco();
    public function getDocumento();
    public function getFone();
    public function getPessoa();
    public function getGrau();
}

?>