<?php
usort($cliente, ($op == 'D' ? 'pes_desc' : 'pes_asc'));
$pessoa = array('F' => 'Pessoa Fisica', 'J' => 'Pessoa Juridica', 'E' => 'Cliente Especial');
?>
<div class="row-fluid">
    <div class="offset1 span10">
    	<div class="well">
        
            <h1> Cadastro de Clientes - <?=$pessoa[$cliente[$cod]->getPessoa()]?></h1>
            
            <div class="row-fluid">
                <div class="span1">Codigo..... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getCodigo()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Nome....... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getNome()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Endereço. :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getEndereco()?></strong></div>
            </div>
            
            <div class="row-fluid">
            	<? if ($cliente[$cod]->getPessoa() == 'F') { ?>
                	<div class="span1">CPF........ :</div>
                <? }  elseif ($cliente[$cod]->getPessoa() == 'J') { ?>
                	<div class="span1">CNPJ....... :</div>
                <? }  elseif ($cliente[$cod]->getPessoa() == 'E') { ?>
                   	<div class="span1">CNPJ/CPF... :</div>
                <? } ?>    
                <div class="span9"><strong><?=$cliente[$cod]->getDocumento()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Fone....... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getFone()?></strong></div>
            </div>
            
            <? if ($cliente[$cod]->getPessoa() == 'F') { ?>
    
            <div class="row-fluid">
                <div class="span1">Idade...... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getIdade()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Sexo....... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getSexo()?></strong></div>
            </div>
            
            <? } ?>
            
            <? if ($cliente[$cod]->getPessoa() == 'J') { ?>
    
            <div class="row-fluid">
                <div class="span1">Fantasia... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getFantasia()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Responsavel :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getResponsavel()?></strong></div>
            </div>
            
            <? } ?>
            
            <? if ($cliente[$cod]->getPessoa() == 'E') { ?>
    
            <div class="row-fluid">
                <div class="span1">Cobranca... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getCobranca()?></strong></div>
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