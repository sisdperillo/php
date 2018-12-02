<?php

$valor = 10;

//& = passagem de parametro por referencia.

function TrocarValor(&$valor){
    $valor = $valor * 10;

    return $valor;
}

echo $valor. "<br />";
echo TrocarValor(50). "<br />";
echo $valor. "<br />";

?>