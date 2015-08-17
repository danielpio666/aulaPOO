<?php
$ordem = ($op == 'D' ? 'DESC' : 'ASC');

$sql_txt = "SELECT * FROM clientes ORDER BY id $ordem";
$conexao->query($sql_txt);

print_r($conexao);

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
                <th>Pessoa</th>
                <th>CPF / CNPJ</th>
                <th>Grau</th>
                <th>Exibir</th>
            </tr>
            </thead>
            <?

            while( $cli = $conexao->fetch(\PDO::FETCH_ASSOC)) {
//            foreach($conexao as $cli) {

                echo "<tr>";
                echo "<td>".$cli['id']."</td>";
                echo "<td>".$cli['nome']."</td>";
                echo "<td>".$cli['fone']."</td>";
                echo "<td>".$cli['pessoa']."</td>";
                echo "<td>".$cli['documento']."</td>";
                echo "<td>";
                for ($s=1;$s<=$cli['grau'];$s++) {
                    echo "<i class='icon-star'></i>";
                }
                echo "</td>";
                echo "<td><a href='exibir!$op!$key'><i class='icon-search'></i></span></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>