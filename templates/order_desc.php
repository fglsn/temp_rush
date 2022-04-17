
<div bacground="white">
	<p>Order id: <?php echo $order['id'];?></p>
	<p>Cart: <br> <?php 
		foreach ($order['cart'] as $product) {
			echo $product['id'] . $product['quanity']; } ?></p>
	<p>Client id: <?php echo $order['user_id'];?></p>
	<p>Full name: <?php echo $order['full_name'];?></p>
	<p>Address: <?php echo $order['address'];?></p>
	<p>TOTAL: <?php echo $order['total'];?></p>
</div>