<?php

$nome1 = "diego perillo";

echo $nome1;
echo "<br />";
echo strtoupper($nome1);
$nome1 = strtoupper($nome1);
echo "<br />";
echo strtolower($nome1);
echo "<br />";
echo ucwords(strtolower($nome1));
echo "<br />";
echo ucfirst(strtolower($nome1));

?>