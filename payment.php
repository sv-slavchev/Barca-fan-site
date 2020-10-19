<?php
session_start();
require_once("db_connection.php");
require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

mysqli_query($conn,"SET NAMES 'utf8'");
if(isset($_POST['send'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$total =  $_SESSION['total'];
$sql = "INSERT INTO orders ( name, email, phone, address, total)
VALUES ('$name', '$email', '$phone', '$address', '$total' )";
// = '" . ($_SESSION['id']) ."'"; 

if ($result = mysqli_query($conn, $sql)) {

    echo '<script>alert("Вашата поръчката е направена успешно.")</script>';
	echo '<script>window.location="cart.php"</script>';

	}
 else {
    echo '<script>alert("Нещо се обърка. Моля, опитайте отново!")</script>';
	echo '<script>window.location="cart.php"</script>';
  
	  }


}
//}
//}
mysqli_close($conn);
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

	<!-- Website CSS style -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	
	<style>





		/* standings */
		.table{
		  transition: all 0.2s ease-in-out;
		  margin-top: 10px;
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

		/* Carousel News */
		#carousel-indicators-news {
		    bottom:-40px;
			left:0;
			width:100%;
			background: darkgrey;
			padding: 6px 0px;
			margin-left:0;
			border-top:2px solid #fff;
		}
		#carousel-indicators-news li {
			background:#fff;
			border-color:#fff;
		 
		}
		#carousel-indicators-news .active {
			width:14px;
			height:14px;
			background:#428bca;
			border-color:#428bca;
		}
		.carousel-inner .thumbnail {
			margin-bottom:0;
			border-bottom-left-radius:0;
			border-bottom-right-radius:0;
		}
		.carousel-inner .caption {
			background:#ddd;
			padding: 10px;
		}
		#news-carousel-content {
			height: 130px;
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
								<li><a href="index.php?cmd=Logout"><span class="glyphicon glyphicon-log-out"></span> Изход</a></li>
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
			<!-- Content and sidebar -->
			<div class="row">
				<div id="content" class="col-sm-8">
					<div id="title">
						<h2>Направи поръчка</h2>
					</div>
					<hr>

					
					<div class="main-login main-center">

						<form method="post" action="#">

							<div class="form-group">
								<label for="name" class="control-label">Вашето име</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name"   id="name"  placeholder="Въведете вашето име" />
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="control-label">Имейл</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" value="" id="email"  placeholder="Въведете вашият имейл"/>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="control-label">Тел. номер</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="phonenum" id="phonenum"  placeholder="Въведете вашият телефонен номер"/>
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="control-label">Адрес за доставка</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address"  id="address"  placeholder="Въведете вашият адрес за доставка"/>
								</div>
							</div>
							
							<div class="form-group">
								<h4 class="pull-left total-price"><strong>Обща сума: <?php echo $_SESSION['total'] + 5; ?>лв.</strong></h4>
								<input type="submit" class="pull-right btn btn-success" name="send" value="Поръчай">
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
						  	<td colspan="6"><a href="standings.html">View full table <span class="glyphicon glyphicon-chevron-right"></span></a></td>
						  </tr>
						</tbody>
					</table>

					<!-- News Carousel
		            ================================================== -->
					<div id="myCarouselNews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="#"><img class="thumbnail first-slide" src="./img/news/valverde1.jpg" alt="First slide"></a>
								<p><time>29 май 2017</time></p>
								<div id="news-carousel-content">
									<h4>Официално: Барселона има нов старши треньор</h4>
                            		<p>Ръководството на Барселона взе решение кой да наследи Луис Енрике на треньорския пост на "Камп Ноу". Само часове след като отпадна възможността досегашният помощник на Лучо Хуан Карлос Унсуе да поеме кормилото на каталунците и той отпътува в посока Селта, шефовете на "лос кулес" окончателно се спряха на Ернесто Валверде, чийто договор ще бъде за срок от 2+1 години. Бившият наставник на Атлетик Билбао ще вземе в щаба си и двамата си най-доверени хора, с които работи и при баските – Йоан Аспиасу, който ще му бъде първи асистент, както и Хосе Антонио Посанко, чиято отговорност ще бъде физическата подготовка. Триото работи неизменно заедно от сезон 2008/2009 насам, когато изведе Олимпиакос до титлата в Гърция. 53-годишният Валверде бе основен фаворит за следващ треньор на Барселона, макар през сезона да бяха спрягани и имената на Еусебио Сакристан и Роналд Куман. Той има два сезона в Барса от годините си на професионален футболист и между 1988 и 1990 година печели Купата на краля и КНК. Като треньор пък е водил градския съперник Еспаньол, както и Виляреал, Валенсия, Олимпиакос, Атлетик Билбао и Билбао Атлетик – втория тим на "лъвовете" от Биская. Официалното представяне на Ернесто Валверде ще се състои в четвъртък.</p>
								</div>
							</div>
							<div class="item">
								<a href="#"><img class="thumbnail second-slide" src="./img/news/valverde2.jpg" alt="Second slide"></a>
								<p><time>31 май 2017</time></p>
								<div id="news-carousel-content">
									<h4>Новият треньор: Искам да направя Барселона още по-велик</h4>
									<p>Назначеният на мястото на Луис Енрике начело на Барселона Ернесто Валверде даде първото си интервю като наставник на клуба. По-рано днес 53-годишният специалист пристигна на “Камп Ноу” и говори пред клубния ТВ канал на каталунците, а официалното му представяне ще се състои утре (четвъртък). 

									“За мен е привилегия и шанс, че точно в този момент Барселона се сети за мен, предлагайки ми този пост. Посрещам този нов етап от кариерата си с голям ентусиазъм, но и като огромно предизвикателство. Ще се опитам да направя отбора още по-силен”, коментира Валверде. 

									“Иска ми се всичко да е наред и феновете да се наслаждават на играта ни, продължи наставникът. - Бих искал да виждам отбор, който се раздава на терена. Досега през годините запалянковците на Барселона се наслаждаваха на редица класни футболисти и треньори. Идеята ми е да продължа тази линия и, ако е възможно, отборът да стане още по-добър. Футболът е за това: да постигаш победи и да радваш хората, които се идентифицират с клуба и които се гордеят с него. Това искаме и дано да успеем да го постигнем.”

									Валверде ще подпише за 2+1 години.</p>
								</div>
							</div>
							<div class="item">
								<a href="#"><img class="thumbnail third-slide" src="./img/news/iniesta.jpg" alt="Third slide"></a>
								<p><time>31 май 2017</time></p>
								<div id="news-carousel-content">
									<h4>Иниеста: Валверде има качества да води Барса</h4>
									<p>Капитанът на Барселона Андрес Иниеста коментира назначението на Ернесто Валверде за старши треньор на каталунския тим. "Валверде има качества да води Барса. Ако нямаше, нямаше да бъде избран", довери 33-годишният халф по време на събитие Save the Children. "През новия сезон ще се завърнем с нови сили и надежди. Убеден съм, че той ще бъде успешен за нас, ако правим нещата по правилния начин. Тук трябва да играеш добре и да печелиш трофеи", сподели номер 8 на "лос кулес". 

									"Чувствам се силен, позитивен и мотивиран, за да продължа да играя на високо ниво в следващите няколко години. Желанието ми е да остана в Барса. Винаги съм искал това, още от момента, в който пристигнах тук на 12-годишна възраст", каза още Иниеста.</p>
								</div>
							</div>
						</div>
						<!-- Indicators -->
						<ol class="carousel-indicators" id="carousel-indicators-news">
							<li data-target="#myCarouselNews" data-slide-to="0" class="active"></li>
							<li data-target="#myCarouselNews" data-slide-to="1"></li>
							<li data-target="#myCarouselNews" data-slide-to="2"></li>
						</ol>
					</div><!-- End Carousel -->
					<br>
					<br>
					
					<!-- Next Game -->
					<div class="row">
						<div class="featured-event">
							<div class="cell cell--justified u-p12 col-sm-12">
								<h3>Следващ мач</h3>
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

	<!-- Next game Countdown JS -->
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("July 23, 2017 21:45:00").getTime();

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
		    document.getElementById("demo").innerHTML = days + "д " + hours + "ч " + minutes + "м " + seconds + "с ";
		    
		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(countdownfunction);
		        document.getElementById("demo").innerHTML = "Свършил";
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