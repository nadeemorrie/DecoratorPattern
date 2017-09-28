<?php


class BasicInspection implements CarService
{
	 public function getCost()
	 {
	 	return 25;
	 }

	 public function getDescription ()
	 {
	 	return ', basic inspection';
	 }
}

?>
