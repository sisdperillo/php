<?php

interface Veiculo
{
    public function Acelerar($velocidade);
    public function Frenar($velocidade);
    public function TrocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
    public function Acelerar($velocidade)
    {
        echo "O veiculo acelerou até " .$velocidade. " km/h <br />";
    }

    public function Frenar($velocidade)
    {
        echo "O veiculo frenou até " .$velocidade. " km/h <br />";
    }

    public function TrocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha " .$marcha. " <br />";
    }
}
