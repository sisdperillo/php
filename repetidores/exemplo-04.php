<?php

	$meses = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];
	
	
	foreach($meses as $indice => $mes)
	{
		echo "Indice " .$indice. "<br />";
		echo "O mês é " .strtoupper($mes). "<br />";
	}
	
?>