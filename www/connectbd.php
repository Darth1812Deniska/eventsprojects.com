<?php
$host = 'localhost';   // имясервера MySQL
$user = 'root';   // имя пользователя, под которым вы можете работать с базой данных
$pass = '';
$bd = 'is_projects';    // пароль для доступа к БД

 if(!mysql_connect($host, $user, $pass)) 
   {
        exit(mysql_error()); 
   }
   else
   {
        echo "";   
   } 
   
  if(!mysql_select_db($bd))
  {
	  exit(mysql_error());
	}
	else
	{
		echo ""; 
		}
  ;     
?>