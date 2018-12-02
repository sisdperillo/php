<?php

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function getLogradouro():string
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getNumero():int
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getCidade():string
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function __construct($logradouro, $numero, $cidade)
    {
        $this->setLogradouro($logradouro);
        $this->setNumero($numero);
        $this->setCidade($cidade);
    }

    public function __destruct()
    {
        echo "<br /> Classe destruida";
    }

    public function __toString()
    {
        return $this->getLogradouro().", ".$this->getNumero()." - ".$this->getCidade();
    }
}

$meuEndereco = new Endereco("Rua Candido Ferreira Dias", 1550, "São José dos Campos");

echo $meuEndereco;
