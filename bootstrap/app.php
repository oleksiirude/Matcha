<?php

	namespace Slim;
	use PHPMailer\PHPMailer\PHPMailer;

	require_once __DIR__ . '/../vendor/autoload.php';
	require_once __DIR__ . '/../config/dbconfig.php';

	// Show errors in browser
	ini_set('display_errors', 1);
	error_reporting(E_ALL);


	$app = new App([
		'settings' => [
			'displayErrorDetails' => true
		]
	]);

	$container = $app->getContainer();

	// Adding Twig template engine
	$container['view'] = function ($container) {
		$view = new Views\Twig(__DIR__ . '/../templates/', [
			'cache' => false
		]);

		$basePath = rtrim(str_replace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
		$view->addExtension(new Views\TwigExtension($container['router'], $basePath));

		return $view;
	};

	$container['mail'] = function () {
		$mail = new PHPMailer;
		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->Username = "matcha42project@gmail.com";
		$mail->Password = "Matcha-2019";
		$mail->SMTPSecure = "tls";
		$mail->Port = 587;
		$mail->From = "matcha42project@gmail.com";
		$mail->FromName = "no-reply";
		$mail->isHTML(true);
		return $mail;
	};
