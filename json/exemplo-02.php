<?php

	$json = '[{"nome":"Diego","idade":23},{"nome":"Jose","idade":90}]';
		
	$data1 = json_decode($json, true);
	$data2 = json_decode($json);
	
	var_dump($data1);
	var_dump($data2);
	
?>