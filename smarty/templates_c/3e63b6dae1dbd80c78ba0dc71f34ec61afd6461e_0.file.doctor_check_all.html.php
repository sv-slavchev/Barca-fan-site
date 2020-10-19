<?php
/* Smarty version 3.1.29, created on 2016-06-09 12:16:53
  from "C:\xampp\htdocs\Diplomna\doctor_check_all.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57594215ad59c3_05245608',
  'file_dependency' => 
  array (
    '3e63b6dae1dbd80c78ba0dc71f34ec61afd6461e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\doctor_check_all.html',
      1 => 1465467390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57594215ad59c3_05245608 ($_smarty_tpl) {
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
<td><strong>Диагноза:</strong></td>
<td><?php echo $_smarty_tpl->tpl_vars['diagnosis']->value;?>
</td>
</tr>
<tr>
<td><strong>Приложено лечение:</strong></td>
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
<?php echo $_smarty_tpl->tpl_vars['check_all']->value;?>

</table>
<hr> <hr>
</center><?php }
}
