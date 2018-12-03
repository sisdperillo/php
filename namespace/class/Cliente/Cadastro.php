<?php

namespace Cliente;

class Cadastro extends \Cadastro
{
    public function RegistrarVenda()
    {
        echo "Venda registrada para o cliente " . $this->getNome();
    }
}
