<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:41:38
  from "C:\xampp\htdocs\Diplomna\medical_examination.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576587d24ff581_59642508',
  'file_dependency' => 
  array (
    'c06f44421e5c07d7019a33d6c6dc9e902f7fe943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\medical_examination.html',
      1 => 1466271696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576587d24ff581_59642508 ($_smarty_tpl) {
?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="beginpage.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
  type="text/javascript" src="validateExamForm.js" ><?php echo '</script'; ?>
>
</head>
<br/>
<center>
</br>
<fieldset id="examinationcss">
<legend>Диагноза</legend>

<form action="examination_submit.php"  method="post" >
<input type="hidden" name="cmd" value="<?php echo $_smarty_tpl->tpl_vars['cmd']->value;?>
">
<hr>
<div><strong>Медицински пеглед</strong></div></br>
		<table>
		<tr>
		<td><label for="egn">ЕГН</label></td>			
		<td><input id="egn" type="text" name="egn" autofocus="true"></td></tr>
	
		<tr>
		<td><label for="diagnosis">Диагноза:</label></td>
		<td><textarea name="diagnosis" id="diagnosis" cols="20" rows="5"></textarea></td>
		</tr>
			<tr>
		<td><label for="treatment">Лечение:</label></td>
		<td><textarea name="treatment" id="treatment" cols="20" rows="5"></textarea></td>
					</tr>
			<tr>
		<td><label for="status">Статус:</label></td>
		<td><input type="text" name="status" id="status"></td>
		</tr>
		<tr>	
		<td><label for="date">Дата:</label>	</td>
		<td><input type="date" name="today"></td>
	
		</tr>
		<tr>
		<td><label for="date">Следващ преглед:</label>	</td>
		<td><input type="date" name="nextvisit"></td>
		</tr>	
		<tr>		
		<td><input type="submit" name="submit"  id="ex_save"  onclick="validate()" value="Запази"> </td> 
		
		<td><input type="reset" value="Изчисти" id="ex_reset"></td>
		</tr>
	</table>
	
	<hr>
	</form>
	</fieldset>
	</center>	
<?php }
}
