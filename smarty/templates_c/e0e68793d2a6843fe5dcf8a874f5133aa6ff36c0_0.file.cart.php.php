<?php
/* Smarty version 3.1.29, created on 2017-05-22 13:31:59
  from "C:\xampp\htdocs\BarcaTrain\cart.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5922cc2f5cc453_22690851',
  'file_dependency' => 
  array (
    'e0e68793d2a6843fe5dcf8a874f5133aa6ff36c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\cart.php',
      1 => 1495446541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5922cc2f5cc453_22690851 ($_smarty_tpl) {
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
			<form method="post" action="index.php?action=add&code=<?php echo '<?php ';?>echo $product_array[$key]["code"]; <?php echo '?>';?>">
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
