<?php
/* Smarty version 3.1.29, created on 2016-06-19 15:49:04
  from "C:\xampp\htdocs\Diplomna\doctor_main.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766a2d0981e22_18954207',
  'file_dependency' => 
  array (
    'e1261c9b4861434b7ac70ed127e3de6789a59880' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\doctor_main.html',
      1 => 1466344141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5766a2d0981e22_18954207 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css.css" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

   
</head>
<body>
    <header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>
    
    <nav>
        <ul>
       		 	
            <li><a class="active" href="index.php?cmd=AddPatient ">Добавяне</a></li>
            <li><a href="index.php?cmd=Examination">Преглед</a></li>
            <li><a href="index.php?cmd=Edit">Редактиране</a></li>
            <li><a href="index.php?cmd=Delete">Изтрий</a></li>
              <li><a href="index.php?cmd=Doctor_Check">Виж статус</a></li>
            <ul id="navul">
	            <li><a href="index.php?cmd=admin_logout">Излез</a></li>
	        </ul>
	        
	        <form action="index.php?cmd=Search" method="post">
			<div class="srch">
	            <label>Търси</label>
	            <input type="text" name="search" placeholder="търси" autocomplete="on">
	            <input type="submit" name="submit"  value="Търси">
        	</div>
        	</form>
        </ul>

 </nav>
    
    <main>
    </br></br>
   &nbsp <?php echo $_smarty_tpl->tpl_vars['con']->value;?>
 
    <div><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </main>
    
 	<aside>
 			<h2>Полезни връзки:</h2>
    	<ol>
    		<li><a href="http://www.nhif.bg/web/guest;jsessionid=FRjKXzhfC5pj9KvlK8yqhvqwPXhvdMh9LDz728JSrNgDrw5yP02Q!-1285816520!1462968831625" target="_blank">НЗОК</a></li>
    		<li><a href="http://www.mh.government.bg/bg/" target="_blank">Министерство на Здравеопазването</a></li>
    		<li><a href="https://www.facebook.com/%D0%9C%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D0%B5%D1%80%D1%81%D1%82%D0%B2%D0%BE-%D0%BD%D0%B0-%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B5%D0%BE%D0%BF%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B5%D1%82%D0%BE-1622143941376548/"  target="_blank">Facebook page</a></li>
    	</ol>
	</aside>
	
    <footer>
        <p>Телефон: 088731232</p>
        <p>email: yourdoctor@gmail.com</p>
    </footer>
</body>
</html><?php }
}
