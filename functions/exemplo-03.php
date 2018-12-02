<?php

function Ola($param = "mundo", $periodo = "bom dia")
{
	return "Olá $param, $periodo!<br />";
}


echo Ola("php", "boa tarde");
echo Ola("diego");
echo Ola("jose", "boa noite");
echo Ola();

?>