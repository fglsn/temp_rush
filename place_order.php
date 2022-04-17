<?php

session_start();

include('./cart.php');

function add_order($user_id, $cart, $full_name, $address, $total) {
	$id = 0;
	if (file_exists('orders.db')) {
		$db = unserialize(file_get_contents('orders.db'));
		foreach ($db as $order) {
			if ($order['id'] > $id)
				$id = $order['id'];
		}
	}
	$id++;
	$array = array(
		'id' => $id,
		'user_id' => $user_id,
		'full_name' => $full_name,
		'address' => $address,
		'total' => $total,
		'cart' => $cart,
	);
	$db[] = $array;
	file_put_contents('orders.db', serialize($db));
}
// check if user logged in, take user id

if (!$_SESSION['loggued_on_user']) {
	header("Location: ./templates/login.html");
	return ;
}
$user_id = $_SESSION['loggued_on_user'];
$cart = get_cart();
if (!$_POST['address'] || !$_POST['full_name']) {
	header("Location: ./templates/error.html");
	return ;
}
$address = $_POST['address'];
$full_name = $_POST['full_name'];
$total = 0;
foreach ($cart as $cart_product) {
	$total += ($cart_product['quantity'] * $cart_product['product']['price']);
}

add_order($user_id, $cart, $full_name, $address, $total);
header("Location: templates/order_success.html");

?>