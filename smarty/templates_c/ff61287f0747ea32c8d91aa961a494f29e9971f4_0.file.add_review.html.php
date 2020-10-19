<?php
/* Smarty version 3.1.29, created on 2017-05-27 16:19:57
  from "C:\xampp\htdocs\BarcaTrain_raboteshto_ot_mus\add_review.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59298b0d46ae03_10447078',
  'file_dependency' => 
  array (
    'ff61287f0747ea32c8d91aa961a494f29e9971f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain_raboteshto_ot_mus\\add_review.html',
      1 => 1495399650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59298b0d46ae03_10447078 ($_smarty_tpl) {
?>

<form method="post" action ="add_review.php">
<fieldset>
<table>
<tr>Добави Отзив: </tr></br></br>
<tr>Вашето име:</tr> </br>
<tr><input type="text" name="yourname"></tr></br></br>
<tr>Вашият Отзив:</tr></br>
<tr><textarea name="review"  rows="5"> </textarea></tr></br></br>
<tr><td><input type="submit" name="btnAddReview" value = "Добави"></td>
<td><input type="reset" name="ResetFields" value = "Изчисти"></td></tr>
</table>
</fieldset>
<a href="cart.php" > Go to products </a>
</form>
<?php }
}
