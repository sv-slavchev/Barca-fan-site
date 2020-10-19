<?php
/* Smarty version 3.1.29, created on 2017-05-23 23:12:14
  from "C:\xampp\htdocs\BarcaTrain_raboteshto\cart.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5924a5ae5d5c86_68978126',
  'file_dependency' => 
  array (
    'dc8643a16bbc9f1ff342010aea801338e4981ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain_raboteshto\\cart.php',
      1 => 1495458838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924a5ae5d5c86_68978126 ($_smarty_tpl) {
echo '<?php

';?>session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
<?php echo '?>';?>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php echo '<?php
	';?>$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id  ASC limit 10");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	<?php echo '?>';?>
		<div class="product-item">
			<form method="post" action="index1.php?action=add&code=<?php echo '<?php ';?>echo $product_array[$key]["code"]; <?php echo '?>';?>">
				<div class="product-image"><img src="<?php echo '<?php ';?>echo $product_array[$key]["image"]; <?php echo '?>';?>"></div>
				<div><strong><?php echo '<?php ';?>echo $product_array[$key]["name"]; <?php echo '?>';?></strong></div>
				<div class="product-price"><?php echo '<?php ';?>echo "$".$product_array[$key]["price"]; <?php echo '?>';?></div>
				<div><input type="text" name="quantity" value="1" size="2" /></br>
				<input type="submit" value="Add to cart" class="btnAddAction" />
			</form>
			<form method="post" action="review.php?action=review&code=<?php echo '<?php ';?>echo $product_array[$key]["code"]; <?php echo '?>';?>">
				<input type="submit" value="Reviews" class="btnReview" />
			</form>
			<!--<form method="post" action="add_review.php?action=add_review&code=<?php echo '<?php ';?>echo $product_array[$key]["code"]; <?php echo '?>';?>">
			<input type="submit" value="Add Review" class="btnReview" />
			</form>-->
			</div>
		</div>
	<?php echo '<?php
			';?>}
	}
	//echo '<pre>'.print_r($product_array).'</pre>'.'</br>';
	
	<?php echo '?>';?>
</div>
<form method="post" action="cart1.php">
<input type="submit" name="second_page" value="2 >>" />
</form>

<?php }
}
