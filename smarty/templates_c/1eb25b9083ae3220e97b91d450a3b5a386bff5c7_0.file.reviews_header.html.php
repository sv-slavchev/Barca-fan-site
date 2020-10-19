<?php
/* Smarty version 3.1.29, created on 2018-04-19 20:45:46
  from "C:\xampp\htdocs\BarcaTrain Experim\reviews_header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ad8e3dab70f95_11771753',
  'file_dependency' => 
  array (
    '1eb25b9083ae3220e97b91d450a3b5a386bff5c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain Experim\\reviews_header.html',
      1 => 1497289966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad8e3dab70f95_11771753 ($_smarty_tpl) {
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
		@media ( max-width: 585px ) {
		    .input-group span.input-group-btn,.input-group input,.input-group button{
		        display: block;
		        width: 100%;
		        border-radius: 0;
		        margin: 0;
		    }
		    .input-group {
		        position: relative;   
		    }
		    .input-group span.data-up{
		        position: absolute;
		        top: 0;
		    }
		    .input-group span.data-dwn{
		        position: absolute;
		        bottom: 0;
		    }
		    .form-control.text-center {
		        margin: 34px 0;
		    }
		    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group{
		        margin-left:0;
		    }

		}



		/* Main carousel style ZA DRUGIQ KEROSEL
		
		Indicators list style
		.article-slide .carousel-indicators {
		    bottom: 0;
		    left: 0;
		    margin-left: 5px;
		    width: 100%;
		}
		Indicators list style
		.article-slide .carousel-indicators li {
		    border: medium none;
		    border-radius: 0;
		    float: left;
		    height: 54px;
		    margin-bottom: -10px;
		    margin-left: 23px;
		    margin-right: 5px !important;
		    width: 100px;
		}
		Indicators images style
		.article-slide .carousel-indicators img {
		    border: 2px solid #FFFFFF;
		    float: left;
		    height: 54px;
		    left: 0;
		    width: 100px;
		}
		Indicators active image style
		.article-slide .carousel-indicators .active img {
		    border: 2px solid #428BCA;
		    opacity: 0.7;
		} */
		.preview-pic {
			width: 450px;
			height: 650px;
		}
	</style>
</head>
<?php echo '<?php
	';?>session_start();
<?php echo '?>';?>
<body>
	<div>
		<!-- shop-item gallery -->
		<div class="preview col-sm-6">
			<div class="preview-pic tab-content">
				<div class="tab-pane active" id="pic-1"><img src ="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></div>
				<div class="tab-pane" id="pic-2"><img src="./img/products/barca7.jpg" /></div>
				<div class="tab-pane" id="pic-3"><img src="./img/barca3.jpg" /></div>
				<div class="tab-pane" id="pic-4"><img src="./img/barca1.jpg" /></div>
				<div class="tab-pane" id="pic-5"><img src="./img/barca2.jpg" /></div>
			</div>
			<!-- <ul class="preview-thumbnail nav nav-tabs">
				<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src ="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></a></li>
				<li><a data-target="#pic-2" data-toggle="tab"><img src="./img/barca3.jpg" /></a></li>
				<li><a data-target="#pic-3" data-toggle="tab"><img src="./img/barca7.jpg" /></a></li>
				<li><a data-target="#pic-4" data-toggle="tab"><img src="./img/barca1.jpg" /></a></li>
				<li><a data-target="#pic-5" data-toggle="tab"><img src="./img/barca2.jpg" /></a></li>
			</ul> -->
		</div>

		
		
		<!-- drug kerosel -->
		<!-- <div class="carousel slide article-slide col-sm-6" id="article-photo-carousel">
		
		  Wrapper for slides
		  <div class="carousel-inner cont-slider">
		
		    <div class="item active">
		      <img alt="" title="" src="./img/barca3.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca2.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca7.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca1.jpg">
		    </div>
		  </div>
		  Indicators
		  <ol class="carousel-indicators">
		    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca3.jpg">
		    </li>
		    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca2.jpg">
		    </li>
		    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca7.jpg">
		    </li>
		    <li class="" data-slide-to="3" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca1.jpg">
		    </li>
		  </ol>
		</div> -->




		<!-- ItemDetails -->
		<div class="details col-sm-6 product-center clearfix">
			<h3 class="product-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
			<hr>
			<div class="tab-pane active" id="tab_default_1">
				<h4>Описание</h4>
				<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
			</div>
			<div class="description">
				<!-- <span>Марка</span>
				<a href="#" itemprop="brand">F.C. Barcelona</a>
				<br> -->
				<span>Наличност</span> <strong>110</strong>
			</div>
			<div class="price">
				<!-- <span class="price-new"><span itemprop="price" id="price-old">ЦЕНА: 28,08 лв.</span></span> -->
				<h4 class="price">Цена: <span>$180</span></h4>
			</div>
			<!-- QUANTITY
			<div class="quantity" id="product">
				<div class="input-group number-spinner">
					<span class="input-group-btn">
						<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
					</span>
					<input type="text" class="form-control text-center" value="1">
					<span class="input-group-btn">
						<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
					</span>
				</div>
			</div> -->

			<input type="number" name="quantity" class="text-center" id="quantity" min="1" value="1">
			
			<!-- SHOP-ITEM BUTTON -->
			<div class="shop-item-btn">
				<input type="hidden" name="product_id" size="2" value="7343">
				<!-- <input type="button" value="Купи" id="button-cart" rel="7343" data-loading-text="Зареждане..." class="button">
				<button class="add-to-cart btn btn-default" type="button">add to cart</button> -->
				<form method="post" action="index1.php?action=add&code=<?php echo '<?php ';?>echo $product_array[$key]["code"]; <?php echo '?>';?>">
					<input type="submit" value="Add to cart" class="btnAddAction add-to-cart btn btn-default">
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
