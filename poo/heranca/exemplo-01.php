<?php

class Pessoa
{
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function VerDados()
    {
        echo $this->nome  ."<br />";
        echo $this->idade ."<br />";
        echo $this->senha ."<br />";
    }
}

class Programador extends Pessoa
{
    public function VerDados()
    {
        echo get_class($this) ."<br />";

        echo $this->nome  ."<br />";
        echo $this->idade ."<br />";
        echo $this->senha ."<br />";
    }
}

$objeto = new Programador();

$objeto->VerDados();
