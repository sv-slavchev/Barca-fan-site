<?php
/* Smarty version 3.1.29, created on 2016-06-19 16:22:52
  from "C:\xampp\htdocs\Diplomna\delete.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766aabc39f3c2_04249276',
  'file_dependency' => 
  array (
    '3967e5f3f160c543378c5a9ad546abe2845f1d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\delete.html',
      1 => 1466346151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5766aabc39f3c2_04249276 ($_smarty_tpl) {
?>

<head>
<link href="beginpage.css" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php echo '<script'; ?>
 type="text/javascript" >  
	function del(){
	alert('Найстина ли искате да изтриете пациента?');
	return false;
	}

<?php echo '</script'; ?>
>
</head>
<br/><br/>
<center>
<hr>
<fieldset id="deleteform">
<br> <br>
<legend>Изтриване на пациент</legend>

<form action="Delete.php" method="get">
<input type="hidden" name="cmd" value="<?php echo $_smarty_tpl->tpl_vars['cmd']->value;?>
">

<label for="delete" id="dellabel"><strong>ЕГН</strong></label>
<input type="text" id="delete" name="egn_del" autofocus="true" required="true" placeholder="егн" >

<input type="submit" name="delete" id="delbutton" value="Изтрий" onclick="return del()">

</form>

<br><br>
</fieldset>
<hr>
</center>
<?php }
}
