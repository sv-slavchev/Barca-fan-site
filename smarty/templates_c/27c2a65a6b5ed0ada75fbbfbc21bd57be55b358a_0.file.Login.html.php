<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:17:15
  from "C:\xampp\htdocs\Diplomna\Login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5765821b825a10_36077238',
  'file_dependency' => 
  array (
    '27c2a65a6b5ed0ada75fbbfbc21bd57be55b358a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\Login.html',
      1 => 1466178339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5765821b825a10_36077238 ($_smarty_tpl) {
?>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <link href="css.css" rel="stylesheet" type="text/css">
  <link href="login_css.css" rel="stylesheet" type="text/css">
</head>

  <header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>


<center>
<div>
	
<form id ="login" action="index.php?cmd=login" method="post">
			
	
		<strong>Вход за пациенти</strong></br>
		</br>

		<label for="Egn">ЕГН*:</label>
		<input id="Egn" 
			type="text" name="login_egn"  autofocus="true">
			</br></br>
		<input id="button" type="submit" name="login" value="Влез" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<input id="button" type="submit" name="admin" value="Вход за лекари"></br>
		
</form>
	</div>


</center>
</html><?php }
}
