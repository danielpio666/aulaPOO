<?php
usort($cliente, ($op == 'D' ? 'pes_desc' : 'pes_asc'));
?>
    
<div class="row-fluid">
    <div class="offset1 span10">
        <table class="table table-hover">
            <thead>
            	<tr>
                	<th> Listagem de Clientes </th>
                </tr>
                <tr>
                    <th>
                        ID
                        <a href="home!D!0"><i class="icon-arrow-up"></i></a>
                        <a href="home!A!0"><i class="icon-arrow-down"></i></a>
                    </th>
                    <th>Nome</th>
                    <th>Fone</th>
                    <th>Exibir</th>
                </tr>
            </thead>
            <?
    
            foreach($cliente as $key => &$cli) {
                echo "<tr>";
                echo "<td>".$cli->getCodigo()."</td>";
                echo "<td>".$cli->getNome()."</td>";
                echo "<td>".$cli->getFone()."</td>";
                echo "<td><a href='exibir!$op!$key'>Ver</a></td>";
                echo "</tr>";
            }
            ?>	
        </table>
    </div>
</div>