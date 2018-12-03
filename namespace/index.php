<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Joao");
$cad->setEmail("diego@php.com");
$cad->setSenha("123456");

echo $cad->RegistrarVenda();
