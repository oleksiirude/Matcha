<?php


	namespace App\Components;

	use Interop\Container\ContainerInterface;

	abstract class ComponentController {
		protected $c;

		public function __construct(ContainerInterface $c) {
			$this->c = $c;
		}
	}