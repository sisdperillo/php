<?php

	$nome  = "Diego";
	
	function ShowNome()
	{
		//nesta linha digo que a variavel nome é a mesma que a usada fora da funcao
		global $nome;
		
		echo $nome;
	}
	
	function ShowNome2()
	{
		//Essa variavel não afeta a outra, pois ela está no escopo da funcao atual.
		$nome = "João";
		
		echo $nome;
	}
	
	ShowNome(); 
	ShowNome2();	
?>