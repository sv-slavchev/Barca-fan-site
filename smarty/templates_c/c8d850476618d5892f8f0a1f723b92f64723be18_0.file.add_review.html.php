<?php
/* Smarty version 3.1.29, created on 2018-04-17 17:35:11
  from "C:\xampp\htdocs\BarcaTrain Experim\add_review.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ad6142f6528a0_75902762',
  'file_dependency' => 
  array (
    'c8d850476618d5892f8f0a1f723b92f64723be18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain Experim\\add_review.html',
      1 => 1497636139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6142f6528a0_75902762 ($_smarty_tpl) {
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
</head>
<body>
	<div class="row">
		<div id="tab-review" class="container-fluid">
			<form method="post" action ="add_review.php" class="form-vertical" id="form-review">
			  	<h3 class="col-xs-12">Напишете отзив</h3>
	  				<div class="form-group required col-sm-12">
					<label class="control-label" for="input-name">Вашето име</label>
					<input type="text" name="yourname" value="" id="input-name" class="form-control">
			  	</div>
			  	<!-- <div class="form-group required col-sm-12">
					<label class="control-label">Рейтинг</label>
					<div class="stars starrr" data-rating="0"></div>
	  			</div> -->

			  	<div class="form-group required col-sm-12">
					<label class="control-label" for="input-review">Вашият отзив</label>
					<textarea name="review" rows="5" id="input-review" class="form-control"></textarea>
			  	</div>
			  	<!-- Btn -> Modal for Review#1 -->
				<!-- <div class="buttons clearfix">
					<button type="button" class="btn btn-primary" id="button-review" data-toggle="modal" data-target="#myModalSuccessfulAlert"  data-loading-text="Зареждане...">Продължи</button>
				</div> -->

				<!-- Review BTN Alert -->
				<div class="row page-alerts col-md-12">
			    	<!-- <div class="col-md-2">
			        	<button type="button" class="btn btn-block btn-primary" id="button-review" data-toggle="page-alert" data-toggle-id="1"  data-loading-text="Зареждане...">Продължи</button>
		        	</div>
		        	<div class="col-md-2">
		    			<button data-toggle="page-alert" data-delay="3000" data-toggle-id="5" class="btn btn-info btn-block">Auto closing alert</button>
		    		</div> -->
	        		<div class="col-md-4">
	        			<input type="submit" class="btn btn-success" name="btnAddReview" value = "Добави коментар">
						<input type="reset" class="btn btn-default" name="ResetFields" value = "Изчисти">
					</div>
					<a href="cart.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Обратно в магазина</a>
				</div>
			</form>
	  	</div>
		<!-- Review Alert 
		<div class="container-fluid page-alerts">
			<div class="alert alert-success page-alert" id="alert-1">
				<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<strong>Well done!</strong> You successfully read this important alert message.
			</div>
			<div class="alert alert-success page-alert" id="alert-5">
				<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<strong>Cool!</strong> This alert will close in 3 seconds. The data-delay attribute is in milliseconds.
			</div>
		</div>-->
		&nbsp;
	</div>
</body>
</html>





<?php }
}
