<?php
/* Smarty version 3.1.29, created on 2016-06-10 15:49:36
  from "C:\xampp\htdocs\Diplomna\check_row.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ac570917e57_72415156',
  'file_dependency' => 
  array (
    'd7cf18757ec71243985d5389e52bf7a9538a38c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\check_row.html',
      1 => 1465566571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575ac570917e57_72415156 ($_smarty_tpl) {
?>
<center>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['egn']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</td>
<td><strong><?php echo $_smarty_tpl->tpl_vars['diagnosis']->value;?>
</strong></td>
<td><strong><?php echo $_smarty_tpl->tpl_vars['treatment']->value;?>
</strong></td>
<td><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['nextvisit']->value;?>
</td>

</tr>
</center><?php }
}
