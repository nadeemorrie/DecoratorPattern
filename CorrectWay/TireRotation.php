<?php

class TireRotation implements CarService{

	protected $carService;

	function __construct(CarService $carService) {
		$this->carService = $carService;
	}

	public function getCost() {
		return 15 + $this->carService->getCost();
	}

	public function getDescription () {
		return 'Tire Rotation '. $this->carService->getDescription();
	}
}

?>
