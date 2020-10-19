<?php
/* Smarty version 3.1.29, created on 2016-06-18 19:21:57
  from "C:\xampp\htdocs\Diplomna\search_results.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5765833589e113_50695363',
  'file_dependency' => 
  array (
    '2cae4de208289449fc85414b5fc8457368451dc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\search_results.html',
      1 => 1465826968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5765833589e113_50695363 ($_smarty_tpl) {
?>

<center>
<form action="Edit_Patient.php" method="post">

<table>
<hr><hr>
<tr>
<td>ЕГН:</td>
<td><input type="text" name ="e_egn" value="<?php echo $_smarty_tpl->tpl_vars['egn']->value;?>
"></td>
</tr> 
<tr>
<td>име:</td>
<td><input type="text" name="e_firstname" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
"></td>
</tr>
<tr>
<td>Фамилия:</td>
<td><input type="text" name="e_lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
"></td>
</tr>
<tr>
<td>Адрес:</td>
<td><input type="text" name="e_address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"></td>
</tr>
<tr>
<td>Имейл:</td>
<td><input type="text" name="e_email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></td>
</tr>
<tr>
<td>Телефон:</td>
<td><input type="text" name="e_phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"></br> </br></td>
</tr>
<tr>
<td>Вашата диагноза:</td>
<td><input type="text" name="e_diagnosis" value="<?php echo $_smarty_tpl->tpl_vars['diagnosis']->value;?>
"></td>
</tr>
<tr>
<td>Приложено лечение:</td>
<td><input type="text" name="e_treatment" value="<?php echo $_smarty_tpl->tpl_vars['treatment']->value;?>
"></td>
</tr>
<tr>
<td>Вашият Статус до момента е:</td>
<td><input type="text" name="e_status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"></td>
</tr>
<tr>
<td>Следващо посещение:</td>
<td><input type="text" name="e_nextvisit" value="<?php echo $_smarty_tpl->tpl_vars['nextvisit']->value;?>
" placeholder="година-месец-ден"></td>
</tr>
<tr><td>Календар:</td><td><input type="date" name="date"></td></tr>
</table></br><br>	
<input type="submit" name="save" value="Запази">
<input type="reset"  value="Изчисти">
</form>
<hr><hr>
</center><?php }
}
