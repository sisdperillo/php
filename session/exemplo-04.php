<?php

require_once("config.php");

echo session_id();
	
echo session_regenerate_id();

echo "<br />";

echo session_id();

echo "<br />";

var_dump($_SESSION);

?>