<?php
/* Smarty version 3.1.29, created on 2016-05-29 16:39:02
  from "C:\xampp\htdocs\Diplomna\smarty\templates\Check_status.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574aff06a81ba6_16722829',
  'file_dependency' => 
  array (
    '9ec0bee5bf840c75dafc0d4ef72181096671d01a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\smarty\\templates\\Check_status.tpl',
      1 => 1464532716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574aff06a81ba6_16722829 ($_smarty_tpl) {
?>
<center>
<hr><hr>
<table border="1">
<tr>
<td>Име:</td>
<td><?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</td>
</tr>
<tr>
<td>Вашата диагноза:</td>
<td><?php echo $_smarty_tpl->tpl_vars['diagnosis']->value;?>
</td>
</tr>
<tr>
<td>Приложено лечение:</td>
<td><?php echo $_smarty_tpl->tpl_vars['treatment']->value;?>
</td>
</tr>
<tr>
<td>Вашият Статус до момента е:</td>
<td><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</td>
</tr>
<tr>
<td>Следващо посещение:</td>
<td><?php echo $_smarty_tpl->tpl_vars['nextvisit']->value;?>
</td>
</tr>
</table>
<hr><hr>
</center><?php }
}
