<?php
/* Smarty version 3.1.29, created on 2017-05-25 12:58:32
  from "C:\xampp\htdocs\BarcaTrainLast\add_review.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5926b8d86e4422_25147812',
  'file_dependency' => 
  array (
    'f4f1db93809368840935ff452ad61d760a550671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrainLast\\add_review.html',
      1 => 1495399650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5926b8d86e4422_25147812 ($_smarty_tpl) {
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
