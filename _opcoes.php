<?php
$atual     = (!isset($_GET['pagina']) ? 'home' : $_GET['pagina']);
$permissao = array('home','404','exibir');
if (substr_count($atual, '!') > 0 ) {
	$atual  = explode('!', $atual);
	$pagina = (file_exists($atual[0].'.php') && in_array($atual[0], $permissao) ? $atual[0].'.php' : '404' );
	$op     = $atual[1];
	$cod 	= $atual[2];
} else {
	$pagina = (file_exists($atual.'.php') && in_array($atual, $permissao) ? $atual.'.php' : '404' );
	$op     = 'A';
	$cod 	= '';
}

include $pagina;
?>
