<?php   

session_start();
// remove all variables in SESSION array
unset($_SESSION['username']);
unset($_SESSION['idhash']);

header("Location:home.html");
exit;



?>