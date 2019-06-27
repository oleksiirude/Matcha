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

		// REGISTRATION
		public function renderRegistration($request, $response) {
			return $this->c->view->render($response, 'enter/registration.twig');
		}

		public function inputRegistrationData($request, $response) {
			$post = $request->getParams();
			if (($result = $this->validator->validateRegistrationData($post)) !== true) {
				return $response->withJson($result); // front must show 'error message'
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
			return $response->withJson(true); // front must show 'ok message'
		}

		public function inputRegistrationToken($request, $response, $args) {
			if (($result = $this->model->confirmRegistrationRequest($args['token'])) !== true)
				return $this->c->view->render($response->withStatus(404), 'errors/404.twig');
			return $response->withRedirect($this->c->router->pathFor('login'));
		}

		// LOGIN
		public function renderLogin($request, $response) {
			return $this->c->view->render($response, 'enter/login.twig');
		}

		public function inputLoginData($request, $response) {
			$post = $request->getParams();
			if (($result = $this->validator->validateLoginData($post)) !== true)
				return $response->withJson($result); // front must show 'error message'
			return $response->withRedirect($this->c->router->pathFor('main'));
		}

		// PASSWORD RECOVERY
		public function renderRecover($request, $response) {
			return $this->c->view->render($response, 'enter/recover.twig', ['confirmed' => false]);
		}

		public function inputRecoverData($request, $response) {
			$post = $request->getParams();
			if (($result = $this->validator->validateRecoverData($post)) !== true)
				return $response->withJson($result); // front must show 'error message'

			$token = md5($post['login'] . time() . $post['email']);
			$this->model->insertRecoveryTokenInDb($token, $post['login']);

			$this->c->mail->addAddress($post['email']);
			$this->c->mail->Subject = "Password Recovery";

			$link = 'http://' . $_SERVER['HTTP_HOST'] . '/recover/confirm/' . $token;
			$this->c->mail->Body = $this->getBodyHtmlRecoveryConfirm($link);

			if(!$this->c->mail->send())
				return $this->c->view->render($response->withStatus(503), 'errors/503.twig');
			return $response->withJson(true); // front must message that link has been sent
		}

		public function inputRecoveryToken($request, $response, $args) {
			if (($result = $this->model->confirmRecoveryRequest($args['token'])) !== true)
				return $this->c->view->render($response->withStatus(404), 'errors/404.twig');
			return $this->c->view->render($response, 'enter/recover.twig', ['confirmed' => true]);
		}

		public function inputSetNewPasswordRecovery ($request, $response) {
			$post = $request->getParams();
			if (($result = $this->validator->validateSetNewPasswordRecovery($post)) !== true) {
				if ($result === false)
					return $this->c->view->render($response->withStatus(404), 'errors/404.twig');
				return $response->withJson($result); // front must show 'error message'
			}
			return $response->withRedirect($this->c->router->pathFor('login'));
		}

		// LOGOUT
		public function logout($request, $response) {
			session_destroy();
			return $response->withRedirect($this->c->router->pathFor('main'));
		}

		// Extra function
		private function getBodyHtmlRegistrationConfirm($name, $link) {
			return "<p>Hi, dear $name</p>
					<p>Please, follow this <a style='text-decoration: none' href='$link'>link</a> to activate your account</p>
					<p>With regards, Matcha team</p>";
		}

		private function getBodyHtmlRecoveryConfirm($link) {
			return "<p>Hi, dear User</p>
					<p>Please, follow this <a style='text-decoration: none' href='$link'>link</a> to recover your password</p>
					<p><b>Notice</b>: you have only one attempt to recover your password via this <a style='text-decoration: none' href='$link'>link</a>!</p>
					<p>With regards, Matcha team</p>";
		}
	}