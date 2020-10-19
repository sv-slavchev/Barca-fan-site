<?php
/* Smarty version 3.1.29, created on 2016-06-10 16:02:10
  from "C:\xampp\htdocs\Diplomna\Check_status.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ac8628cde11_91885055',
  'file_dependency' => 
  array (
    'f8e943bf8c3246778453457240a5c7e5dee0e6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\Check_status.html',
      1 => 1465566440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575ac8628cde11_91885055 ($_smarty_tpl) {
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
($patient_check)
</table>
<hr> <hr>
</center><?php }
}
