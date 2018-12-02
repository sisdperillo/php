<?php

abstract class Animal
{
    public function Som()
    {
        return "Som do Animal";
    }

    public function Mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function Som()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function Som()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function Som()
    {
        return "Canta";
    }

    public function Mover()
    {
        return "Voa e " . parent::Mover();
    }
}


$pluto = new Cachorro();
echo $pluto->Som() ."<br />";
echo $pluto->Mover() ."<br />";

echo "------------------------------------<br />";

$garfield = new Gato();
echo $garfield->Som() ."<br />";
echo $garfield->Mover() ."<br />";

echo "------------------------------------<br />";

$passaro = new Passaro();
echo $passaro->Som() ."<br />";
echo $passaro->Mover() ."<br />";
