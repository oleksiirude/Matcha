<?php
    namespace Slim;

    require_once 'vendor/autoload.php';

    // show errors in browser
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $app = new App([
    	'settings' => [
    		'displayErrorDetails' => true
	    ]
    ]);

    $container = $app->getContainer();

    $container['view'] = function ($container) {
    	$view = new Views\Twig(__DIR__.'/templates/views', [
    		'cache' => false
	    ]);

	    $basePath = rtrim(str_replace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
	    $view->addExtension(new Views\TwigExtension($container['router'], $basePath));

	    return $view;
    };

    $app->get('/home', function ($request, $response) {
    	return $this->view->render($response, 'home.twig', [
    		'country' => 'Ukraine'
	    ]);
    });

    $app->get('/users', function ($request, $response) {
    	$data = [
    		'username' => 'Oleksii',
		    'surname' => 'Rudenko',
		    'email' => 'rudefromkiev@gmail.com',
		    'phone' => '+380932089049'
	    ];

	    return $this->view->render($response, 'users.twig', [
	    	'data' => $data,
	    ]);
    });


    $app->run();

