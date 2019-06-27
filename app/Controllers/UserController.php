<?php

	namespace App\Controllers;

	use App\Components\ComponentController;
	use Interop\Container\ContainerInterface;

	class UserController extends ComponentController{

		public function __construct(ContainerInterface $c) {
			parent::__construct($c);
		}

		// Renders main page
		public function renderMain($request, $response) {
			if (isset($_SESSION['user_logged_in']))
				return $this->c->view->render($response, 'main.twig', ['logged_in' => true]);
			else
				return $this->c->view->render($response, 'main.twig', ['logged_in' => false]);
		}

		// Registration
		public function renderRegistration($request, $response) {
			return $this->c->view->render($response, 'enter/registration.twig');
		}

		public function validateRegistrationData($request, $response) {
			$post = $request->getParams();
			if (($result = $this->validator->validateRegistrationData($post)) !== true) {
				return $response->withJson($result);
			}
			$post['name'] = ucfirst(strtolower($post['name']));
			$post['surname'] = ucfirst(strtolower($post['surname']));

			$token = md5($post['login'] . time() . $post['email']);
			$this->model->insertValidRegistrationDataInDb($token, $post);

			$this->c->mail->addAddress($post['email'], $post['name']);
			$this->c->mail->isHTML(true);
			$this->c->mail->Subject = "Registration";

			$link = 'http://' . $_SERVER['HTTP_HOST'] . '/registration/confirm/' . $token;
			$this->c->mail->Body = $this->getBodyHtmlRegistrationConfirm($post['name'], $link);

			if(!$this->c->mail->send())
				return $this->c->view->render($response->withStatus(503), 'errors/503.twig');
			return $response->withJson(true);
		}

		private function getBodyHtmlRegistrationConfirm($name, $link) {
			return "<p>Hi, dear $name</p>
					<p>Please, follow this <a style='text-decoration: none' href='$link'>link</a> to activate your account</p>
					<p>With regards, Matcha team</p>";
		}

		public function validateRegistrationToken($request, $response, $args) {
			echo $args['token'];
		}

		// Login
		public function renderLogin($request, $response) {
			return $this->c->view->render($response, 'enter/login.twig');
		}

		public function validateLoginData($request, $response) {
			echo 'login data validation';
		}

		// Password recover
		public function renderRecover($request, $response) {
			return $this->c->view->render($response, 'enter/recover.twig');
		}

		public function validateRecoverData($request, $response) {
			echo 'recover data validation';
		}
	}