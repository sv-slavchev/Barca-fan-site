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
		.btnAddAction {
			background-color: #eb9e4f;
		    border: 0;
		    padding: 3px 10px;
		    margin-top: 10px;
		    color: #ffffff;
		    border-radius: 2px;
		}
		.product-item {
			/* background: #ffffff; 
			padding:5px;
			margin: 5px;*/
			border:#CCC 3px solid;
			margin-bottom: 10px;
		}
		.product-item form {
			text-align:center;
			margin-top:10px;
		}
		.product-price {    
			color: #005dbb;
		    font-weight: 600;
		    padding-bottom: 10px;
		}
		.product-image {
			height:100px;
			/* background-color:#FFF; */
		}
		#btnReview {
			text-align: center;
			padding-bottom: 10px;
		}
		#quantity {
			max-width: 50px;
		}
		

		.pagination-row {
			text-align: center;
		}

		.pagination>li>a, .pagination>li>span {
			border-radius: 50% !important;
			margin-left: 5px;
		}

	</style>



</head>
<?php
	session_start();
?>
<body>
	<div class="container">
		<header id="header" class="col-xs-12 col-sm-12">
			<div class="col-xs-12 col-sm-12 col-lg-6">
				<h1>Футболен клуб Барселона</h1>
				The Cataluña
			</div>
			<div class="hidden-xs hidden-sm hidden-md col-lg-6">
				<img src="./img/mesqueunclub.png">
			</div>
			<div id="nav_bar" class="col-xs-12 col-sm-12">
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
								<li><a href="index.php?cmd=Logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
			<div id="title">
				<h2>Фен зона</h2>
			</div>
			<hr>

			<!-- Fan Carousel -->
			<div class="fan-carousel hidden-sm">
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

			<!-- Content and sidebar -->
			<div class="row">
				<div class="container-fluid" id="content">
					<div id="title">
						<h3>Products</h3>
					</div>
					<hr>
					<?php
						require_once("dbcontroller.php");
						$db_handle = new DBController();
					?>

					<div id="product-grid">
						<!-- za kogato aside raboti <div class="col-md-8"> -->
							<?php
								$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id  ASC limit 10");
								if (!empty($product_array)) { 
									foreach($product_array as $key=>$value){
										?>
										<!-- <div class="product-item col-xs-6 col-sm-4 col-md-3">
											<form method="post" action="index1.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
												<div class="product-image">
													<img src="<?php echo $product_array[$key]["image"]; ?>">
												</div>
												<div class="product-name">
													<strong><?php echo $product_array[$key]["name"]; ?></strong>
												</div>
												<div class="product-price">
													Price: <?php echo "$".$product_array[$key]["price"]; ?>
												</div>
												<div>
													<input type="number" name="quantity" class="text-center" id="quantity" min="1" value="1">
													<input type="submit" value="Add to cart" class="btnAddAction">
												</div>
											</form>
											<form id="btnReview" method="post" action="review.php?action=review&code=<?php echo $product_array[$key]["code"]; ?>">
												<input type="submit" value="Reviews" class="btnReview">
											</form>
										</div> -->
										<div class="product-item col-xs-6 col-sm-4 col-md-3">
											<form method="post" action="index1.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
												<div class="product-image">
													<img src="<?php echo $product_array[$key]["image"]; ?>">
												</div>
												<div class="item-content">
													<div class="product-name">
														<strong><?php echo $product_array[$key]["name"]; ?></strong>
													</div>
													<div class="desc std">
														<strong><?php echo $product_array[$key]["description"]; ?></strong>
													</div>
													<div class="product-price">
														Price: <?php echo "$".$product_array[$key]["price"]; ?>
													</div>
													<div>
														<input type="number" name="quantity" class="text-center" id="quantity" min="1" value="1">
														<input type="submit" value="Add to cart" class="btnAddAction">
													</div>
												</div>
											</form>
											<form id="btnReview" method="post" action="review.php?action=review&code=<?php echo $product_array[$key]["code"]; ?>">
												<input type="submit" value="Reviews" class="btnReview">
											</form>
										</div>
									<?php
									}
								}	
							//echo '<pre>'.print_r($product_array).'</pre>'.'</br>';
							?>
							<div class="col-md-12 pagination-row">
								<form method="post" action="cart1.php">
									<ul class="pagination">
										<li class="disabled"><a href="#">«</a></li>
										<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
										<li><a href="cart1.php" name="second_page">2</a></li>
									</ul>
								</form>
							</div>
						<!-- za kogato aside </div> -->
						<!-- <aside class="hidden-xs col-md-4">
							<table class="table-responsive table-bordered table-hover table-condensed col-xs-12 col-sm-12">
								<thead>
									<tr>
										<th>№</th>
										<th>Отбор</th>
										<th>Mачове</th>
										<th>Точки</th>
									</tr>
								</thead>
								<tbody>
									<tr class="success">
										<td>1</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>7</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>8</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr>
										<td>9</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
									<tr class="danger">
										<td>10</td>
										<td>Anna</td>
										<td>Anna</td>
										<td>1</td>
									</tr>
								</tbody>
							</table>
							
							<div class="row">
								<a href="/atletico-madrid-valencia-cf/DgbsLgb" class="featured-event featured__eventLink js-event-link" data-id="7127680" target="_blank" title="View match details">
									
									<div class="cell cell--justified u-p12 col-sm-12">
										<h3>Next game</h3>
										<p id="demo"></p>
										<div class="cell__section col-sm-4">
											<div class="cell__content">
												<img src="./img/barcelona.png" class="img-responsive img--x48">
											</div>
											<div class="cell__content">Barcelona</div>
										</div>
										<div class="cell__section col-sm-4">
											<div class="cell__content h3">
												<span class="js-adjust-date" data-timestamp="1488726900" data-format="H:i">21:45</span>
												<br>
												<small>Today</small>
											</div>
										</div>
										<div class="cell__section col-sm-4">
											<div class="cell__content">
												<img src="./img/club_logo/valencia.png" class="img-responsive img--x48">
											</div>
											<div class="cell__content">Valencia</div>
										</div>
									</div>
								</a>
							</div>
						</aside> -->
					</div>
				</div>
			</div>
		</main>
		<div class="clearfix"></div>
		<footer>
			<img src="./img/fu.png" width="130" height="40">
			&nbsp;
			<a href="https://www.facebook.com/fcbarcelona/?fref=ts" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/facebook/fb3white.png" width="40" height="40">
			</a>
			<a href="https://www.instagram.com/fcbarcelona/" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/instagram/inst1.png" width="40" height="40">
			</a>
			<a href="https://twitter.com/fcbarcelona" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/twitter/tw.png" width="40" height="40">
			</a>
			<a href="https://plus.google.com/116151548242653888082/posts" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/google_plus/gp3.png" width="40" height="40">
			</a>
			<a href="https://www.youtube.com/fcbarcelona" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/youtube/yt4.png" target="_blank" width="40" height="40">
			</a>
			<a href="#" class="button-to-top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</footer>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Countdown JS -->
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("May 19, 2017 21:45:00").getTime();

		// Update the count down every 1 second
		var countdownfunction = setInterval(function() {

		    // Get todays date and time
		    var now = new Date().getTime();
		    
		    // Find the distance between now an the count down date
		    var distance = countDownDate - now;
		    
		    // Time calculations for days, hours, minutes and seconds
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		    // Output the result in an element with id="demo"
		    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		    + minutes + "m " + seconds + "s ";
		    
		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(countdownfunction);
		        document.getElementById("demo").innerHTML = "EXPIRED";
		    }
		}, 1000);
	</script>

	<!-- navbar with search4 -->
	<script type="text/javascript">
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
	</script>
</body>
</html>