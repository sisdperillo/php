<?php

/*
require_once("Automovel.php");
require_once("DelRey.php");
*/

/*
    Automaticamente ele irá carregar todas as dependencias de classes que utilizam no new
*/

function __autoload($nomeClasse)
{
    require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->Acelerar(80);
