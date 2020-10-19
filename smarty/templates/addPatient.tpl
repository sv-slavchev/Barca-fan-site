
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

