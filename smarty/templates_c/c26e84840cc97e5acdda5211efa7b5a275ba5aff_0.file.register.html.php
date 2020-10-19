<?php
/* Smarty version 3.1.29, created on 2016-06-19 18:18:42
  from "C:\xampp\htdocs\Diplomna\register.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766c5e2e4d1c1_70374138',
  'file_dependency' => 
  array (
    'c26e84840cc97e5acdda5211efa7b5a275ba5aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\register.html',
      1 => 1466353121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5766c5e2e4d1c1_70374138 ($_smarty_tpl) {
?>


<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <link href="css.css" rel="stylesheet" type="text/css">
  <?php echo '<script'; ?>
 type="text/javascript" src="./javascript/validate_form.js">
	/*
	function validate(){
	
	var username = document.forms["register"]["user"].value;
	var pass1 = document.forms["register"]["pass1"].value;
	var pass2 = document.forms["register"]["pass2"].value;
	var id = parseInt(document.forms["register"]["admin_id"].value);
	var spam = parseInt(document.forms["register"]["antispam"].value);
	var antispam = 6;
	if(username == ""){
	alert ('Попълнете полето: username, моля!');
	document.getElementById("user").style.borderColor = "red";
	return false;
	}
	if (pass1 == "")
	{
	alert ('Попълнете полето: password , моля!');
	document.getElementById("pass1").style.borderColor = "red";
	return false;
	}
	if(pass2 == ""){
	alert ('Попълнете полето: confirm password, моля!');
	document.getElementById("pass2").style.borderColor = "red";
	return false;
	}
	if (id == "")
	{
	alert ('Попълнете полето: id, моля!');
	document.getElementById("id").style.borderColor = "red";
	return false;
	}
	if (spam == "")
	{
	alert ('Попълнете полето: id, моля!');
	document.getElementById("antispam").style.borderColor = "red";
	return false;
	}
	
	if (pass1 != pass2){
	alert('Паролите не съвпадат!');
	document.getElementById("pass1").style.borderColor = "red";
	document.getElementById("pass2").style.borderColor = "red";
	return false;
	}
	if(spam != antispam){
	alert ('Грешно събиране!');
	document.getElementById("antispam").style.borderColor = "red";
	document.getElementById("antispam").value = "";
	}
	

	}
*/

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="validate_form.js" ><?php echo '</script'; ?>
>


<!--<?php echo '<script'; ?>
 type="text/javascript" src="Marq_Msg.js">scroll_messages()<?php echo '</script'; ?>
> -->
</head>

<header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>
<div>
<center>
<table>

<form action="index.php?cmd=Register" name="register"  method="post">
Регистрация
<tr>
<td><label for="user">username*</label></td>
<td><input type="text" name="user"  id="user" autofocus="true"> </td>
</tr>

<tr>
<td><label for="pass1">password*</label></td>
<td><input type="password" name="pass1"  id="pass1" required="true"></td>
</tr>

<tr>
<td><label for="pass2">confirm passsword*</label></td>
<td><input type="password" name="pass2"  id="pass2" required="true"></td>
</tr>
<tr>
<td><label for="admin_id">id*</label></td>
<td><input type="password" name="id"  id="admin_id" required="true"></td>
</tr>
<tr>
<td><label for="antispam"> 4 + 2 = ? </label> </td>
<td><input type="text" name="spam" id="antispam" placeholder="???" required="true"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Регистрирай" onclick="return validate()"></td>
<td><input type="reset" value="Изчисти"></td>
</tr>
</form>

</table>
</center>
</div>
</html><?php }
}
