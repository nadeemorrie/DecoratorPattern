<?php
	require('BasicOrder.php');

	$order = new BasicOrder(13.14, 0, 50);
	$order->getTotalCost();
?>