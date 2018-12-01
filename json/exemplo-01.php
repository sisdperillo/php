<?php

	$pessoas = array();
	
	array_push($pessoas, array(
							   'nome' => 'Diego', 
							   'idade' => 23
    ));
							   
	array_push($pessoas, array(
							   'nome' => 'Jose', 
							   'idade' => 90
	));
							   
	echo json_encode($pessoas);
	
?>