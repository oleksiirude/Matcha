<?php


	namespace App\Components;

	use App\Models\UserModel;
	use Interop\Container\ContainerInterface;
	use App\Controllers\ValidatorController;

	abstract class ComponentController {

		protected $c;
		protected $validator;
		protected $model;

		public function __construct(ContainerInterface $c) {
			$this->c = $c;
			$this->validator = new ValidatorController($c['db']);
			$this->model = new UserModel($c);
		}
	}