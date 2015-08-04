<?php
define('CLASS_DIR', "C:/Apache/htdocs/Aula/AulaPOO/src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

date_default_timezone_set('America/Sao_Paulo');
include_once "inc_clientes.php";
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
