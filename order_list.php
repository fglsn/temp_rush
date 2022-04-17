<?php

function list_orders() {

if (file_exists('orders.db')) {
	$db = unserialize(file_get_contents('orders.db'));
	foreach ($db as $order) {
		echo $order['id'];
		echo $order['product']['name'] . "\tx" . $order['quantity'];
		echo "\tPrice: " .$order['product']['price'];
		echo "<br>";
		$total += $order['product']['price'] * $order['quantity'];
		echo "<br>";
		}
		echo "Total: " .  $total . "<br>";
		echo "<br>";
	}
}

?>