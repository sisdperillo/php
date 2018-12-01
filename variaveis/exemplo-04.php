<?php

	$nome  = $_GET["nome"];
	$idade = (int)$_GET["idade"];	
	$ip = $_SERVER["REMOTE_ADDR"];
	$nameArquivo = $_SERVER["SCRIPT_NAME"];
		
	echo "Nome: " .$nome;
	echo "<br />";
	echo "Idade: " .$idade;
	echo "<br />";
	echo "Meu ip é: " .$ip;
	echo "<br />";
	echo "Página atual: " .$nameArquivo;
	
	
	//var_dump($idade);
	//var_dump($nome);
    
?>