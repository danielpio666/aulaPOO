﻿<?php

require_once "class_cliente.php";

$cliente = array();

$novo_cliente = new clientes();
$novo_cliente->setCodigo(1);
$novo_cliente->setNome("Daniel Pio");
$novo_cliente->setEndereco("Rua Dr. Gonçalves da Cunha, 987");
$novo_cliente->setCpf("27.777.155-82");
$novo_cliente->setFone("(19) 9 9585-9887");
$novo_cliente->setIdade(37);
$novo_cliente->setSexo("M");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(3);
$novo_cliente->setNome("Maria Aparecida de Jesus");
$novo_cliente->setEndereco("Rua QUerubino Soeiro, 1230");
$novo_cliente->setCpf("13.754.355-12");
$novo_cliente->setFone("(19) 3554-1544");
$novo_cliente->setIdade(32);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(2);
$novo_cliente->setNome("Pedro Jose de Carcalho");
$novo_cliente->setEndereco("Rua XV de Novembro, 45");
$novo_cliente->setCpf("14.658.698-10");
$novo_cliente->setFone("(19) 3571-6558");
$novo_cliente->setIdade(27);
$novo_cliente->setSexo("M");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(8);
$novo_cliente->setNome("Marcos Castilho");
$novo_cliente->setEndereco("Rua Das Orquideas, 34");
$novo_cliente->setCpf("21.698.221-8");
$novo_cliente->setFone("(19) 9 9855-6574");
$novo_cliente->setIdade(19);
$novo_cliente->setSexo("M");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(5);
$novo_cliente->setNome("Gabriela Araujo");
$novo_cliente->setEndereco("Av da Saudade, 120");
$novo_cliente->setCpf("25.698.556-11");
$novo_cliente->setFone("(19) 9 9887-9887");
$novo_cliente->setIdade(26);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(12);
$novo_cliente->setNome("Tais de Paula");
$novo_cliente->setEndereco("Rua General Osorio, 29");
$novo_cliente->setCpf("32.247.658-1");
$novo_cliente->setFone("(19) 3554-7887");
$novo_cliente->setIdade(30);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(7);
$novo_cliente->setNome("Marcelo Souza");
$novo_cliente->setEndereco("Rua Pedro Angelo, 122");
$novo_cliente->setCpf("29.658.654-1");
$novo_cliente->setFone("(19) 3555-5447");
$novo_cliente->setIdade(32);
$novo_cliente->setSexo("M");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(15);
$novo_cliente->setNome("Angela Moreira da Silva");
$novo_cliente->setEndereco("Av Joaquim Lopes Aguila, 876");
$novo_cliente->setCpf("31.699.471-2");
$novo_cliente->setFone("(19) 3571-1477");
$novo_cliente->setIdade(29);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(9);
$novo_cliente->setNome("Paula Cunha");
$novo_cliente->setEndereco("Rua, Pedro jose Alencar, 64");
$novo_cliente->setCpf("27.258.998-2");
$novo_cliente->setFone("(19) 9-8878-2454");
$novo_cliente->setIdade(23);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

$novo_cliente = new clientes();
$novo_cliente->setCodigo(10);
$novo_cliente->setNome("Mariana Justino");
$novo_cliente->setEndereco("Rua Dos Cravos, 7");
$novo_cliente->setCpf("54.658.565-7");
$novo_cliente->setFone("(19) 7554-6545");
$novo_cliente->setIdade(18);
$novo_cliente->setSexo("F");
$cliente[] = $novo_cliente;

?>