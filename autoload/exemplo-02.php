<?php

function IncluirClasses($nomeClasse)
{
    if (file_exists("$nomeClasse".".php") === true) {
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("IncluirClasses");
spl_autoload_register(
    function ($nomeClasse) {
        if (file_exists("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
            require_once("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
        }
    }

);

$carro = new DelRey();
$carro->Acelerar(80);
