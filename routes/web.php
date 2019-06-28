<?php

	use App\Controllers\UserController;
	define('UC', UserController::class);

	// Renders main page
	$app->get('/', UC . ':renderMain')->setName('main');

	// Registration
	$app->get('/registration', UC . ':renderRegistration')->setName('registration');
	$app->post('/registration/validate', UC . ':inputRegistrationData');
	$app->get('/registration/confirm/{token:[a-z0-9]{32}}', UC . ':inputRegistrationToken');

	// Login
	$app->get('/login', UC . ':renderLogin')->setName('login');
	$app->post('/login/validate', UC . ':inputLoginData');

	// Password recover
	$app->get('/recover', UC . ':renderRecover')->setName('recover');
	$app->post('/recover/validate', UC . ':inputRecoverData');
	$app->get('/recover/confirm/{token:[a-z0-9]{32}}', UC . ':inputRecoveryToken');
	$app->post('/recover/set', UC . ':inputSetNewPasswordRecovery');

	// Logout
	$app->post('/logout', UC . ':logout');