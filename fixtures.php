<?php
require_once __DIR__ . "/autoload.php";

use Aula\Clientes\MyFixtures\Persistencia;
use Aula\Clientes\Types\Fisica;
use Aula\Clientes\Types\Especial;
use Aula\Clientes\Types\Juridica;

try {

    $config = require_once __DIR__ . "/src/Aula/Clientes/Conexao/config.inc.php";
    $pdo = new \PDO("mysql:host=localhost;", $config['user'], $config['pass'], array(
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ));

    $pdo->exec('CREATE SCHEMA IF NOT EXISTS '. $config['dbname']);
    $pdo->exec('USE ' . $config['dbname']);
    $pdo->exec("CREATE TABLE IF NOT EXISTS clientes (
                            id 	        int(11) NOT NULL AUTO_INCREMENT,
                            nome        varchar(100),
                            endereco    varchar(100),
                            documento   varchar(20),
                            fone        varchar(20),
                            pessoa      char(1),
                            grau        int(1),
							idade		int(3),
							sexo		char(1),
							fantasia	varchar(100),
							responsavel varchar(100),
                            cobranca    varchar(100),
                            PRIMARY KEY (id)
                        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Tabela de Clientes';");

    $cp = new Persistencia($pdo);

    $cliente1 = new Fisica();
    $cliente1->setCodigo(1);
    $cliente1->setNome("Daniel Pio");
    $cliente1->setEndereco("Rua Dr. Gonçalves da Cunha, 987");
    $cliente1->setDocumento("27.777.155-82");
    $cliente1->setFone("(19) 9 9585-9887");
    $cliente1->setPessoa("F");
	$cliente1->setIdade(37);
	$cliente1->setSexo("M");
    $cliente1->setGrau(3);

    $cliente2 = new Juridica();
    $cliente2->setCodigo(3);
    $cliente2->setNome("Maria Aparecida de Jesus - ME");
    $cliente2->setEndereco("Rua QUerubino Soeiro, 1230");
    $cliente2->setDocumento("87.158.754/0001-12");
    $cliente2->setFone("(19) 3554-1544");
    $cliente2->setPessoa("J");
	$cliente2->setFantasia("Fabrica do Bolo");
	$cliente2->setResponsavel("Maria de Jesus");
	$cliente2->setCobranca("Rua XV de Novembro, 122");
    $cliente2->setGrau(4);
	
    $cliente3 = new Especial();
    $cliente3->setCodigo(23);
    $cliente3->setNome("Camila de Souza");
    $cliente3->setEndereco("Rua Bandeirantes, 567");
    $cliente3->setDocumento("435.545.454-12");
	$cliente3->setFone("(19) 3554-1321");
    $cliente3->setPessoa("E");
	$cliente3->setCobranca("Rua Bandeirantes, 600");
    $cliente3->setGrau(5);

    $cliente4 = new Fisica();
    $cliente4->setCodigo(8);
    $cliente4->setNome("Marcos Castilho");
    $cliente4->setEndereco("Rua Das Orquideas, 34");
    $cliente4->setDocumento("21.698.221-8");
    $cliente4->setFone("(19) 9 9855-6574");
    $cliente4->setPessoa("F");
	$cliente4->setIdade(32);
	$cliente4->setSexo("M");
    $cliente4->setGrau(1);

    $cliente5 = new Juridica();
    $cliente5->setCodigo(5);
    $cliente5->setNome("Gabriela Araujo");
    $cliente5->setEndereco("Av da Saudade, 120");
    $cliente5->setDocumento("51.789.556/0001-11");
    $cliente5->setFone("(19) 9 9887-9887");
    $cliente5->setPessoa("J");
	$cliente5->setFantasia("Diversao em Familia");
	$cliente5->setResponsavel("Marcela de Oliveira");
	$cliente5->setCobranca("Rua Padre Tonolli, 236");
    $cliente5->setGrau(3);
	
    $cliente6 = new Especial();
    $cliente6->setCodigo(31);
    $cliente6->setNome("Paola de Almeida");
    $cliente6->setEndereco("Rua Doutor Virgilio, 78");
    $cliente6->setDocumento("344.665.221-16");
	$cliente6->setFone("(19) 3554-4354");
    $cliente6->setPessoa("E");
	$cliente6->setCobranca("Rua Pedra Azul, 57 - Fundos");
    $cliente6->setGrau(4);

    $cliente7 = new Fisica();
    $cliente7->setCodigo(7);
    $cliente7->setNome("Marcelo Souza");
    $cliente7->setEndereco("Rua Pedro Angelo, 122");
    $cliente7->setDocumento("29.658.654-1");
    $cliente7->setFone("(19) 3555-5447");
    $cliente7->setPessoa("F");
	$cliente7->setIdade(42);
	$cliente7->setSexo("M");
    $cliente7->setGrau(2);

    $cliente8 = new Fisica();
    $cliente8->setCodigo(15);
    $cliente8->setNome("Angela Moreira da Silva");
    $cliente8->setEndereco("Av Joaquim Lopes Aguila, 876");
    $cliente8->setDocumento("31.699.471-2");
    $cliente8->setFone("(19) 3571-1477");
    $cliente8->setPessoa("F");
	$cliente8->setIdade(23);
	$cliente8->setSexo("F");
    $cliente8->setGrau(3);

    $cliente9 = new Fisica();
    $cliente9->setCodigo(9);
    $cliente9->setNome("Paula Cunha");
    $cliente9->setEndereco("Rua, Pedro jose Alencar, 64");
    $cliente9->setDocumento("27.258.998-2");
    $cliente9->setFone("(19) 9-8878-2454");
    $cliente9->setPessoa("F");
	$cliente9->setIdade(34);
	$cliente9->setSexo("F");
    $cliente9->setGrau(2);

    $cliente10 = new Fisica();
    $cliente10->setCodigo(10);
    $cliente10->setNome("Mariana Justino");
    $cliente10->setEndereco("Rua Dos Cravos, 7");
    $cliente10->setDocumento("54.658.565-7");
    $cliente10->setFone("(19) 7554-6545");
    $cliente10->setPessoa("F");
	$cliente10->setIdade(26);
	$cliente10->setSexo("F");
    $cliente10->setGrau(1);

    $cp->persist($cliente1);
    $cp->persist($cliente2);
	$cp->persist($cliente3);
    $cp->persist($cliente4);
    $cp->persist($cliente5);
	$cp->persist($cliente6);
    $cp->persist($cliente7);
    $cp->persist($cliente8);
    $cp->persist($cliente9);
    $cp->persist($cliente10);

    $cp->flush();

} catch (\PDOException $ex) {
    die($ex->getMessage());
}