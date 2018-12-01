<?php

	$suaIdade = $_GET["idade"];

	$idadeCrianca = 12;
	$maiorIdade = 18;
	$melhorIdade = 65;
	
	
	if($suaIdade < $idadeCrianca)
	{
		echo "Criança";
	}
	else if ($suaIdade < $maiorIdade)
	{
		echo "Adolescente";
	}
	else if ($suaIdade < $melhorIdade)
	{
		echo "Adulto";
	}
	else
	{
		echo "Melhor idade";		
	}
	
	echo "<br />";
	
	echo ($suaIdade < $maiorIdade) ? "Menor de Idade" : "Maior de Idade";
	
?>