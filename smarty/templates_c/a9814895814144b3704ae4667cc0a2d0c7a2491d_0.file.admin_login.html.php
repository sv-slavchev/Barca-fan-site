<?php
/* Smarty version 3.1.29, created on 2016-06-17 18:27:26
  from "C:\xampp\htdocs\Diplomna\admin_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576424eeb809c8_07790802',
  'file_dependency' => 
  array (
    'a9814895814144b3704ae4667cc0a2d0c7a2491d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\admin_login.html',
      1 => 1466178258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576424eeb809c8_07790802 ($_smarty_tpl) {
?>

<head>
    <title>Docotor main html</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link href="login_css.css" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

   
</head>

    <header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>
    
    
    
    
    <center>

<form id="login" action="index.php?cmd=admin_login" method="post"> 
<table>
Вход за лекари</br ></br>
<tr>username*: <input type="text" name="username" autofocus="true"
required="true" ></br></br></tr>
<tr>password*: <input type="password" name="password" required="true"></br></br></tr>
<tr><input id="button" type="submit" name="submit" value="Влез"></tr>
</form>
<form action="reg.php" method="get">
<input type="submit" name="register" id="button" value="Регистрация">
</form>
</table>

</center>
    
    
 
<?php }
}
