<?php
	
	$total = $_GET["total"];
	$desconto = 0.9;
	
	do
	{
		$total *= $desconto;
	}
	while($total > 100);
		
	echo "Valor final " .$total;
	
?>