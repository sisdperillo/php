<?php

	//Se tiver no mesmo local
	//include "exemplo-01.php";
	
	//include "inc/exemplo-01.php";

    require_once "inc/exemplo-01.php";
	require_once "inc/exemplo-01.php";
	
	//include 
	//Tenta funcionar mesmo que não exista ou tenha problema.
	//permite url
	
	//require
	//O arquivo deve existir e funcionar corretamente.
	
	//require_once
	//so irá incluir uma vez o arquivo, caso tiver outra chamada no mesmo arquivo vai barrar.
	
	$resultado = Somar(10, 20);
	
	echo $resultado;

?>