<?php

	namespace App\Controllers;

	class ValidatorController {

		protected $model;

		public function __construct($model) {
			$this->model = $model;
		}

		//REGULAR INPUT DATA CHECKS (registration, login, recover password, change data in profile)

		//checks fields filling (depends on $request array)
		private function validateIsFullFields($request, $post) {
			if (isset($request['login'])) {
				$post['login'] = trim($post['login']);
				if (empty($post['login']))
					return ['id' => 'login', 'warning' => 'login field is empty'];
			}
			if (isset($request['name'])) {
				$post['name'] = trim($post['name']);
				if (empty($post['name']))
					return ['id' => 'name', 'warning' => 'name field is empty'];
			}
			if (isset($request['surname'])) {
				$post['surname'] = trim($post['surname']);
				if (empty($post['surname']))
					return ['id' => 'surname', 'warning' => 'surname field is empty'];
			}
			if (isset($request['email'])) {
				$post['email'] = trim($post['email']);
				if (empty($post['email']))
					return ['id' => 'email', 'warning' => 'email field is empty'];
			}
			if (isset($request['password'])) {
				$post['password'] = trim($post['password']);
				if (empty($post['password']))
					return ['id' => 'password', 'warning' => 'password field is empty'];
			}
			if (isset($request['confirm'])) {
				$post['confirm'] = trim($post['confirm']);
				if (empty($post['confirm']))
					return ['id' => 'confirm', 'warning' => 'confirm field is empty'];
			}
			return true;
		}

		//checks if input data is corresponds to requirements
		private function validateInputData($request, $post) {
			$patternLogin = '/^[a-zA-Z]{3,18}\d{0,2}$/'; // at least 3 and up to 18 latin symbols, 1-2 digits after symbols (optional)
			$patternName = '/^[a-zA-Z]{3,20}$/'; // at least 3 and up to 20 latin symbols
			$patternSurname = '/^[a-zA-Z]{3,20}$/'; // at least 3 and up to 20 latin symbols
			$patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/'; // example@example.com
			$patternPassword = '/^(?=.*[A-Z]{1,})(?=.*[!@#$&*-]{1,})(?=.*[0-9]{1,})(?=.*[a-z]{1,}).{8,}$/'; // password -> at least 1 latin symbol in uppercase and lowercase
																											// at least 1 special symbol like !@#$&*-
																											// minimum length is 8 symbols

			if (isset($request['login']))
				if (!preg_match($patternLogin, $post['login']))
					return ['id' => 'login', 'warning' => 'login field is not valid'];
			if (isset($request['name']))
				if (!preg_match($patternName, $post['name']))
					return ['id' => 'name', 'warning' => 'name field is not valid'];
			if (isset($request['surname']))
				if (!preg_match($patternSurname, $post['surname']))
					return ['id' => 'surname', 'warning' => 'surname field is not valid'];
			if (isset($request['email']))
				if (!preg_match($patternEmail, $post['email']))
					return ['id' => 'email', 'warning' => 'email field is not valid'];
			if (isset($request['password']))
				if (!preg_match($patternPassword, $post['password']))
					return ['id' => 'password', 'warning' => 'password field is not valid'];
			if (isset($request['confirm']))
				if ($post['password'] !== $post['confirm'])
					return ['id' => 'confirm', 'warning' => 'passwords do not match'];
			return true;
		}

		//checks if login and/or email are already exist in database
		public function validateIfExistsInDb($request, $post) {
			if ($request === 'check_login') {
				$pseudo = [':login' => $post['login']];
				$query = 'SELECT `login` FROM `users` WHERE `login` = :login';
				$error = ['id' => 'login', 'warning' => 'this login is already taken'];
			}
			elseif ($request === 'check_email') {
				$pseudo = [':email' => $post['email']];
				$query = 'SELECT `email` FROM `users` WHERE `email` = :email';
				$error = ['id' => 'email', 'warning' => 'this email is already taken'];
			}
			elseif ($request === 'check_both') {
				$pseudo = [':login' => $post['login'], ':email' => $post['email']];
				$query = 'SELECT `login` FROM `users` WHERE `login` = :login OR `email` = :email';
				$error = ['id' => 'menu', 'warning' => 'login or/and email are already taken'];
			}
			$result = $this->model->checkIfExistsInDb($query, $pseudo);
			if (!$result)
				return true;
			return $error;
		}

		// REGISTRATION
		public function validateRegistrationData($post) {
			$request = [
				'login' => true,
				'name' => true,
				'surname' => true,
				'email' => true,
				'password' => true,
				'confirm' => true
			];

			if (($result = self::validateIsFullFields($request, $post)) !== true)
				return $result;
			elseif (($result = self::validateInputData($request, $post)) !== true)
				return $result;
			elseif (($result = self::validateIfExistsInDb('check_both', $post)) !== true)
				return $result;
			return true;
		}
	}