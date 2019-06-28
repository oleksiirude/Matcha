<?php

	namespace App\Models;
	use PDO;
	use App\Components\ComponentModel;

	class UserModel extends ComponentModel {

		//checks if login and/or email are already exist in database
		public function checkIfExistsInDb($query, $pseudo) {
			$sth = $this->pdo->prepare($query);
			$sth->execute($pseudo);
			return $sth->fetchAll(PDO::FETCH_ASSOC);
		}

		//inserts valid registration data into database
		public function insertValidRegistrationDataInDb($token, $post) {
			$password = password_hash($post['password'], PASSWORD_BCRYPT);
			$this->pdo->query("INSERT INTO `users`(`login`, `email`, `password`, `name`, `surname`, `avatar`, `token`) 
										VALUES ('$post[login]', '$post[email]', '$password', '$post[name]', '$post[surname]', 
										'images/service/defaultAvatar.png', '$token')");
		}

		//checks if token is valid, if true confirms account
		public function confirmRegistrationRequest($token) {
			$sth = $this->pdo->prepare("SELECT `id`, `token` FROM `users` WHERE `token` = '$token'");
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if (!$result)
				return false;
			$this->pdo->query("UPDATE `users` SET `token` = '', `confirmed` = '1' 
											WHERE `id` = '$result[id]'");
			return true;
		}

		public function checkLoginDataInDb($post) {
			$sth = $this->pdo->prepare("SELECT `id`, `login`, `email`, `password`, `confirmed`, `avatar` 
											FROM `users` WHERE `login` = :login");
			$sth->execute([':login' => $post['login']]);
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if (!$result || !password_verify($post['password'], $result['password'])
				|| $result['confirmed'] !== '1' || $post['login'] !== $result['login'])
				return ['id' => 'menu', 'warning' => 'incorrect login or/and password'];
			$this->pdo->query("UPDATE `users` SET `token` = '' WHERE `login` = '$post[login]'");
			$_SESSION['user_id'] = $result['id'];
			$_SESSION['user_logged_in'] = $post['login'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['avatar'] = $result['avatar'];
			return true;
		}

		public function checkRecoverDataInDb($post) {
			$pseudo = [':login' => $post['login'], ':email' => $post['email']];

			$sth = $this->pdo->prepare('SELECT `confirmed` FROM `users` 
												WHERE `login` = :login AND `email` = :email');
			$sth->execute($pseudo);
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if ($result['confirmed'] === '1')
				return true;
			return ['id' => 'menu', 'warning' => 'nonexistent login or email'];
		}

		public function insertRecoveryDataInDb($token, $login) {
			$this->pdo->query("UPDATE `users` SET `token` = '$token' WHERE `login` = '$login'");
		}

		public function confirmRecoveryRequest($token) {
			$sth = $this->pdo->prepare("SELECT `login`, `token` FROM `users` WHERE `token` = '$token'");
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if (!$result)
				return false;
//			$this->pdo->query("UPDATE `users` SET `token` = '' WHERE `id` = '$result[id]'");
			return ['login' => $result['login'], 'token' => $token];
		}

		public function setNewPasswordRecovery($post) {
			$sth = $this->pdo->prepare("SELECT `login`, `token` FROM `users` WHERE `login` = :login AND `token` = :token");
			$sth->execute([':login' => $post['login'], ':token' => $post['token']]);
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if (!$result)
				return false;
			$password = password_hash($post['password'], PASSWORD_BCRYPT);
			$this->pdo->query("UPDATE `users` SET `password` = '$password', `token` = '' WHERE `login` = '$post[login]'");
			return true;
		}
	}