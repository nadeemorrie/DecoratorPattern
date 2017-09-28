<?php

require ('BasicInspection.php');
require ('BasicInspectionAndOilChange.php');
require ('BasicInspectionAndOilChangeAndTireRotation.php');

// (new VeggieSub)->make();

var_dump((new BasicInspectionAndOilChangeAndTireRotation())->getCost());

?>