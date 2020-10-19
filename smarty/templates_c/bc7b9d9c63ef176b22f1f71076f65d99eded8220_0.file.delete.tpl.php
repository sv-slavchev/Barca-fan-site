<?php
/* Smarty version 3.1.29, created on 2016-05-28 15:47:19
  from "C:\xampp\htdocs\Diplomna\smarty\templates\delete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5749a167d33f98_06849639',
  'file_dependency' => 
  array (
    'bc7b9d9c63ef176b22f1f71076f65d99eded8220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\smarty\\templates\\delete.tpl',
      1 => 1464443210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5749a167d33f98_06849639 ($_smarty_tpl) {
?>
<center>
<fieldset>
<legend>Delete patient</legend>

<form action="Del.php" method="post">

<label for="delete">EGN</label>
<input type="text" id="delete" name="egn_del" placeholder="egn for delete" >
<input type="submit" name="submit" value="Delete">

</form>

</fieldset>
</center>
<?php }
}
