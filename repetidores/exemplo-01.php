<?php

	for($i = 1; $i <= 10; $i++)
	{
		echo "<br />";
		echo "Tabuada do " .$i;
		echo "<br />";
				
		for($y = 1; $y <= 10; $y++)
		{
			echo $i. " x " .$y. " = " .($i * $y);
			echo "<br />";
		}
	}
	
	//continue pula para o proximo
	//break para o laço
	
?>