<?php

function somar(float ...$valores):float
{
    return array_sum($valores);
}

echo somar(2, 2);
echo "<br />";
echo somar(2, 5);
echo "<br />";
echo somar(2.55, 5.98);
