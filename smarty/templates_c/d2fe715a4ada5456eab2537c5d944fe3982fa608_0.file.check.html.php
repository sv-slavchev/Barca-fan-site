<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:45:59
  from "C:\xampp\htdocs\Diplomna\check.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576588d719f234_68472759',
  'file_dependency' => 
  array (
    'd2fe715a4ada5456eab2537c5d944fe3982fa608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\check.html',
      1 => 1466271750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576588d719f234_68472759 ($_smarty_tpl) {
?>

<head>
<link href="beginpage.css" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

</head>
<br/><br/>
<center>
<hr>
<fieldset id="chechform">
<br> <br>
<legend>Виж статуса си </legend>

<form action="Check.php" method="get" >

<label for="check"><strong>ЕГН:</strong></label>
<input type="text" id="check" name="egn_check" autofocus="true" required="true" placeholder="егн за проверка" >

<input type="submit" name="check" value="Провери" id="buttoncheck">

</form>

<br><br>
</fieldset>
<hr>
</center>
<?php }
}
