<?php
require_once __DIR__ . "/../autoload.php";

use Aula\Clientes\Conexao\Connect;

$config = require_once __DIR__ . '/../src/Aula/Clientes/Conexao/config.inc.php';
$conn   = new Connect($config);
$conexao = $conn->getPDO();

$sql		= "SELECT * FROM clientes WHERE id = '$cod' ";
$stmt 	 	= $conexao->query($sql);
$cliente	= $stmt->fetch(\PDO::FETCH_ASSOC);

$pessoa = array('F' => 'Pessoa Fisica', 'J' => 'Pessoa Juridica', 'E' => 'Cliente Especial');

?>

<div class="row-fluid">
    <div class="offset1 span10">
        <div class="well">

            <h1> Cadastro de Clientes - <?=$pessoa[$cliente['pessoa']]?></h1>

            <div class="row-fluid">
                <div class="span1">Codigo..... :</div>
                <div class="span9"><strong><?=$cliente['id']?></strong></div>
            </div>

            <div class="row-fluid">
                <div class="span1">Nome....... :</div>
                <div class="span9"><strong><?=$cliente['nome']?></strong></div>
            </div>

            <div class="row-fluid">
                <div class="span1">Endereço. :</div>
                <div class="span9"><strong><?=$cliente['endereco']?></strong></div>
            </div>

            <div class="row-fluid">
                <? if ($cliente['pessoa'] == 'F') { ?>
                    <div class="span1">CPF........ :</div>
                <? }  elseif ($cliente['pessoa'] == 'J') { ?>
                    <div class="span1">CNPJ....... :</div>
                <? }  elseif ($cliente['pessoa'] == 'E') { ?>
                    <div class="span1">CNPJ/CPF... :</div>
                <? } ?>
                <div class="span9"><strong><?=$cliente['documento']?></strong></div>
            </div>

            <div class="row-fluid">
                <div class="span1">Fone....... :</div>
                <div class="span9"><strong><?=$cliente['fone']?></strong></div>
            </div>

            <? if ($cliente['pessoa'] == 'F') { ?>

                <div class="row-fluid">
                    <div class="span1">Idade...... :</div>
                    <div class="span9"><strong><?=$cliente['idade']?></strong></div>
                </div>

                <div class="row-fluid">
                    <div class="span1">Sexo....... :</div>
                    <div class="span9"><strong><?=$cliente['sexo']?></strong></div>
                </div>

            <? } ?>

            <? if ($cliente['pessoa'] == 'J') { ?>

                <div class="row-fluid">
                    <div class="span1">Fantasia... :</div>
                    <div class="span9"><strong><?=$cliente['fantasia']?></strong></div>
                </div>

                <div class="row-fluid">
                    <div class="span1">Responsavel :</div>
                    <div class="span9"><strong><?=$cliente['responsavel']?></strong></div>
                </div>

            <? } ?>

            <? if ($cliente['pessoa'] == 'E') { ?>

                <div class="row-fluid">
                    <div class="span1">Cobranca... :</div>
                    <div class="span9"><strong><?=$cliente['cobranca']?></strong></div>
                </div>

            <? } ?>

        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="offset1 span10" align="center">
        <button type="button" class="btn  btn-primary" data-toggle="button" onClick="location.href='home'">Voltar</button>
    </div>
</div>