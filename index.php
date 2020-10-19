<?php 
//require_once('config.php');
require_once('functions.php');

$cmd = $_REQUEST['cmd'];

if ($cmd === 'News') {
	News();
}
elseif ($cmd === 'Home') {
	Home();
}
elseif ($cmd === 'FanZone') {
	FanZone();
}
elseif ($cmd === 'Standings') {
	Standings();
}
elseif ($cmd === 'Results') {
	Results();
}
elseif ($cmd === 'Fixtures') {
	Fixtures();
}
elseif ($cmd === 'History') {
	History();
}
elseif ($cmd === 'Squad') {
	Squad();
}
elseif ($cmd === 'Campnou') {
	Campnou();
}
elseif ($cmd === 'Logout') {
	Logout();
}
?>