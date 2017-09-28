<?php

require('CarService.php');
require ('BasicInspection.php');
require ('OilChange.php');
require ('TireRotation.php');

$basicInspection = new BasicInspection();

var_dump('yyy',$basicInspection->getDescription());
var_dump('Basic + Oil Change', (new OilChange($basicInspection))->getCost());

$oilChange = new OilChange($basicInspection);

var_dump('xxx',$oilChange->getDescription());

$tireRotation = new TireRotation($oilChange);

// basic inspection + oil Change + tire Rotation = 69
var_dump('basic+oil+tire',$tireRotation->getCost());

// basic inspection + tire rotation only = 40
$tire = new TireRotation(new BasicInspection());

var_dump('basic+tire', $tire->getCost());

?>