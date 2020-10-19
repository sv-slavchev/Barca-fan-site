<?php
/* Smarty version 3.1.29, created on 2018-04-18 22:24:54
  from "C:\xampp\htdocs\BarcaTrain\review.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ad7a996040ad5_90099288',
  'file_dependency' => 
  array (
    '25fe78c1ec3a01df93b5c62921d375a21b094cda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\review.html',
      1 => 1524082131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad7a996040ad5_90099288 ($_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FC Barcelona Fan Site</title>
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
</strong></tr>
		</br>
		<tr><em><?php echo $_smarty_tpl->tpl_vars['review']->value;?>
</em></tr>
		</table>
	</div>
</body>
</html><?php }
}
