<?php
/* Smarty version 3.1.29, created on 2016-06-10 16:05:45
  from "C:\xampp\htdocs\Diplomna\check_main.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ac939746002_99554697',
  'file_dependency' => 
  array (
    '0e793cb8fdd8f83f67be04d258c7b0edb36e20f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\check_main.html',
      1 => 1465567090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575ac939746002_99554697 ($_smarty_tpl) {
?>
</br></br>
<center>
<table border="1" width="900" height="200" cellpadding="1" cellspacing="2" bordercolor="009966">
<tr>
<td><strong>ЕГН</strong></td>
<td><strong>Име</strong></td>
<td><strong>Фамилия</strong></td>
<td><strong>Диагноза</strong></td>
<td><strong>Приложено лечение</strong></td>
<td><strong>Статус</strong></td>
<td><strong>Дата на прегледа</strong></td>
<td><strong>Следващ преглед</strong></td>
</tr>
<hr>
<?php echo $_smarty_tpl->tpl_vars['check_all']->value;?>

</table>
</center>

<?php }
}
