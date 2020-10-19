<?php
session_start();

function Home() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('home.html');
}

function News() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('news.html');
}

function FanZone() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');
	$smarty = new Smarty();
		if (empty($_SESSION['username'])) {
		echo '<script>window.location="login.php"</script>';
	}
	else {
		//$smarty->display('cart.php');
		header("Location:cart.php");
	}
}

function Standings() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('standings.html');
}

function Results() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('results.html');
}

function Fixtures() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('fixtures.html');
}

function History() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('history.html');
}

function Squad() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	// $smarty->display('squad.php');
	header("Location:squad.php");
}

function Campnou() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	$smarty->display('campnou.html');
}

function Logout() {
	require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

	$smarty = new Smarty();
	// remove all variables in SESSION array
	unset($_SESSION['username']);
	unset($_SESSION['idhash']);

	header("Location:home.html");
	exit;
}
?>