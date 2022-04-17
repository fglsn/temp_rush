<?php

function get_cart() {
	$product1 = array(
		'id' => 356,
		'price' => 100,
		'name' => 'Red paint',
	);
	$product2 = array(
		'id' => 123,
		'price' => 200,
		'name' => 'Blue paint',
	);
	return [
		array(
			'product' => $product1,
			'quantity' => 2,
		),
		array(
			'product' => $product2,
			'quantity' => 1,
		)
	];
}

?>