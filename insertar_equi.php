<?php
// declaracion de variables


$codigo_equipo=$_POST['codigo_equipo'];
$nombre_equipo=$_POST['nombre_equipo'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$descripcion=$_POST['descripcion'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$cantidad=$_POST['cantidad'];
$estado=$_POST['estado'];
$titulo=$nombre_equipo;
$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()


//tomo el valor de un elemento de tipo texto del formulario "$num_reg"
 $nombre_archivo2 = $nombre_equipo.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las caracter�sticas del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<center>La extensi�n no es correcta. <br><center>Se permiten archivos .jpg unicamente<br></br><br></br>";
}
else
{
// funcion para almacenar el archivo en el servidor
   if (move_uploaded_file($_FILES['archivo']['tmp_name'], "rutas/$nombre_archivo2"))
   {
      echo "<tr><td><BR><p><strong><center>Datos Correctos</center></strong></p><BR></td></tr></table>";
      if($nro_fil == 0)
           {
             $ruta = "rutas/$nombre_archivo2";
			 
			 
			 //COLOCA CONTENIDO EN MAYUSCULA


$nombre_equipo=strtoupper($nombre_equipo);
$modelo=strtoupper($modelo);
$marca=strtoupper($marca);
$descripcion=strtoupper($descripcion);
$fecha_ingreso=strtoupper($fecha_ingreso);
$cantidad=strtoupper($cantidad);
$estado=strtoupper($estado);


// funcion para insertar los ddatos en la tabla informe_personal
             $Insertar= "INSERT INTO equipo VALUES('$codigo_equipo','$nombre_equipo','$modelo','$marca','$descripcion','$fecha_ingreso','$cantidad','$estado','$ruta','$titulo')";
             $resultadoins=basedatos($Insertar);
             echo "<BR><p><strong><center>La Informaci�n fue registrada satisfactoriamente</center></strong></p><BR></tr>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurri� alg�n error al subir el fichero. No pudo guardarse.";
    }
}
?>
