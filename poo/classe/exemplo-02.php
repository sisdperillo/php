<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor():float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getAno():int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function Exibir()
    {
        return array(
            'modelo' => $this->getModelo(),
            'motor' => $this->getMotor(),
            'ano' => $this->getAno()
        );
    }
}

$carro = new Carro();

$carro->setModelo("Honda Civic XLS");
$carro->setMotor("1.8");
$carro->setAno(2010);

print_r($carro->Exibir());

echo "<br />";

var_dump($carro->Exibir());
