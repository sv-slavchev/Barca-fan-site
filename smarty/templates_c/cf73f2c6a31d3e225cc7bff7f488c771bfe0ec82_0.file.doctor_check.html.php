<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:42:59
  from "C:\xampp\htdocs\Diplomna\doctor_check.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57658823edc551_51948105',
  'file_dependency' => 
  array (
    'cf73f2c6a31d3e225cc7bff7f488c771bfe0ec82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\doctor_check.html',
      1 => 1466271776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57658823edc551_51948105 ($_smarty_tpl) {
?>
<head>
<link href="beinpage.css" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<br/><br/>
<center>
<hr>
<fieldset id="editform">
<br> <br>
<legend>Виж статус</legend>

<form action="index.php?cmd=Doctor_Check_All" method="post">

<label for="edit"><strong>ЕГН</strong></label>
<input type="text" id="edit" name="egn_check" autofocus="true" placeholder="егн за проверка" >

<input type="submit" name="check" id="editbutton" value="Провери">

</form>

<br><br>
</fieldset>
<hr>
</center>
<?php }
}
