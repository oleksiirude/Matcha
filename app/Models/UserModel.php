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
			$this->pdo->query("INSERT INTO users(`login`, `email`, `password`, `name`, `surname`, `token`) 
										VALUES ('$post[login]', '$post[email]', '$password', '$post[name]', '$post[surname]','$token')");
		}
	}