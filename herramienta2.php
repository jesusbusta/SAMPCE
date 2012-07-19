<?php
// declaracion de variables


$codigo_herramienta=$_POST['codigo_herramienta'];
$nombre=$_POST['nombre'];
$dimensiones=$_POST['dimensiones'];
$titulo=$codigo_herramienta.$nombre;
$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()


//tomo el valor de un elemento de tipo texto del formulario "$num_reg"
 $nombre_archivo2 = $codigo_herramienta.$nombre.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<center>La extensión no es correcta. <br><center>Se permiten archivos .jpg unicamente<br></br><br></br>";
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


$nombre=strtoupper($nombre);

// funcion para insertar los ddatos en la tabla informe_personal
             $Insertar= "INSERT INTO elementos_equipo VALUES('$codigo_herramienta','$nombre','$dimensiones','$ruta','$titulo')";
             $resultadoins=basedatos($Insertar);
             echo "<BR><p><strong><center>La Información fue registrada satisfactoriamente</center></strong></p><BR></tr>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}
?>

