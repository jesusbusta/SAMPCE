<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_co2 = "localhost";
$database_co2 = "daniel";
$username_co2 = "root";
$password_co2 = "";
$co2 = mysql_pconnect($hostname_co2, $username_co2, $password_co2) or trigger_error(mysql_error(),E_USER_ERROR); 
?>