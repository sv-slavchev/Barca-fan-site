<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:44:22
  from "C:\xampp\htdocs\Diplomna\search.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57658876648674_47758308',
  'file_dependency' => 
  array (
    '5d61aa687953b0bfc037e61bb97a38d07f27ea40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\search.html',
      1 => 1466271858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57658876648674_47758308 ($_smarty_tpl) {
?>
<br/><br/><br/>
<center>
<fieldset>
<legend>Резултати от търсенето</legend>
<table>
<tr>
<td>ЕГН:</td>
<td><input type="text" name ="egn" value="<?php echo $_smarty_tpl->tpl_vars['egn']->value;?>
"></td>
</tr> 
<tr>
<td>Име:</td>
<td><input type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
"></td>
</tr>
<tr>
<td>Фамилия:</td>
<td><input type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
"></td>
</tr>
</table>
</fieldset><?php }
}
