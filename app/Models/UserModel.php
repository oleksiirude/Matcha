<?php


	namespace App\Models;
	use Interop\Container\ContainerInterface;

	class UserModel {

		protected $c;

		public function __construct(ContainerInterface $c) {
			$this->c = $c;
		}

		static function addRegistrationDataToDB($post) {

		}
	}