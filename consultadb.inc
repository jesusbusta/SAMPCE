<?php 
function conectarbase(){

$enlace = mysql_connect("localhost","root","") or die ("no pudo conectarse: " .mysql_error());
mysql_select_db("johanmolina") or die ("no pudo encontrar la base de datos");

return $enlace;
}
function basedatos($consulta){
$resultado = mysql_query ($consulta) or die ("la consulta ha fallado".mysql_error() );
}

?>