<?php
<<<<<<< HEAD

	session_start();

	require_once __DIR__.'/../bootstrap/app.php';

	require_once __DIR__.'/../routes/web.php';
=======
	namespace Slim;
	use PDO;
	use Slim\Http\Environment;

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../config/dbconfig.php';

	// show errors in browser
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$app = new App([
		'settings' => [
			'displayErrorDetails' => true
		]
	]);

	$container = $app->getContainer();

	$container['environment'] = function () {
		$scriptName = $_SERVER['SCRIPT_NAME'];
		$_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)).'/'.basename($scriptName);
		return new Environment($_SERVER);
	};


	$container['db'] = function () {
		return new PDO(DSN, USERNAME, PASSWORD,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	};

	$container['view'] = function ($container) {
		$view = new Views\Twig(__DIR__.'/templates/', [
			'cache' => false
		]);

		$basePath = rtrim(str_replace('public/index.php', '', $container['request']->getUri()->getBasePath()), '/');
		$view->addExtension(new Views\TwigExtension($container['router'], $basePath));

		return $view;
	};

	$app->get('/', function ($request, $response) {
		return $this->view->render($response, 'main.twig');
	})->setName('home');

	$app->get('/login', function ($request, $response) {
		return $this->view->render($response, 'login.twig');
	})->setName('login');

	$app->get('/register', function ($request, $response) {
		return $this->view->render($response, 'register.twig');
	})->setName('register');

	$app->get('/users', function ($request, $response) {
	$list = $this->db->query("SELECT login FROM users")->fetchAll(PDO::FETCH_ASSOC);

	//	    var_dump(['list' => $list]); exit;
		return $this->view->render($response, 'users.twig', [
			'list' => $list
		]);
	})->setName('users');

	$app->post('/loginVerify', function ($request, $response) {
		return 'loginVerify';
	});

	$app->post('/registerVerify', function ($request, $response) {
		return 'registerVerify';
	});
>>>>>>> 805bcc68c0c2211ecceffbd1f2dd6f010a11f861

	$app->run();

