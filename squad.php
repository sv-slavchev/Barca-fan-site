<?php
	session_start();
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
		body>.container>#header {
			margin-top: -20px;
		}
		
		#season-text {
			background-color: rgba(34,39,51,0.6);
			color: #d3d6d7;
			/*position: absolute;
			margin-top: 555px;*/
			margin-top: -85px;
			max-width: 1080px;
		}

		.coaching-staff {
			margin-top: 20px;
			margin-left: 70px;
		}

		/*#coach-name {
			font-weight: 600;
		}

		.age_coach {
			background-color: rgb(49, 57, 71);
			padding-top: 5px;
		}

		.table_player, .table_coach {
			text-align: center;
			margin: 0px;
			width: 240px;
			background-color: #9c1737;
			color: white;
		}*/
	</style>
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
								<img src="C:/xampp/htdocs/BarcaTrain/img/barcelona.png" width="50" height="50">
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="#">Новини</a></li>
								<li><a href="#">Програма</a></li>
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
										<a href="#">Състав</a>
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
									<a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
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
								<!-- <li class="[ visible-xs ]">
									<form action="http://bootsnipp.com/search" method="GET" role="search">
										<div class="[ input-group ]">
											<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
											<span class="[ input-group-btn ]">
												<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
												<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
											</span>
										</div>
									</form>
								</li> -->
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
								<li><a href="registration_final.php" class="animate"><span class="glyphicon glyphicon-user"></span> Регистрация</a></li>
								<li><a href="login.php" class="animate"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li>
								<!-- <li><a href="" class="animate" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Register</a></li>
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
								
								<li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li> -->
							</ul>
						</div>
					</div>
					<!-- <div class="[ bootsnipp-search animate ]">
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
					</div> -->
				</nav>
			</div>
		</header>
		<main class="col-xs-12 col-sm-12">
			<div class="container-fluid">
				<div class="row">
					<div id="title">
						<h3>Състав</h3>
					</div>
					<hr>
					<div class="container-fluid" id="content">
						<!-- <img src="C:/xampp/htdocs/BarcaTrain/img/squad.jpg" class="img-responsive" alt="Squad" width="1090" height="300"> 
						&nbsp;-->
						
						<img src="./img/squad.jpg" class="figure-img img-fluid rounded img-responsive" alt="Squad" width="1090" height="300">
						<div id="season-text" class="col-xs-12">
							<h4>Сезон</h4>
							<h5>2016/2017</h5>
						</div>
						<?php

							$conn = mysqli_connect("localhost", "root", "", "barca_db");
							$qry = mysqli_query($conn, "SELECT * FROM players ORDER BY id ASC");

							while ($reslt = mysqli_fetch_assoc($qry)) {
						?>
						<div class="players">
							<div class="player col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-lg-3">
								<div>
									<img src="<?php echo $reslt['player-image']; ?>">
								</div>
								<div>
									<table class="table_player">
										<tr>
											<td class="num" rowspan="3"><?php echo $reslt["player-number"]; ?></td>
											<td class="name">Име: <?php echo $reslt["player-name"]; ?></td>
										</tr>
										<tr>
											<td class="pos">Позиция: <?php echo $reslt["player-position"]; ?></td>
										</tr>
										<tr>
											<td class="age">Години: <?php echo $reslt["player-age"]; ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<?php
							}
							mysqli_close($conn);
						?>
					</div>
					<h3>Треньорски щаб</h3>
					<hr>
				</div>
					
				<div class="coaches container-fluid" style="margin-left: 5px;" >
					<?php
						$conn = mysqli_connect("localhost", "root", "", "barca_db");
						$qry = mysqli_query($conn, "SELECT * FROM coaches ORDER BY id ASC limit 1");

						while ($reslt = mysqli_fetch_assoc($qry)) {
					?>

					<div class="coach col-xs-12 col-md-4" style="margin-bottom: 28px;" >
						<div>
							<img src="<?php echo $reslt['coach-image']; ?>" alt="">
						</div>
						<div>
							<table class="table_coach">
								<tr>
									<td class="name_coach">Име: <?php echo $reslt["coach-name"]; ?></td>
								</tr>
								<tr>
									<td class="pos_coach">Позиция: <?php echo $reslt["coach-position"]; ?></td>
								</tr>
								<tr>
									<td class="age_coach">Години: <?php echo $reslt["coach-age"]; ?></td>
								</tr>
							</table>
						</div>
					</div>

					<?php
						}
						mysqli_close($conn);
					?>
					
					
					
					<div class="coaching-staff hidden-xs col-sm-12 col-md-8">
						<!-- <table id="coaching-staff" class="table table-responsive table-condensed">
							<tbody>
								<tr>
									<td>Позиция: <?php echo $reslt["coach-position"]; ?></td>
									<td id="coach-name">Име: <?php echo $reslt["coach-name"]; ?></td>
									<td>Години: <?php echo $reslt["coach-age"]; ?></td>
								</tr>
							</tbody>
						</table> -->


						
						<table class="table table-responsive table-striped">
							<thead>
								<tr>
									<th scope="col">Име:</th>
									<th scope="col">Позиция:</th>
									<th scope="col">Години</th>
								</tr>
							</thead>
							<?php
								$conn = mysqli_connect("localhost", "root", "", "barca_db");
								$qry = mysqli_query($conn, "SELECT * FROM coaches ORDER BY id ASC");

								while ($reslt = mysqli_fetch_assoc($qry)) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $reslt["coach-name"]; ?></th>
									<td><?php echo $reslt["coach-position"]; ?></td>
									<td><?php echo $reslt["coach-age"]; ?></td>
								</tr>
							</tbody>
							<?php
								}
								mysqli_close($conn);
							?>
						</table>
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