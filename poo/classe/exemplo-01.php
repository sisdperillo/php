<?php

class Pessoa
{
    public $nome;

    public function Falar():string
    {
        return "Meu nome é " .$this->nome. "<br />";
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Diego Perillo";

echo $pessoa->Falar();
