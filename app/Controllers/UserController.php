<?php


	namespace App\Controllers;

	use App\Components\ComponentController;

	class UserController extends ComponentController{

		// Renders main page
		public function renderMain($request, $response) {
			if (isset($_SESSION['user_logged_in']))
				return $this->c->view->render($response, 'main.twig', [
					'logged_in' => 'true'
				]);
			else
				return $this->c->view->render($response, 'main.twig', [
					'logged_in' => 'false'
				]);
		}

		// Registration
		public function renderRegistration($request, $response) {
			return $this->c->view->render($response, 'registration.twig');
		}

		public function validateRegistrationData($request, $response) {
			echo 'reg data validation';
		}

		public function validateRegistrationToken($request, $response, $args) {
			echo $args['token'];
		}

		// Login
		public function renderLogin($request, $response) {
			return $this->c->view->render($response, 'login.twig');
		}

		public function validateLoginData($request, $response) {
			echo 'login data validation';
		}

		// Password recover
		public function renderRecover($request, $response) {
			return $this->c->view->render($response, 'recover.twig');
		}

		public function validateRecoverData($request, $response) {
			echo 'recover data validation';
		}
	}