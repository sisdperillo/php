<?php

$frase = "Esta é uma frase de teste.";

$q = strpos($frase, "frase");

$texto = substr($frase, 0, 12);
echo $texto;
echo "<br />";

$texto = substr($frase, $q, strlen($frase));
echo "<br />";
echo $texto;


?>