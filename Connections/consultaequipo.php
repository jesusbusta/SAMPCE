<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_consultaequipo = "localhost";
$database_consultaequipo = "johanmolina1";
$username_consultaequipo = "root";
$password_consultaequipo = "";
$consultaequipo = mysql_pconnect($hostname_consultaequipo, $username_consultaequipo, $password_consultaequipo) or trigger_error(mysql_error(),E_USER_ERROR); 
?>