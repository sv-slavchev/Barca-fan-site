<!DOCTYPE html>
<html>
<head>
    <title>Docotor main html</title>
    <link href="css.css" rel="stylesheet" type="text/css">
   
</head>
<body>
    <header>
        <h1>Кабинетът на Вашия личен лекар!</h1>
    </header>
    
    <nav>
        <ul>
       		 	
            <li><a class="active" href="index.php?cmd=AddPatient">Добавяне</a></li>
            <li><a href="index.php?cmd=Examination">Преглед</a></li>
            <li><a href="index.php?cmd=Edit">Редактиране</a></li>
            <li><a href="index.php?cmd=Delete">Изтрий</a></li>
            <ul id="navul">
	            <li><a href="index.php?cmd=Logout">Logout</a></li>
	        </ul>
	        
			<div class="srch">
	            <label>Search box</label>
	            <input type="text" name="search" value="$search">
	            <input type="button" id="search_button" name="submit" value="Search">
        	</div>
        </ul>

  		    </nav>
    
    <main>
    {$con} 
    <div>{$content}</div>
    </main>
    
 	<aside>
		<h2>Полезни връзки:</h2>
    	<ol>
    		<li><a href="http://www.nhif.bg/web/guest;jsessionid=FRjKXzhfC5pj9KvlK8yqhvqwPXhvdMh9LDz728JSrNgDrw5yP02Q!-1285816520!1462968831625">НЗОК</a></li>
    		<li><a href="http://www.mh.government.bg/bg/">Министерство на Здравеопазването</a></li>
    		<li><a href="https://www.facebook.com/%D0%9C%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D0%B5%D1%80%D1%81%D1%82%D0%B2%D0%BE-%D0%BD%D0%B0-%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B5%D0%BE%D0%BF%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B5%D1%82%D0%BE-1622143941376548/">Facebook page</a></li>
    	</ol>
	</aside>
    <footer>
        <p>Телефон: 088731232</p>
        <p>email: yourdoctor@gmail.com</p>
    </footer>
</body>
</html>