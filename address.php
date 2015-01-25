<?php

// output list of address
header("Content-Type: application/json");

if(!isset($_GET['query'])) {
	echo json_encode([]);
	die(); 
}

$db = new PDO ('mysql:host=127.0.0.1;dbname=app', 'root','root');

$address = $db ->prepare("
	SELECT id, address
	FROM locations
	WHERE address LIKE :query
	");

$address->execute([
	'query' => "{$_GET['query']}%"

	]);

echo json_encode($address->fetchAll()); 