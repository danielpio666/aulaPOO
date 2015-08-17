<?php
define('CLASS_DIR', "C:/xampp/htdocs/Trabalhos/Aula/AulaPOO/src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

date_default_timezone_set('America/Sao_Paulo');

use Aula\Clientes\classClientes;
use Aula\Clientes\conexao\connect;
use Aula\Clientes\myfixtures\classPersistencia;

$config = include 'Aula/Clientes/conexao/config.inc.php';
$conn   = new connect($config);
$cp = new classPersistencia($conn->getPDO());

$cliente1 = new \Aula\Clientes\Types\classFisica();
$cliente1->setCodigo(1);
$cliente1->setNome("Daniel Pio");
$cliente1->setEndereco("Rua Dr. Gonçalves da Cunha, 987");
$cliente1->setDocumento("27.777.155-82");
$cliente1->setFone("(19) 9 9585-9887");
$cliente1->setIdade(37);
$cliente1->setSexo("M");
$cliente1->setPessoa("F");
$cliente1->setGrau(3);

$cliente2 = new Aula\Clientes\Types\classJuridica();
$cliente2->setCodigo(3);
$cliente2->setNome("Maria Aparecida de Jesus - ME");
$cliente2->setEndereco("Rua QUerubino Soeiro, 1230");
$cliente2->setDocumento("87.158.754/0001-12");
$cliente2->setFone("(19) 3554-1544");
$cliente2->setPessoa("J");
$cliente2->setFantasia("Salgadinhos DMais");
$cliente2->setResponsavel("Teresa de Jesus Pastame");
$cliente2->setGrau(4);

$cliente3 = new Aula\Clientes\Types\classEspecial();
$cliente3->setCodigo(2);
$cliente3->setNome("Pedro Jose de Carcalho");
$cliente3->setEndereco("Rua XV de Novembro, 45");
$cliente3->setDocumento("14.658.698-10");
$cliente3->setFone("(19) 3571-6558");
$cliente3->setPessoa("E");
$cliente3->setGrau(5);
$cliente3->setCobranca("Av. 29 de Agosto, 120 - Centro - Leme/SP");

$cliente4 = new Aula\Clientes\Types\classFisica();
$cliente4->setCodigo(8);
$cliente4->setNome("Marcos Castilho");
$cliente4->setEndereco("Rua Das Orquideas, 34");
$cliente4->setDocumento("21.698.221-8");
$cliente4->setFone("(19) 9 9855-6574");
$cliente4->setIdade(19);
$cliente4->setSexo("M");
$cliente4->setPessoa("F");
$cliente4->setGrau(1);

$cliente5 = new Aula\Clientes\Types\classJuridica();
$cliente5->setCodigo(5);
$cliente5->setNome("Gabriela Araujo");
$cliente5->setEndereco("Av da Saudade, 120");
$cliente5->setDocumento("51.789.556/0001-11");
$cliente5->setFone("(19) 9 9887-9887");
$cliente5->setPessoa("J");
$cliente5->setFantasia("Aluguel Das Sacolas");
$cliente5->setResponsavel("Camila Breha");
$cliente5->setGrau(3);

$cliente6 = new Aula\Clientes\Types\classEspecial();
$cliente6->setCodigo(12);
$cliente6->setNome("Tais de Paula");
$cliente6->setEndereco("Rua General Osorio, 29");
$cliente6->setDocumento("32.247.658-1");
$cliente6->setFone("(19) 3554-7887");
$cliente6->setPessoa("E");
$cliente6->setCobranca("Av. 7 de Setembro, 210 - Barra Funda - Leme/SP");
$cliente6->setGrau(4);

$cliente7 = new Aula\Clientes\Types\classFisica();
$cliente7->setCodigo(7);
$cliente7->setNome("Marcelo Souza");
$cliente7->setEndereco("Rua Pedro Angelo, 122");
$cliente7->setDocumento("29.658.654-1");
$cliente7->setFone("(19) 3555-5447");
$cliente7->setIdade(32);
$cliente7->setSexo("M");
$cliente7->setPessoa("F");
$cliente7->setGrau(2);

$cliente8 = new Aula\Clientes\Types\classFisica();
$cliente8->setCodigo(15);
$cliente8->setNome("Angela Moreira da Silva");
$cliente8->setEndereco("Av Joaquim Lopes Aguila, 876");
$cliente8->setDocumento("31.699.471-2");
$cliente8->setFone("(19) 3571-1477");
$cliente8->setIdade(29);
$cliente8->setSexo("F");
$cliente8->setPessoa("F");
$cliente8->setGrau(3);

$cliente9 = new Aula\Clientes\Types\classFisica();
$cliente9->setCodigo(9);
$cliente9->setNome("Paula Cunha");
$cliente9->setEndereco("Rua, Pedro jose Alencar, 64");
$cliente9->setDocumento("27.258.998-2");
$cliente9->setFone("(19) 9-8878-2454");
$cliente9->setIdade(23);
$cliente9->setSexo("F");
$cliente9->setPessoa("F");
$cliente9->setGrau(2);

$cliente10 = new Aula\Clientes\Types\classFisica();
$cliente10->setCodigo(10);
$cliente10->setNome("Mariana Justino");
$cliente10->setEndereco("Rua Dos Cravos, 7");
$cliente10->setDocumento("54.658.565-7");
$cliente10->setFone("(19) 7554-6545");
$cliente10->setIdade(18);
$cliente10->setSexo("F");
$cliente10->setPessoa("F");
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

$conexao = $conn->getPDO();

?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Controle de Clientes em POO">
    <meta name="author" content="Daniel Pio">
    <title>Controle de Clientes POO</title>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="#">Fase 3</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="home">Home</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <? include "_opcoes.php"; ?>
</div>

<nav class="navbar navbar-fixed-bottom">
    <div class="navbar-default" align="center">
        	<span class="col-lg-12">
	           	&bull; Programação POO &bull; Todos os Diretos Reservados &bull; &copy; <?=date('Y')?> &bull;
            </span>
    </div>
</nav>
</body>
</html>

<?
function pes_asc($obj1, $obj2) {
    if ($obj1->getCodigo() < $obj2->getCodigo()) {
        return -1;
    } elseif ($obj1->getCodigo() > $obj2->getCodigo()) {
        return +1;
    }
    return 0;
}

function pes_desc($obj1, $obj2) {
    if ($obj1->getCodigo() > $obj2->getCodigo()) {
        return -1;
    } elseif ($obj1->getCodigo() < $obj2->getCodigo()) {
        return +1;
    }
    return 0;
}
?>
