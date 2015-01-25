
<?php
require 'vendor/autoload.php'; 

// connect to database
$db = new PDO ('mysql:host=127.0.0.1;dbname=app', 'root','root');

$faker = Faker\Factory::create(); 

//macAddress
foreach (range(1, 5000) as $value) {
	$db -> query ("
		INSERT INTO locations (address)
		VALUES ('{$faker->address}')
		");
}