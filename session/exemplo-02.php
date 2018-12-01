<?php

//session_start();
require_once("config.php");

//limpa a variavel
session_unset($_SESSION["nome"]);

//destroi a sessao
session_destroy($_SESSION["nome"]);

echo $_SESSION["nome"];
	
?>