<?php
/* Smarty version 3.1.29, created on 2016-06-18 22:12:17
  from "C:\xampp\htdocs\Diplomna\smarty\templates\addPatient.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5765ab21268c94_76844062',
  'file_dependency' => 
  array (
    'f5b2cf53c1fdc759a1d9f7a51d1ad248975b414d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\smarty\\templates\\addPatient.tpl',
      1 => 1466280735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5765ab21268c94_76844062 ($_smarty_tpl) {
?>

<head>
<link href="beginpage.css" rel="stylesheet" type="text/css">
</head>
<br/><br/>
<center>
<hr>
<p><strong>Добавяне на пациент</strong></p>

<fieldset>
<legend>Лични Данни</legend>
	<form action="index.php?cmd=Add_Patient" method="post">		
			<table>
				<tr>
					<td>ЕГН:</td>
					<td><input type="text" name="egn"
					required="true"
					placeholder="8812036566"></td>
				</tr>
			
				<tr>
					<td>Собствено Име:</td>
					<td><input type="text" name="firstname" ></td>
				</tr>
				
				<tr>
					<td>Фамилно Име:</td>
					<td><input type="text" name="lastname"></td>
				</tr>
				
				<tr>
				<td>Пол:</td>
					<td><input type="radio" name="gender" value="m" checked="true">м</td>
					<td><input type="radio" name="gender" value="f">ж</td>
					
				</tr>
				
				<tr>
					<td>Адрес:</td>
					<td><textarea name="address"  cols="20" rows="5"> </textarea></td>
				</tr>

				<tr>
					<td>Имейл:</td>
					<td><input type="text" name="email"
					required="true"
					placeholder="sample@email.com"></td>
				</tr>
				
				<tr>				

					<td>
						Телефон:</td>
					<td>
						<input name="phone"
						type="text" 
						required="true"
						placeholder="+359-888-88-88-88" ">
					</td>
			</tr>
			<tr>
					<td>
						<input type="submit" name="submit" value="Запази">						
					</td>
					<td>
						<input type="reset" value="Изчисти">
					</td>
			</tr>
			</table>
		</form>

	</fieldset>
	<hr>
</center>

<?php }
}
