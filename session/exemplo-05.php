<?php

require_once("config.php");

echo session_save_path();

echo "<br />";

var_dump(session_status());

switch (session_status())
{
	case PHP_SESSION_DISABLED: 
		echo "Session estão desabilitadas";
		break;
	case PHP_SESSION_NONE: 
		echo "Session habilitadas, mas nenhuma existe";
		break;
	case PHP_SESSION_ACTIVE: 
		echo "Session habilitadas e existe sessões";
		break;
}

?>