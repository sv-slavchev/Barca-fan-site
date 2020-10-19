<?php
/* Smarty version 3.1.29, created on 2016-06-10 16:10:42
  from "C:\xampp\htdocs\Diplomna\Check_Status.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575aca62b97455_12211539',
  'file_dependency' => 
  array (
    '5e6a56c9e0660bf1bc52a8ecc1a63bbb0f119631' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\Check_Status.html',
      1 => 1465567789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575aca62b97455_12211539 ($_smarty_tpl) {
?>
<center>
</br></br>
<hr><hr>
<table border="1">
<tr>
<td>ЕГН:</td>
<td><?php echo $_smarty_tpl->tpl_vars['egn']->value;?>
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
<td><strong>Следващо посещение:</td></strong>
<td><strong><?php echo $_smarty_tpl->tpl_vars['nextvisit']->value;?>
</td></strong>
</tr>
</table>
<hr> <hr>
</center><?php }
}
