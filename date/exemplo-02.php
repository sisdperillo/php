<?php

date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');

$ts = strtotime("2001/09/11");

echo date("l, d/m/Y", $ts);
