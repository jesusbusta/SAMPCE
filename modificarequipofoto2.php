<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>SISTEMA </title>
<!-- plantilla  --> 
	<meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />    
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- fin plantilla  -->
   

    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<!--INICIO DE LA PLANTILLA -->
<!-- plantilla  --> 
	<meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />    
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- fin plantilla  -->
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-png"></div>
            <div class="art-header-jpeg"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-textblock"> </div>
        <div class="art-headerobject"></div>
        <script type="text/javascript" src="swfobject.js"></script>
        <div id="art-flash-area">
        <div id="art-flash-container">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="788" height="150" id="art-flash-object">
        	<param name="movie" value="container.swf" />
        	<param name="quality" value="high" />
        	<param name="scale" value="default" />
        	<param name="wmode" value="transparent" />
        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=255&amp;clipw=788&amp;cliph=223&amp;width=788&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
            <param name="swfliveconnect" value="true" />
        	<!--[if !IE]>-->
        	<object type="application/x-shockwave-flash" data="container.swf" width="788" height="150">
        	    <param name="quality" value="high" />
        	    <param name="scale" value="default" />
        	    <param name="wmode" value="transparent" />
            	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=255&amp;clipw=788&amp;cliph=223&amp;width=788&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
                <param name="swfliveconnect" value="true" />
        	<!--<![endif]-->
        		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
        	<!--[if !IE]>-->
        	</object>
        	<!--<![endif]-->
        </object>
        </div>
        </div>
        <script type="text/javascript">    swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.php">LABOBALLER  </a></h1>
                         <h2 class="art-logo-text"> BARRY WEHMILLER  Lavadora de botellas</h2>
                </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<?php include "menu.php" ?>
<p>&nbsp;</p>
<h2 class="art-postheader" align="center"></h2>
<p>&nbsp;</p>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->
<?php
$codigo_equipo=$_REQUEST['codigo_equipo'];
	//recibe variabla codigo_equipo
$titulo=$_POST['titulo'];
		//declarando la variable $titulo

$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()

//tomo el valor de un elemento de tipo texto del formulario
 $nombre_archivo2 = $titulo.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<center>La extensión o el tamano de los archivos no es correcta. <br><br>Se permiten fotos con formato .jpg unicamente<br>";
}
else 
{
	// funcion para copiar el archivo en el servidor
   if (move_uploaded_file($_FILES['archivo']['tmp_name'], "rutas/$nombre_archivo2"))
   {
      echo "<BR><p><strong><center>El archivo ha sido Modificado correctamente</center></strong></p><BR>";
      if($nro_fil == 0)
           {
             $ruta = "rutas/$nombre_archivo2"; 
			 // modifica la tabla cuando el nu de registro sea igual al num de registro recibido
             $Insertar= "UPDATE equipo SET titulo='$titulo', archivo='$ruta' WHERE $codigo_equipo=codigo_equipo";
             $resultadoins=basedatos($Insertar);
             echo "<BR><p><strong><center>Foto almacenado</center></strong></p><BR>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}
?>
<!-- FINALIZA LA PAG -->
<!-- PIE DE PAG -->
               </div>  <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
<p>Derechos reservados en Espanol</p>


                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="http://www.artisteer.com/?p=website_templates">Website Template</a> created with Artisteer.</p>
</div>

</body>
</html>