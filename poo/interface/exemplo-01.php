<?php

interface Veiculo
{
    public function Acelerar($velocidade);
    public function Frenar($velocidade);
    public function TrocarMarcha($marcha);
}

class Civic implements Veiculo
{
    public function Acelerar($velocidade)
    {
        echo "O veiculo acelerou até " .$velocidade. " km/h <br />";
    }

    public function Frenar($velocidade)
    {
        echo "O veiculo frenou até " .$velocidade. " km/h  <br />";
    }

    public function TrocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha " .$marcha. " <br />";
    }
}

$carro = new Civic();

$carro->Acelerar(180);
$carro->Frenar(90);
$carro->TrocarMarcha(5);
