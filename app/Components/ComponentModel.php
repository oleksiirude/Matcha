<?php


	namespace App\Components;
	use PDO;

	abstract class ComponentModel {

		protected $pdo;

		public function __construct() {
			$this->pdo = new PDO(DSN, USERNAME, PASSWORD,
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		}
	}