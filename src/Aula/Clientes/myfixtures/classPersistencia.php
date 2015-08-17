<?php

namespace Aula\Clientes\myfixtures;

use Aula\Clientes\classClientes;
use Aula\Clientes\Types\classFisica;

class classPersistencia {

    protected $pdo;
    protected $Clientes = array();

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(classClientes $cliente)
    {
        $this->clientes[] = $cliente;
    }

    public function flush()
    {
        foreach ($this->clientes as $cliente) {

/*            $str_txt = "INSERT INTO clientes (
                  nome, endereco, documento, fone, idade, sexo, pessoa, grau, fantasia, responsavel, cobranca
                ) VALUES (
                  :nome, :endereco, :documento, :fone, :idade, :sexo, :pessoa, :grau, :fantasia, :responsavel, :cobranca
                )"; */


            $nome       = $cliente->getNome();
            $endereco   = $cliente->getEndereco();
            $documento  = $cliente->getDocumento();
            $fone       = $cliente->getFone();
            $pessoa     = $cliente->getPessoa();
            $grau       = $cliente->getGrau();

            if ($cliente->getPessoa() == "F") {
                $idade = $cliente->getIdade();
                $sexo  = $cliente->getSexo();

                $str_txt = "INSERT INTO clientes ( nome, endereco, documento, fone, idade, sexo, pessoa, grau ) VALUES ( '$nome', '$endereco', '$documento',
                            '$fone', '$idade', '$sexo', '$pessoa', '$grau')";
            } elseif ($cliente->getPessoa() == "J") {
                $fantasia    = $cliente->getFantasia();
                $responsavel = $cliente->getResponsavel();
                $cobranca    = $cliente->getCobranca();

                $str_txt = "INSERT INTO clientes ( nome, endereco, documento, fone, pessoa, grau, fantasia, responsavel, cobranca ) VALUES ('$nome',
                            '$endereco', '$documento', '$fone', '$pessoa', '$grau', '$fantasia', '$responsavel', '$cobranca' )";
            } elseif ($cliente->getPessoa() == "E") {
                $cobranca    = $cliente->getCobranca();

                $str_txt = "INSERT INTO clientes ( nome, endereco, documento, fone, pessoa, grau, cobranca ) VALUES ('$nome',
                            '$endereco', '$documento', '$fone', '$pessoa', '$grau', '$cobranca' )";
            }

            $this->pdo->beginTransaction();
            $this->pdo->query($str_txt);
            $this->pdo->commit();

        }
    }

}