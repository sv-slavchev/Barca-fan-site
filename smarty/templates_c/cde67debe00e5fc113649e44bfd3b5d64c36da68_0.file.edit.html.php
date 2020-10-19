<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:40:08
  from "C:\xampp\htdocs\Diplomna\edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576587782d2243_59324784',
  'file_dependency' => 
  array (
    'cde67debe00e5fc113649e44bfd3b5d64c36da68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\edit.html',
      1 => 1466271606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576587782d2243_59324784 ($_smarty_tpl) {
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
<legend>Редактиране на пациент</legend>

<form action="Edit_Patient.php" method="post">

<label for="edit"><strong>ЕГН</strong></label>
<input type="text" id="edit" name="egn_edit" autofocus="true" placeholder="егн" >

<input type="submit" name="edit" id="editbutton" value="Редактирай">

</form>

<br><br>
</fieldset>
<hr>
</center>
<?php }
}
