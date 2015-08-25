<?php

namespace Aula\Clientes\MyFixtures;

use Aula\Clientes\ClienteInterface;

class Persistencia {

    protected $pdo;
    protected $clientes = array();

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(ClienteInterface $cliente)
    {
        $this->clientes[] = $cliente;
    }

    public function flush()
    {
        $stmt = $this->pdo->prepare("INSERT INTO clientes ( nome, endereco, documento, fone, pessoa, grau,
            cobranca,sexo,idade,fantasia,responsavel ) VALUES (:nome,:endereco,:documento,:fone,:pessoa,:grau,:cobranca,:sexo,:idade,:fantasia,:responsavel)");

        foreach ($this->clientes as $cliente) {
            $nome        = $cliente->getNome();
            $endereco    = $cliente->getEndereco();
            $documento   = $cliente->getDocumento();
            $fone        = $cliente->getFone();
            $pessoa      = $cliente->getPessoa();
            $grau        = $cliente->getGrau();
            $cobranca    = $cliente->getCobranca();
			$sexo 		 = $cliente->getSexo();
			$idade		 = $cliente->getIdade();
			$fantasia	 = $cliente->getFantasia();
			$responsavel = $cliente->getResponsavel();

            $stmt->bindParam('nome', $nome);
            $stmt->bindParam('endereco', $endereco);
            $stmt->bindParam('documento', $documento);
            $stmt->bindParam('fone', $fone);
            $stmt->bindParam('pessoa', $pessoa);
            $stmt->bindParam('grau', $grau);
            $stmt->bindParam('cobranca', $cobranca);
			$stmt->bindParam('sexo', $sexo);
            $stmt->bindParam('idade', $idade);
			$stmt->bindParam('fantasia', $fantasia);
			$stmt->bindParam('responsavel', $responsavel);

            $stmt->execute();
        }
    }
}