<?php

	//DECLARA UMA VARIAVEL CONSTANTE.
	define("BANCO_DE_DADOS", [
		'ip' => '127.0.0.1',
		'user' => 'root',
		'senha' => 'password',
		'banco' => 'teste'
	], true);
	
	//Se passa true no final de uma constant pode ser chamada de qlq forma
	//ex banco_de_dados = BANCO_DE_DADOS
	
	//NAO PRECISA DO $ PARA EXIBIR
	
	print_r (BANCO_DE_DADOS);
	
?>