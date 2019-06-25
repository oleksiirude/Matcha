<?php

	namespace Slim;
	use PDO;
//	use Slim\Http\Environment;

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../config/dbconfig.php';

	// Show errors in browser
	ini_set('display_errors', 1);
	error_reporting(E_ALL);


	$app = new App([
		'settings' => [
			'displayErrorDetails' => true
		]
	]);

	$container = $app->getContainer();

//	Activating routes in sub folder
//	$container['environment'] = function () {
//		$scriptName = $_SERVER['SCRIPT_NAME'];
//		$_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)).'/'.basename($scriptName);
//		return new Environment($_SERVER);
//	};

	// Adding database connection
	$container['db'] = function () {
		return new PDO(DSN, USERNAME, PASSWORD,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	};

	// Adding template engine Twig
	$container['view'] = function ($container) {
		$view = new Views\Twig(__DIR__.'/../templates/', [
			'cache' => false
		]);

		$basePath = rtrim(str_replace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
		$view->addExtension(new Views\TwigExtension($container['router'], $basePath));

		return $view;
	};
