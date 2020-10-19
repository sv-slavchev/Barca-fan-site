<?php
/* Smarty version 3.1.29, created on 2017-05-13 19:38:17
  from "C:\xampp\htdocs\BarcaTrain\shop.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59174489637c23_17959662',
  'file_dependency' => 
  array (
    '27a440423407088a0a53b523772db02d2b5cec09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\shop.html',
      1 => 1494697068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59174489637c23_17959662 ($_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Bootstrap Site</title>
	<!-- dropdown button from w3s -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Site CSS -->
	<link href="mystyle.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header id="header" class="col-xs-12 col-sm-12">
			<div class="col-xs-12 col-sm-12 col-lg-6">
				<h1>Футболен клуб Барселона</h1>
				The Cataluña
			</div>
			<div class="hidden-xs hidden-sm hidden-md col-lg-6">
				<a href="#" id="headerLogonew" class="headerLogonew">
					<img src="./img/mesqueunclub.png">
				</a>
			</div>
			<div id="nav_bar" class="col-xs-12 col-sm-12">
				<!-- <nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
							<a class="navbar-brand" href="home.html"><span class="glyphicon glyphicon-home"></span>&nbsp;FCB</a>
							<a href="home.html" id="headerLogonew" class="headerLogonew">
								<img src="./img/barcelona.png" width="50" height="50">
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="#">Новини</a></li>
								<li><a href="shop.html">Фен зона</a></li>
								<li class="w3-dropdown-hover">
									<a href="#">Ла лига</a>
									<div class="w3-dropdown-content w3-white w3-card-4">
										<a href="standings.html">Класиране</a>
										<a href="results.html">Резултати</a>
										<a href="fixtures.html">Програма</a>
									</div>
								</li>
								<li class="w3-dropdown-hover">
									<a href="#">ФК Барселона</a>
									<div class="w3-dropdown-content w3-white w3-card-4">
										<a href="history.html">История</a>
										<a href="squad.html">Състав</a>
										<a href="campnou.html">Камп Ноу</a>
									</div>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search in the site">
									</div>
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</form>
								<li>
									<a href="" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
								</li>
								<li>
									<a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav> -->

				<!-- navbar with search4  http://bootsnipp.com/snippets/a6aV0 -->
				<nav class="[ navbar ][ navbar-bootsnipp animate ]" role="navigation">
					<div class="[ container-fluid ]">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="[ navbar-header ]">
							<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#myNavbar">
								<span class="[ sr-only ]">Toggle navigation</span>
								<span class="[ icon-bar ]"></span>
								<span class="[ icon-bar ]"></span>
								<span class="[ icon-bar ]"></span>
							</button>
							<div class="[ animbrand ]">
								<a href="index.php?cmd=Home" id="headerLogonew" class="headerLogonew">
									<img src="./img/barcelona.png" width="50" height="50">
								</a>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="[ collapse navbar-collapse ]" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="[ visible-xs ]">
									<form action="http://bootsnipp.com/search" method="GET" role="search">
										<div class="[ input-group ]">
											<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
											<span class="[ input-group-btn ]">
												<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
												<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
											</span>
										</div>
									</form>
								</li>
								<li><a href="index.php?cmd=News">Новини</a></li>
								<li><a href="index.php?cmd=FanZone">Фен зона</a></li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ]" data-toggle="w3-dropdown-hover">Ла Лига</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="index.php?cmd=Standings">Класиране</a></li>
										<li><a href="index.php?cmd=Results">Резултати</a></li>
										<li><a href="index.php?cmd=Fixtures">Програма</a></li>
									</ul>
								</li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="w3-dropdown-hover">ФК Барселона</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="index.php?cmd=History">История</a></li>
										<li><a href="index.php?cmd=Squad">Състав</a></li>
										<li><a href="index.php?cmd=Campnou">Камп Ноу</a></li>
									</ul>
								</li>
							</ul>		
							<ul class="nav navbar-nav navbar-right">
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Register</a></li>
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

								<li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="[ bootsnipp-search animate ]">
						<div class="[ container-fluid ]">
							<form action="http://bootsnipp.com/search" method="GET" role="search">
								<div class="[ input-group ]">
									<input type="text" class="[ form-control ]" name="q" placeholder="Search...">
									<span class="[ input-group-btn ]">
										<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<main class="col-xs-12 col-sm-12">
			<div class="container-fluid">
				<div class="row">
					<div id="title">
						<h2>Фен зона</h2>
					</div>
					<hr>

					<!-- Fan Carousel -->
					<div class="row fan-carousel hidden-sm">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1" class=""></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img class="fan-first-slide" src="./img/shopcarousel1.jpg" alt="First slide" width="1170" height="600">
									<div class="header-text">
										<h1>ФЕН ЗОНА</h1>
										<h2>Официални фен артикули</h2>
									</div>
								</div>
								<div class="item">
									<img class="fan-second-slide" src="./img/shopcarousel2.jpg" alt="Second slide" width="1170" height="600">
									<div class="header-text">
										<br><br>
										<h2>Чудесна идея за подарък <br><br> на един истински фен!</h2>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					<!-- Shop Items -->
					<div id="content shop-items">
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div class="item-img">
								<a href="shop-item.html">
									<img src="./img/shop-items/case.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="shop-item.html">БАРСЕЛОНА 3D ПАНЕЛ ЗА IPHONE 7</a>
								</div>
								<div class="desc std">
									- iPhone 7  панел
									- 3D дълбочинна технология, която найстина изглежда невероятно на всеки ъгъл
									- предпазва от удари и надрасквания, тънък дизайн
									- достъп до всички входове и функции
									- в официална прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									28,08 лв.
								</div>
								<div class="addtocart">
									<a href="purchase.html" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/djagi.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">БАРСЕЛОНА ДЖАГА</a>
								</div>
								<div class="desc std">
									- джага
									- 6 играчи в отбор
									- здрава конструкция, принт с ефект на трева
									- брояч на резултата от всяка страна
									- с две пластмасови топчета
									- реалистични графики като на стадион
									- стоманени пръчки с лесно завъртане и меки дръжки
									- 50.5cm x 37cm x 12cm
									- официален лицензиран продукт
								</div>
								<div class="price">
									84,29 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/kolonki.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">USB ДИГИТАЛНИ КОЛОНКИ</a>
								</div>
								<div class="desc std">
									- USB дигитални колонки
									- високо качество на звука, мощност rms
									- 4 вата
									- размер на конуса 1inch
									- диапазон на честотата - 150hz
									- приблизителни размери 12cm x 5cm x 3cm
									- официален лицензиран продукт
								</div>
								<div class="price">
									56,18 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/visoka_chasha.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">БАРСЕЛОНА ВИСОКА ЧАША ЗА БИРА</a>
								</div>
								<div class="desc std">
									- висока чаша за бира 568 мл
									- височина 24cm
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									22,46 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/vratarski_rukavici.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ВРАТАРСКИ РЪКАВИЦИ ЗА ДЕЦА</a>
								</div>
								<div class="desc std">
									- вратарски ръкавици за деца
									- част при дланта от латексова пяна
									- гръб от лека пяна, еластична връзка за сигурно закрепване
									- подходящи за 7-9 годишни
									- в цветен плик с цип
									- официален лицензиран продукт
								</div>
								<div class="price">
									23,89 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/plakat.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">БАРСЕЛОНА ГОЛЯМ ПЛАКАТ</a>
								</div>
								<div class="desc std">
									- голям плакат
									- размер 61cm x 91cm
									- навит
									- официален лицензиран продукт
								</div>
								<div class="price">
									11,21 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/kojen_kaluf.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КОЖЕН КАЛЪФ ЗА ТЕЛЕФОН ТИП ДЖОБ</a>
								</div>
								<div class="desc std">
									- висококачествена еко кожа, с вътрешност против надраскване
									- тънко отделение за дебитни/кредитни карти, 
									- затваря се с копче за повече сигурност
									- прибиращо се "ушенце" за лесен достъп
									- универсален размер, подходящ за повечето малки смартфони, като iPhone 4/4S, 5/5S and Samsung Galaxy mini модели или подобни
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									36,51 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/capitanska_lenta.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КАПИТАНСКА ЛЕНТА ЗА РЪКА</a>
								</div>
								<div class="desc std">
									- капитанска лента за ръка
									- универсален размер
									- широчина: 9cm
									- върху картонена опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									11,21 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/campnou.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ГОЛЯМ ПЛАКАТ - КАМП НОУ</a>
								</div>
								<div class="desc std">
									- голям плакат
									- размер 61cm x 91cm
									- навит
									- официален лицензиран продукт
								</div>
								<div class="price">
									11,21 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/gotvarska_shapka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ГОТВАРСКА ШАПКА</a>
								</div>
								<div class="desc std">
									- готварска шапка
									- универсален размер
									- 100% памук
									- с етикет
									- официален лицензиран продукт
								</div>
								<div class="price">
									16,84 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/graviran_himikal.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ГРАВИРАНА ХИМИКАЛКА</a>
								</div>
								<div class="desc std">
									- гравирана химикалка
									- черно мастило
									- размери 13cm x 1cm
									- в луксозна подаръчна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									22,46 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/plakat_mesi.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ГОЛЯМ ПЛАКАТ МЕСИ</a>
								</div>
								<div class="desc std">
									- голям плакат
									- размер 61cm x 91cm
									- навит
									- официален лицензиран продукт
								</div>
								<div class="price">
									11,21 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/keramichna_chasha.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КЕРАМИЧНА ЧАША</a>
								</div>
								<div class="desc std">
									- керамична чаша
									- височина 9cm, 8cm диаметър
									- 295 мл
									- в прозрачна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									14,02 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/kluchodurjatel_otvarachka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КЛЮЧОДЪРЖАТЕЛ ОТВАРАЧКА</a>
								</div>
								<div class="desc std">
									- ключодържател отварачка за бутилки
									- размер 80mm x 15mm
									- върху картонена опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									14,02 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
						
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/koledna_shapka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КОЛЕДНА ШАПКА</a>
								</div>
								<div class="desc std">
									- коледна шапка
									- универсален размер
									- с етикет
									- официален лицензиран продукт
								</div>
								<div class="price">
									14,02 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/malka_vrata.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">КОМПЛЕКТ ЗА ФУТБОЛ</a>
								</div>
								<div class="desc std">
									- комплект за футбол
									- 2 x надуваеми вратички
									- 54cm x 44cm x 44cm
									- 12.7 см футболна топка
									- ръчна помпа
									- чанта за носене
									- лесно сглобяване
									- 4 x наземни колчета
									- официален лицензиран продукт
								</div>
								<div class="price">
									61,80 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/slushalki.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ЛУКСОЗНИ СЛУШАЛКИ</a>
								</div>
								<div class="desc std">
									- регулируеми слушалки
									- диаметър на колонка 40mm
									- честота: 20-20,000Hz, макс вход: 40mW
									- импеданс: 32 0hm, чувствителност: 104dB/mW +/- 3dB
									- мощност 1000mW, диаметър на жак: посребрен 3.5mm стерео
									- дължина на кабела: 1.2m
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									42,13 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/malka_topka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">МАЛКА ТОПКА ЗА ТРИКОВЕ</a>
								</div>
								<div class="desc std">
									- малка топка за трикове
									- топка за трикове, пълна с бобчета
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									12,65 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/rukavici.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ПЛЕТЕНИ РЪКАВИЦИ</a>
								</div>
								<div class="desc std">
									- плетени ръкавици за възрастни
									- бродиран герб
									- с висящ етикет
									- официален лицензиран продукт
								</div>
								<div class="price">
									18,27 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					
						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/ushanka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ПЛЕТЕНА УШАНКА</a>
								</div>
								<div class="desc std">
									- плетена ушанка
									- мека кожа по ръбовете и връзка под брадичката
									- универсален размер за възрастни
									- бродиран герб
									- с висящ етикет
									- официален лицензиран продукт
								</div>
								<div class="price">
									36,51 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/prusten.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ПРЪСТЕН С ВЪРТЯЩ СЕ ЕЛЕМЕНТ</a>
								</div>
								<div class="desc std">
									- пръстен с въртящ се елемент от неръждаема стомана
									- размер x
									- в подаръчна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									20,56 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/radio.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">РАДИО КОЛОНКА</a>
								</div>
								<div class="desc std">
									- FM радио с дизайн на колонка
									- приблизителни размери 15cm x 11cm x 10cm 
									- гнездо за слушалки, aux in
									- изисква 4 x AA батерии (не са включени)
									- в подаръчна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									25,13 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/radio_topka.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">РАДИО ФУТБОЛНА ТОПКА</a>
								</div>
								<div class="desc std">
									- FM радио с дизайн на футболна топка
									- приблизителни размери 8cm в диаметър
									- изисква 2 x AA батерии (не са включени)
									- в подаръчна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									19,56 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/snimka_mesi.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">РАМКИРАНА СНИМКА - МЕСИ</a>
								</div>
								<div class="desc std">
									- рамкирана снимка
									- 40cm x 30cm
									- официален лицензиран продукт
								</div>
								<div class="price">
									39,94 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/djoistik.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ДЖОЙСТИК ЗА XBOX 360</a>
								</div>
								<div class="desc std">
									- скин за джойстик xbox 360
									- не избледнява
									- водоустойчив, финиш без балончета
									- против надраскване
									- лесно приложение
									- не оставя следи след премахване
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									20,46 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/laptop_skin.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">СКИН ЗА ЛАПТОП 14-17 INCH</a>
								</div>
								<div class="desc std">
									- скин за лаптоп
									- съвместимо с 14-17 инчови екрани
									- не избледнява
									- водоустойчив, финиш без балончета
									- против надраскване
									- лесно приложение
									- не оставя следи след премахване
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									32,18 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/spalen_komplekt.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">СПАЛНО БЕЛЬО КОМПЛЕКТ - ДВОЙНО ЛЕГЛО</a>
								</div>
								<div class="desc std">
									- комплект спално бельо за двойно легло с две лица
									- плик за завивка
									- две калъфки за възглавници
									- размери: 200cm x 200cm
									- 52% полиестер 48% памук
									- официален лицензиран продукт
								</div>
								<div class="price">
									75,34 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/stenen_chasovnik.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">СТЕНЕН ЧАСОВНИК</a>
								</div>
								<div class="desc std">
									- стенен часовник
									- диаметър: 24 cm
									- изисква 1 x aa батерия (не е включена)
									- в представителна кутия
									- официален лицензиран продукт
								</div>
								<div class="price">
									22,08 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/iphone6_case.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ТПУ КАЛЪФ ЗА IPHONE 6 / 6S</a>
								</div>
								<div class="desc std">
									- iPhone 6 / 6S прозрачен удароустойчив калъф от ТПУ
									- официалния герб е точно позициониран да допълни съществуващия дизайн на телефона
									- отлично пасва на телефона, достъп до всички входове и функции
									- най-високо качество, първокачествена защита
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									16,84 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/iphone7_case.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ТПУ КАЛЪФ ЗА IPHONE 7</a>
								</div>
								<div class="desc std">
									- iPhone 7 прозрачен удароустойчив калъф от ТПУ
									- официалния герб е точно позициониран да допълни съществуващия дизайн на телефона
									- отлично пасва на телефона, достъп до всички входове и функции
									- най-високо качество, първокачествена защита
									- в прозрачна опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									16,84 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/topka1.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ФУТБОЛНА ТОПКА</a>
								</div>
								<div class="desc std">
									- синтетична футболна топка
									- размер 5
									- 26 панела
									- официален лицензиран продукт
								</div>
								<div class="price">
									25,27 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/topka2.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ФУТБОЛНА ТОПКА</a>
								</div>
								<div class="desc std">
									- синтетична футболна топка
									- размер 5
									- 26 панела
									- официален лицензиран продукт
								</div>
								<div class="price">
									26,70 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/topka3.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ФУТБОЛНА ТОПКА С ПОДПИСИ И СНИМКИ</a>
								</div>
								<div class="desc std">
									- синтетична футболна топка с металик покритие
									- официалните подписи на играчите и снимки
									- размер 5
									- 31 панела
									- официален лицензиран продукт
								</div>
								<div class="price">
									33,70 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/futbolni_kori.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ФУТБОЛНИ КОРИ ЗА МЛАДЕЖИ</a>
								</div>
								<div class="desc std">
									- футболни кори за младежи
									- дебела лята пластмасова кора, вътрешност с удобна подплънка
									- протектор за глезен с удобна подплънка, еластична самозалепваща връзка с велкро
									- размери 22cm
									- подходящи за 10-12 годишни
									- в цветен плик с цип
									- официален лицензиран продукт
								</div>
								<div class="price">
									19,65 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/ranica.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ФУТБОЛНИ РАНИЦА</a>
								</div>
								<div class="desc std">
									- регулиране с връзки
									- метални капси на дупките
									- приблизителни размери 40cm x 33cм
									- върху картонена опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									19,65 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/shal.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">БАРСЕЛОНА ШАЛ</a>
								</div>
								<div class="desc std">
									- плетен шал от жакард
									- 100 % акрил
									- проблизителни размери: 132cm x 19cm
									- върху картонена опаковка
									- официален лицензиран продукт
								</div>
								<div class="price">
									23,08 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/shaker.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ШЕЙКЪР ЗА ПРОТЕИН</a>
								</div>
								<div class="desc std">
									- 750ml шейкър за протеин
									- изрязан дизайн за лесно хващане
									- размер 22cm x 9cm
									- официален лицензиран продукт
								</div>
								<div class="price">
									15,46 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/teniska_iniesta.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">ИНИЕСТА NIKE HERO ТЕНИСКА, РАЗМЕР L</a>
								</div>
								<div class="desc std">
									- тениска за възрастни
									- размер: L
									- 100% памук
									- официален лицензиран продукт
								</div>
								<div class="price">
									56,18 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/slushalki1.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">Аудио Слушалки BARCELONA Earphones</a>
								</div>
								<div class="desc std">
									Аудио Слушалките BARCELONA Earphones са чудесен подарък за всеки фен на Каталунците, а защо не и аксесоар за лична употреба. Предлагат се в кутия, която ги предпазва при транспортиране. Логото на Барселона се забелязва върху двете слушалки. Оцветени са в червено и синьо- характерните за отбора цветове, а кабелът е черен.Характеристики:Тип - полуотворениИмпеданс - 320 hmЧувствителност - 105 dB/mWЧестота - 20/20 000 HzДължина на кабела - 1,2 мВъзбудител - 10 mmОфициално лицензиран продукт
								</div>
								<div class="price">
									19,99 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>

						<div class="shop-item col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
							<div>
								<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">
									<img src="./img/shop-items/naduvaemo_kreslo.jpg" alt="" width="240" height="270">
								</a>
							</div>
							<div class="item-content">
								<div class="name">
									<a href="http://www.fans.bg/arsenal-f-c-ps4-pro-skin-bundle">Кресло BARCELONA Inflatable Football Chair</a>
								</div>
								<div class="desc std">
									Креслото BARCELONA Inflatable Football Chair е компактно надуваемо кресло с удобни поставки за напитки от двете страни. Лекото му тегло го прави лесен за пренос. Размери: 65/85/80см Ширина на седалката: 33см Официално лицензиран продукт SPORTRESPECT.COM TEAM
								</div>
								<div class="price">
									55,00 лв.
								</div>
								<div class="addtocart">
									<a onclick="cart.add('8206');" class="button btn-cart">Купи</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Pagination -->				
				<div class="pagination-row">
					<ul class="pagination">
						<li class="disabled"><a href="#">«</a></li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">»</a></li>
					</ul>
				</div>

			</div>
			<!-- Modal for Login -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div id="signin" class="panel panel-default modal-body panel-heading">
						<strong>Sign in to continue</strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<form role="form" action="#" method="POST">
								<fieldset>
									<div class="row">
										<div class="center-block">
											<img class="profile-img"
												src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-10  col-md-offset-1 ">
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-user"></i>
													</span>
													<input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-lock"></i>
													</span>
													<input class="form-control" placeholder="Password" name="password" type="password" value="">
												</div>
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="panel-footer">
							Don't have an account! <a href="" data-toggle="modal" data-target="#myModalReg" onClick=""> Sign Up Here </a>
							<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- Modal for Registration -->
			<div class="modal fade" id="myModalReg" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div id="signin" class="panel panel-default modal-body panel-heading">
						<strong>Registration Form</strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<form role="form" action="#" method="POST">
								<fieldset>
									<div class="row">
										<!-- <div class="validateForm col-sm-12 col-md-10 col-md-offset-1">
											<div class="form-group">
												<label class="control-label">First Name</label>
												<input type="text" class="form-control firstName" id="firstName" autofocus/>
											</div>
											<div class="form-group">
												<label class="control-label">Last Name</label>
												<input type="text" class="form-control lastName" id="lastName" />
											</div>
											<div class="form-group">
												<label class="control-label">Username</label>
												<input type="text" class="form-control username" id="username" />
											</div>
											<div class="form-group">
												<label class="control-label">Password</label>
												<input type="password" class="form-control password" id="password" />
											</div>
											<div class="form-group">
												<label class="control-label">Confirm Password</label>
												<input type="password" class="form-control cpassword" id="cpassword" />
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-lg btn-primary btn-block col-sm-6" value="Register">
												<input type="reset" class="btn btn-lg btn-primary btn-block col-sm-6" value="Clear form">
											</div>
										</div> -->
										<div class="validateForm col-sm-12 col-md-10 col-md-offset-1">
											<!-- <div class="form-group">
												<label class="control-label">Your Name</label>
												<input type="text" class="form-control name" id="name" autofocus/>
											</div>
											<div class="form-group">
												<label class="control-label">Your Email</label>
												<input type="text" class="form-control email" id="email" />
											</div>
											<div class="form-group">
												<label class="control-label">Username</label>
												<input type="text" class="form-control username" id="username" />
											</div>
											<div class="form-group">
												<label class="control-label">Password</label>
												<input type="password" class="form-control password" id="password" />
											</div>
											<div class="form-group">
												<label class="control-label">Confirm Password</label>
												<input type="password" class="form-control cpassword" id="cpassword" />
											</div> 
											<div class="form-group">
												<label for="name" class="control-label">Your Name</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
													</div>
												</div>
											</div> -->
											<div class="form-group">
												<label for="name" class="control-label">Username</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Your Email</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Confirm Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group col-sm-12">
												<input type="submit" id="buttonreg" class="btn btn-lg btn-primary col-sm-5 col-sm-offset-1" value="Register">
												<input type="reset" class="btn btn-lg btn-primary col-sm-5" value="Clear form">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="clearfix"></div>
		<footer>
			<img src="./img/fu.png" width="130" height="40">
			&nbsp;
			<a href="https://www.facebook.com/fcbarcelona/?fref=ts" id="headerLogonew" class="headerLogonew">
				<img src="./img/facebook/fb3white.png" width="40" height="40">
			</a>
			<a href="https://www.instagram.com/fcbarcelona/" id="headerLogonew" class="headerLogonew">
				<img src="./img/instagram/inst1.png" width="40" height="40">
			</a>
			<a href="https://twitter.com/fcbarcelona" id="headerLogonew" class="headerLogonew">
				<img src="./img/twitter/tw.png" width="40" height="40">
			</a>
			<a href="https://plus.google.com/116151548242653888082/posts" id="headerLogonew" class="headerLogonew">
				<img src="./img/google_plus/gp3.png" width="40" height="40">
			</a>
			<a href="https://www.youtube.com/fcbarcelona" id="headerLogonew" class="headerLogonew">
				<img src="./img/youtube/yt4.png" width="40" height="40">
			</a>
			<a href="#" class="button-to-top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</footer>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<!-- navbar with search4 -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() { 

		    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
				event.preventDefault();
				$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
				$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
				$('a[href="#toggle-search"]').closest('li').toggleClass('active');

				if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
					/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
					setTimeout(function() { 
						$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
					}, 100);
				}			
			});

			$(document).on('keyup', function(event) {
				if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
					$('a[href="#toggle-search"]').trigger('click');
				}
			});
		    
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
