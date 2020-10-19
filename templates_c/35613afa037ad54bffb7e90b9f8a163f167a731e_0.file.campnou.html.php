<?php
/* Smarty version 3.1.29, created on 2019-04-14 15:15:24
  from "C:\xampp\htdocs\BarcaTrain\campnou.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb3326c4323f3_41520343',
  'file_dependency' => 
  array (
    '35613afa037ad54bffb7e90b9f8a163f167a731e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\campnou.html',
      1 => 1524485612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3326c4323f3_41520343 ($_smarty_tpl) {
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
						<h3>Камп Ноу</h3>
					</div>
					<hr>
					<div id="content" class="col-sm-12">
						<!-- <img src="C:/xampp/htdocs/BarcaTrain/img/campnou.jpg" alt="Camp Nou" class="img-responsive" width="1090" height="300"> -->
						<img src="./img/campnou.jpg" class="img-responsive" alt="Camp Nou" width="1090" height="300">
						&nbsp;
						<p>
							Камп Ноу е домът на Футболен Клуб Барселона от 1957 г.
						</p>
						<p>
							Оценен е от УЕФА с 5 звезди, домакин е на множество международни срещи от висока класа и финали на Шампионската лига, най-последният от които е през 1999 година. Има капацитет от 99,786 души, което го прави най-големия в Европа и 11-ти в света.
						</p>
						<p>
							Официалното му име е Estadi del FC Barcelona (Стадион на ФК Барселона) до 2000 година, след това управата на отбора гласува за смяна на името на Ноу Камп.
						</p>
						<p>
							Срещу стадиона се намират Palau Blaugrana -стадион за закрити спортове,към него предналежи Ледената пързалка, стадиона за ледено-базирани игри. Точно зад комплекса е Mini Estadi, стадионът където ФК Барселона Атлетик (Барса Б) играе мачовете си.
						</p>
						<p>
							<strong>История</strong>
						</p>
						<p>
							ФК Барселона трябвало да разрушат стария си стадион Camp de Les Corts, който събирал 60,000 привърженици. Ноу Камп е построен между 1954 и 1957, проектиран от архитектите Франсеск Митянс-Миро, Лоренцо Гарсиа Барбон и Хосеп Сотерас Маури. ФК Барселона печели първия си двубой на Ноу Камп по доста впечетляващ начин, победа 4-2 срещу Легия (Варшава), като първия гол на новия стадион отбелязва Еулогио Мартинес. Над 99,000 фенове са присъствали на това събитие.
						</p>
						<p>
							Капацитетът на стадиона е променлив, при отварянето си е бил с 93 053 места, но нараства до 105,000 за Световно първенство по футбол през 1982. След това капацитетът намалява през 1990-те години на миналия век до малко под 99,000.
						</p>
						<p>
							В съоръжението се включват магазин за сувенири, мини терени за тренировките, както и параклис за играчите. В стадиона също е и най-посещавания музей в Каталуня – El Museu del Barça, който има 1,200,000 посещения всяка година. Музеят е открит през 1984 под президенството на Хосеп Луис Нунез. El Museu del Barça показва 1420 антики, свързвани с историята на ФК Барселона, 420 от които са трофеи.
						</p>
						<p>
							<strong>Трибуните на стадиона</strong>
						</p>
						<p>
							Ноу Камп е домакин и на много други големи събития извън сферата на футбола. Стадионът е бил сцена на известни музикални концерти, включващи:
							<ul>
								<li>Пинк Флойд</li>
								<li>Майкъл Джексън</li>
								<li>U2</li>
								<li>Франк Синатра</li>
								<li>Хулио Иглесиас</li>
								<li>Стинг</li>
								<li>Тримата тенори: Хосе Карерас, Пласидо Доминго и Лучано Павароти</li>
								<li>Монсерат Кабайе</li>
							</ul>
						</p>
						<p>
							Български изпълнителни също са се подвизавали на митичния стадион. През 2004, като част от кампанията по освобождаването на българските медици в Либия, пред препълнения Ноу Камп Слави Трифонов изпя песента „Йовано, Йованке“.
						</p>
						<p>
							<img id="img-thumbnail" src="./img/campnou1.jpg" alt="Camp Nou" class="img-responsive img-thumbnail" width="420" height="100">
							<p>
								<strong>Бъдеще</strong>
							</p>
							<p>
								По случай 50-ият юбилей на стадиона клубът започва международен търг за набиране на архитекти, които да разработят проект за ремоделирането на стадиона. Целта на проекта е стадионът да е в една интегрирана и силно видима градска среда. Макар и не с цел за значително увеличаване на капацитета, по план трябва минимум 50% от местата да са под козирка.
							</p>
							<p>
								На 18 септември 2007 година английският архитект Норман Фостър и неговите работници са подбрани да реструктурират Ноу Камп. Плановете предвиждат капацитетът да се увеличи с 10 000 места, а очакваната стойност на проекта е 250 млн. евро.
							</p>
						</p>
					</div>
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
							Don't have an account! <a href="signup.html" onClick=""> Sign Up Here </a>
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
							<form role="form" action="register.php" method="POST">
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
											</div>-->
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
														<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Confirm Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
														<input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group col-sm-12">
												<input type="submit" id="buttonreg" name="buttonregg" class="btn btn-lg btn-primary col-sm-5 col-sm-offset-1" value="Register">
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
