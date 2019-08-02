<?php
	
	require_once('data.php');

//	define('DSN', 'mysql:host=127.0.0.1;dbname=matcha;port=3306;charset=utf8mb4');
//	define('DSN', 'mysql:host=localhost;dbname=db_matcha;unix_socket=/Users/dpiven/MAMP/mysql/tmp/mysql.sock;charset=utf8mb4');
    define('DSN', 'mysql:host=127.0.0.1;dbname=db_matcha;');
	define('USERNAME', 'root');
	define('PASSWORD', 'Trofimov2015');

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
	
	foreach (USERS as $query => $insert)
		$connection->query($insert);
	foreach (PROFILES as $query => $insert)
		$connection->query($insert);
	foreach (INTERESTS as $query => $insert)
		$connection->query($insert);
	foreach (TAGS as $query => $insert)
		$connection->query($insert);
	foreach (LOCATIONS as $query => $insert)
		$connection->query($insert);


	$path = str_replace('storage/filler', 'public/images', dirname(__FILE__));
	
	exec('rm -R ' . $path . '/profiles');

	exec("cp -R profiles $path");

	echo "filler: done\n";
