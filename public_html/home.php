<?php
require_once __DIR__ . "/../autoload.php";

use Aula\Clientes\Conexao\Connect;

$config = require_once __DIR__ . '/../src/Aula/Clientes/Conexao/config.inc.php';
$conn   = new Connect($config);
$conexao = $conn->getPDO();
$ordem = ($op == 'D' ? 'DESC' : 'ASC');

$sql = "SELECT * FROM clientes ORDER BY id $ordem";
$stmt = $conexao->query($sql);

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
            <?php

            while( $cli = $stmt->fetch(\PDO::FETCH_ASSOC)) {
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
                echo "<td><a href='exibir!$op!{$cli['id']}'><i class='icon-search'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>