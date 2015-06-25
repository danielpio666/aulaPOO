<?php
usort($cliente, ($op == 'D' ? 'pes_desc' : 'pes_asc'));
?>
<div class="row-fluid">
    <div class="offset1 span10">
    	<div class="well">
        
            <h1> Cadastro de Clientes </h1>
            
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
                <div class="span1">CPF........ :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getCpf()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Fone....... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getFone()?></strong></div>
            </div>
    
            <div class="row-fluid">
                <div class="span1">Idade...... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getIdade()?></strong></div>
            </div>
            
            <div class="row-fluid">
                <div class="span1">Sexo....... :</div>
                <div class="span9"><strong><?=$cliente[$cod]->getSexo()?></strong></div>
            </div>
        
        </div>
	</div>
</div>
<div class="row-fluid">
    <div class="offset1 span10" align="center">
		<button type="button" class="btn  btn-primary" data-toggle="button" onClick="location.href='home'">Voltar</button>
	</div>
</div>