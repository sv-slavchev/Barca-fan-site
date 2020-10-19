<?php
/* Smarty version 3.1.29, created on 2016-06-19 15:23:19
  from "C:\xampp\htdocs\Diplomna\main_patient.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57669cc783fe84_01910970',
  'file_dependency' => 
  array (
    '71372c3ed615b9fb60bd6376aca69557f019ba63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Diplomna\\main_patient.html',
      1 => 1466342596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57669cc783fe84_01910970 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Docotor main html</title>
    <link href="css.css" rel="stylesheet" type="text/css">
   
</head>
<body>
    <header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>
    
    <nav>
        <ul>
       		 	
            <li><a class="active" href="index.php?cmd=BeginPage">Начало</a></li>
            <li><a href="index.php?cmd=Check_Status">Виж статуса си</a></li>
            <li><a href="index.php?cmd=Contacts">Контакти</a></li>
            
            <ul id="navul">
	            <li><a href="index.php?cmd=Logout">Изход</a></li>
  		    </nav>
    
    <main>
    </br></br>
  &nbsp &nbsp<?php echo $_smarty_tpl->tpl_vars['con']->value;?>

  
    </main>
    
 	<aside>
		<h2>Полезни връзки:</h2>
    	<ol>
    		<li><a href="http://www.nhif.bg/web/guest;jsessionid=FRjKXzhfC5pj9KvlK8yqhvqwPXhvdMh9LDz728JSrNgDrw5yP02Q!-1285816520!1462968831625" target="_blank">НЗОК</a></li>
    		<li><a href="http://www.mh.government.bg/bg/" target="_blank">Министерство на Здравеопазването</a></li>
    		<li><a href="https://www.facebook.com/%D0%9C%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D0%B5%D1%80%D1%81%D1%82%D0%B2%D0%BE-%D0%BD%D0%B0-%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B5%D0%BE%D0%BF%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B5%D1%82%D0%BE-1622143941376548/" target="_blank">Facebook page</a></li>
    	</ol>
	</aside>
    <footer>
        <p>Телефон: 088731232</p>
          <p>Имейл: yourdoctor@gmail.com</p>
    </footer>
</body>
</html><?php }
}
