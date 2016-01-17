<?php


$persons = require_once 'DB.php';




if (isset($_GET['id'])) {
	
	$recustId = $_GET['id'];
	
	$len = count($persons);
	
	for ($i = 0; $i < $len; $i++) {
		if ($persons[$i]['id'] == $recustId) {
			echo json_encode($persons[$i]);
			return;
		}
	}
	
}

echo json_encode($persons);








