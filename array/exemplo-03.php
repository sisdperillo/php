<?php

	$pessoas = array();
	
	array_push($pessoas, array('nome' => 'Diego', 
							   'idade' => 23));
							   
	array_push($pessoas, array('nome' => 'Jose', 
							   'idade' => 90));
							   
	print_r($pessoas);
	
	echo "<br />";
	print_r($pessoas[0]);
	echo "<br />";
	print_r($pessoas[0]['nome']);
	
?>