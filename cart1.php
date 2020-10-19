<?php

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROm tblproduct ORDER BY id ASC limit 10,20");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /></br>
			<input type="submit" value="Add to cart" class="btnAddAction" />
			</form>
			
			<form method="post" action="review.php?action=review&id=<?php echo $product_array[$key]["code"]; ?>">
			<input type="submit" value="Reviews" class="btnReview" /></div>
			</form>
			</div>
		</div>
	<?php
			}
	}
	//echo '<pre>'.print_r($product_array).'</pre>'.'</br>';
	
	?>
</div>
<form method="post" action="cart.php" >
<input type="submit" name="second_page" value="<< 1" />
</form>