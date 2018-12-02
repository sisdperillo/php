<?php

function Funcao($callback)
{
    //Processo lento

    $callback();
}

Funcao(function () {
    echo "Terminou a execução";
});
