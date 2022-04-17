<?php

include("./templates/header.html");
include("./cart.php");
$cart = get_cart();

?>

<main>
<h3>Confirm Order:</h3>
<div class="first-section flex-container" id="flex_forms">
	<div class="forms">
		<div class="banner-text flex-container">
			<h3>Your order</h3>
			<form method="POST" action="../place_order.php">
			<?php 
				$total = 0;
				foreach($cart as $cart_product) {
					echo $cart_product['product']['name'] . "\tx" . $cart_product['quantity'];
					echo "\tPrice: " .$cart_product['product']['price'];
					echo "<br>";
					$total += $cart_product['product']['price'] * $cart_product['quantity'];
					echo "<br>";
				}
				echo "Total: " .  $total . "<br>";
				echo "<br>";
			?>
			<label class="form-label">Full name:* </label>
			<input type="text" name="full_name" value="" require>
			<label class="form-label">Delivery address:* </label>
			<input type="text" name="address" value="" require>
			<br>
			<button type="submit">Confirm</button>
			</form>

</main>
</body>
</html>