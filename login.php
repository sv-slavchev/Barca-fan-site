<?php
	session_start();
	require_once('db_connection.php');	
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');
	$smarty = new Smarty();

	if(isset($_POST['btn_login'])){

	$errors = array();

	if(empty($_POST['username'])) {
		$errors['username1'] = "Username field cannot be empty ";
	}

	if(empty($_POST['password'])) {
	$errors['password1'] = "Password field cannot be empty ";
	}

	$username = $_POST['username'];
	$password = $_POST['password'];


	mysqli_query($conn,"SET NAMES 'utf8'");

	if(count($errors)== 0){
		//header("Location:shop.html");
		//exit();

	//$username = mysqli_real_escape_string($conn, $username);
	//$password = mysqli_real_escape_string($conn, $password);
	$password = md5($password);
		
		
		
	$sql = "SELECT username, password FROM users WHERE username = '$username'  and password = '$password'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);
	      
	$count = mysqli_num_rows($result);
	 
	      // If result matched $egn, table row must be 1 row	

	    //  if (mysqli_num_rows($result) == 1) {	
	     if($count > 0 ) {	
			//echo 'you are logged in';
			 $_SESSION['username'] = $row['username'];
	         $_SESSION['idhash'] = md5($_SERVER['HTTP_USER_AGENT']);
			header("Location:cart.php");
			//$smarty->display('shop.html');
	    }
		
	   else {
		  $errors['username2']= "Wrong username or password";
	    	
	    	 }

	}
	mysqli_close($conn);
	}
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

	<!-- Website CSS style -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <style>
    	.navbar-bootsnipp {
			margin-bottom: 0px;
		}

    	/* standings */
		.table {
		  transition: all 0.2s ease-in-out;
		}
		thead>tr>th {
			text-align: center;
		}
		tbody a:hover {
			text-decoration: none;
		}

		#danger-zone {
			background-color: tomato;
		}
		#champ-leag {
			background-color: lightgreen;
		}
		#leag-europe {
			background-color: rgb(143, 188, 143);
		}
		#champ-leag-qualific {
			background-color: rgb(202, 231, 202);
		}
		#tabl-head {
			background-color: darkgrey;
		}
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
				<img src="./img/mesqueunclub.png">
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
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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
			<!-- Content and sidebar -->
			<div class="row">
				<div id="content" class="col-sm-8">
					<div class="main-login main-center">
						<h3>Вход</h3>
						<hr>
						<form method="post" action="">
							<div class="form-group">
								<label for="username" class="control-label">Потребителско име</label>
								<div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" id="username"  placeholder="Моля въведете потребителско име"/>
									</div>
									<p><?php if(isset($errors['username1'])) echo $errors['username1']; ?> </p>
									<p><?php if(isset($errors['username2'])) echo $errors['username2']; ?> </p>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="control-label">Парола</label>
								<div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Моля въведете вашата парола"/>
									</div>
									<p><?php if(isset($errors['password1'])) echo $errors['password1']; ?> </p>
								</div>
							</div>
							<div class="form-group ">
								<input type="submit" id="button" name="btn_login" value="Вход" class="btn btn-primary btn-lg btn-block login-button" />
							</div>
							<div class="panel-footer">
								<!-- Don't have an account! <a href="registration_final.php">Sign Up Here</a> -->
								Нямаш акаунт? <a href="registration_final.php">Регистрирай се тук!</a>
								<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
							</div>
						</form>
					</div>
				</div>
				<aside class="hidden-xs col-sm-4">
						<!-- <table class="table-responsive table-bordered table-hover table-condensed col-xs-12 col-sm-12">
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
						</table> -->

						<table class="table table-responsive table-bordered table-hover table-condensed">
							<thead>
							  <tr>
							    <th id="tabl-head">№</th>
							    <th id="tabl-head">Отбор</th>
							    <th id="tabl-head">П</th>
							    <th id="tabl-head">Р</th>
							    <th id="tabl-head">З</th>
							    <th id="tabl-head">Т</th>
							  </tr>
							</thead>
							<tbody>
							  <tr class="success">
							  	<td id="champ-leag">1</td>
							    <td>Реал Мадрид</td>
							    <td>29</td>
							    <td>6</td>
							    <td>3</td>
							    <td>93</td>
							  </tr>
							  <tr class="success">
							  	<td id="champ-leag">2</td>
							    <td>Барселона</td>
							    <td>28</td>
							    <td>6</td>
							    <td>4</td>
							    <td>90</td>
							  </tr>
							  <tr class="success">
							    <td id="champ-leag">3</td>
							    <td>Атлетико Мадрид</td>
							    <td>23</td>
							    <td>9</td>
							    <td>6</td>
							    <td>78</td>
							  </tr>
							  <tr>
							    <td id="champ-leag-qualific">4</td>
							    <td>Севиля</td>
							    <td>21</td>
							    <td>8</td>
							    <td>6</td>
							    <td>72</td>
							  </tr>
							  <tr>
							    <td id="leag-europe">5</td>
							    <td>Виляреал</td>
							    <td>19</td>
							    <td>10</td>
							    <td>9</td>
							    <td>67</td>
							  </tr>
							  <tr>
							    <td>6</td>
							    <td>Реал Сосиедад</td>
							    <td>19</td>
							    <td>7</td>
							    <td>12</td>
							    <td>64</td>
							  </tr>
							  <tr>
							    <td>7</td>
							    <td>Атлетик Билбао</td>
							    <td>19</td>
							    <td>6</td>
							    <td>13</td>
							    <td>63</td>
							  </tr>
							  <tr>
							    <td>8</td>
							    <td>Еспаньол</td>
							    <td>15</td>
							    <td>11</td>
							    <td>12</td>
							    <td>56</td>
							  </tr>
							  <tr>
							    <td>9</td>
							    <td>Алавес</td>
							    <td>14</td>
							    <td>13</td>
							    <td>11</td>
							    <td>55</td>
							  </tr>
							  <tr>
							    <td>10</td>
							    <td>Ейбар</td>
							    <td>15</td>
							    <td>9</td>
							    <td>14</td>
							    <td>54</td>
							  </tr>
							  <tr>
							  	<td colspan="6"><a href="standings.html">Виж пълното класиране <span class="glyphicon glyphicon-chevron-right"></span></a></td>
							  </tr>
							</tbody>
						</table>
						
						<!-- Next Game -->
						<div class="row">
							<div class="featured-event">
								<div class="cell cell--justified u-p12 col-sm-12">
									<h3>Следваща среща</h3>
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
										</div>
									</div>
									<div class="cell__section col-sm-4">
										<div class="cell__content">
											<img src="./img/standings/juventus.png" class="img-responsive img--x48">
										</div>
										<div class="cell__content">Juventus</div>
									</div>
								</div>
							</div>
						</div>
				</aside>
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
				<img src="./img/youtube/yt4.png" width="40" height="40">
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
		        document.getElementById("demo").innerHTML = "Приключил";
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