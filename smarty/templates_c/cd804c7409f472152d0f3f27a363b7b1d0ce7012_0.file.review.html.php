<?php
/* Smarty version 3.1.29, created on 2018-04-17 18:45:02
  from "C:\xampp\htdocs\BarcaTrainnnnnnn\review.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ad6248ee448d1_34061177',
  'file_dependency' => 
  array (
    'cd804c7409f472152d0f3f27a363b7b1d0ce7012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrainnnnnnn\\review.html',
      1 => 1497661811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6248ee448d1_34061177 ($_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Bootstrap Site</title>
	<!-- dropdown button from w3s -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Site CSS -->
	<link href="mystyle.css" rel="stylesheet">

	<style>
	strong {
		font-size: 16px;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<table>
		<!--<tr> <img src ="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"> </tr></br>
		<tr> Product Name: </br><?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</tr></br>-->
		<hr>
		<tr><strong><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</strong></tr></br>
		<tr><em><?php echo $_smarty_tpl->tpl_vars['review']->value;?>
</em></tr></br>
		</table>
	</div>
</body>
</html><?php }
}
