<?php

namespace Aula\Clientes\Conexao;

use PDO;

class Connect {
    /**
     * @var \PDO
     */
    protected $pdo;
    public function __construct(array $config = array())
    {
        try {
            $this->pdo = new \PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}",
                $config['user'],
                $config['pass'],
                array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                )
            );
        } catch(\PDOException $ex) {
            die('Erro ao conectar: ' . $ex->getMessage());
        }
    }

    /**
     * @return \PDO Objeto PDO
     */
    public function getPDO()
    {
        return $this->pdo;
    }
}