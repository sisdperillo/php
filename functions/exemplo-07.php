<?php

function somar(int ...$valores){
    return array_sum($valores);
}

echo somar(2,2);
echo "<br />";
echo somar(2,5);

?>