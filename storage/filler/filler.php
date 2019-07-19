<?php
	
	require_once('data.php');

	define('DSN', 'mysql:host=127.0.0.1;dbname=db_matcha;port=3306;charset=utf8mb4');
	define('USERNAME', 'root');
	define('PASSWORD', 'password');


	$connection = new PDO(DSN, USERNAME, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
	$connection->query("
		TRUNCATE TABLE users; 
		TRUNCATE TABLE profiles; 
		TRUNCATE TABLE tags; 
		TRUNCATE TABLE interests; 
		TRUNCATE TABLE locations;
		TRUNCATE TABLE reports;
		TRUNCATE TABLE likes;
		TRUNCATE TABLE bans;
		TRUNCATE TABLE visits;
	");

	foreach (USERS as $title => $table)
		$connection->query($table);
	foreach (PROFILES as $table => $query)
		$connection->query($query);
	foreach (INTERESTS as $table => $query)
		$connection->query($query);
	foreach (TAGS as $table => $query)
		$connection->query($query);
	foreach (LOCATIONS as $table => $query)
		$connection->query($query);


	$path = str_replace('storage/filler', 'public/images', dirname(__FILE__));
	
	exec('rm -R ' . $path . '/profiles');

	exec("cp -R profiles $path");

	echo "filler: done\n";
