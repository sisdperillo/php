<?php

function Ola()
{
	$argumentos = func_get_args();
	return $argumentos;
}


var_dump(Ola("bom dia", "boa tarde", "boa noite"));

?>