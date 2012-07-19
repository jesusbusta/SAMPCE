<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Mantenimiento</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <style type="text/css">
<!--
.Estilo1 {font-size: 5px}
.Estilo2 {font-family: Arial}
.Estilo4 {font-family: Arial, Helvetica, sans-serif}
-->
    </style>
</head>
<body>
<div id="art-page-background-middle-texture">
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
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
            <div class="art-header">
                <div class="art-header-clip">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                <div class="art-headerobject"></div>
                <script type="text/javascript" src="swfobject.js"></script>
                <div id="art-flash-area">
                <div id="art-flash-container">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="794" height="200" id="art-flash-object">
                	<param name="movie" value="container.swf" />
                	<param name="quality" value="high" />
                	<param name="scale" value="default" />
                	<param name="wmode" value="transparent" />
                	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=3&amp;clipx=-2&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=800&amp;cliph=200&amp;width=794&amp;height=200&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=false" />
                    <param name="swfliveconnect" value="true" />
                	<!--[if !IE]>-->
                	<object type="application/x-shockwave-flash" data="container.swf" width="794" height="200">
                	    <param name="quality" value="high" />
                	    <param name="scale" value="default" />
                	    <param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=3&amp;clipx=-2&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=800&amp;cliph=200&amp;width=794&amp;height=200&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=false" />
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
                                 <h1 class="art-logo-name"><a>Mantenimiento<br> Preventivo y Correctivo <br> de equipos C.A</a></h1>
              </div>
            </div>
			
<?php include "menu.php" ?>		
<p>&nbsp;</p>
<h2 class="art-postheader" align="center"></h2>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->

    <div align="center">
      <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
    
   $consulta = "SELECT * from elementos_equipo where cod_elemento = '$criterio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El empleado $criterio no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   
				   while ($row = mysql_fetch_row($resultado)){
                   $cod_elemento=$row[1];
                   $nombre_elemento=$row[2];
                   $descripcion=$row[2];
                   $dimensiones=$row[3];
				   $titulo=$row[6];
                   $equipo=$row[7];
      
				   $link2=$row[5];
                   ?>
     
      <div align="center">
	  <strong>MODIFICAR EMPLEADO</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>Codigo de elemento:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr>
          <td><strong> Nombre</strong></td>
          <td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>descripcion</strong></td><td><?php echo "  $row[3]" ?></td></tr>
        <tr><td><strong>dimensiones:</strong></td><td><?php echo "$row[4]" ?></td></tr>
        <tr><td><strong>equipo:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
        <tr><td><strong>Fotografia:</strong></td><td><?php echo "<a target=_blank href='$link2'><img src='$row[5]' width='120'height='100'></a>" ?></td></tr><br /> </table>     
	  
        <?php
                   }
                   ?>
        
 <form action="modificarpartes.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >
  
        
 
        <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="114"><div align="center"><strong>Serial del Elemento </strong></div></td>
          <td width="141"><label>
            <div align="center">
              <input name="cod_elemento" type="text" id="cod_elemento"  value="<?php echo $cod_elemento?>" size="20" />
            </div>
          </label></td>
          <td width="103"><div align="center">
            <strong>Nombre del Elemento </strong>
          </div></td>
          <td width="154"><div align="center">
            <input name="nombre_elemento" type="text" id="nombre_elemento"  value="<?php echo $nombre_elemento ?>" size="20" />
            </div></td>
          </tr>
			<tr>
		  <td width="84"><div align="center">
            <strong>Descripcion</strong> 
            </div></td>
			<td width="136"><div align="center">
            <input name="descripcion" type="text" id="descripcion"  value="<?php echo $descripcion ?>" size="13" />
            </div></td>
       
	   <td width="84"><div align="center">
            <strong>Dimensiones</strong> 
            </div></td>
          <td width="136"><div align="center">
            <input name="dimensiones" type="text" id="dimensiones"  value="<?php echo $dimensiones ?>" size="13" />
            </div></td>
	  
          <center><tr width="403">
            
          <td width="403"><div align="center"></div>
          <div align="center"><strong>equipo</strong></div></td>
          <td width="403"><div align="center">
            <label for="textarea"></label>
             <input name="equipo" type="text" id="equipo"  value="<?php echo $equipo ?>"/>
            </div></td> 
        </tr>
        </table>
    <br>
  
      <p>&nbsp;
        <strong>FOTO de la pieza</strong>
<br>
        <strong><a href="modificar_foto_parteselementos.php?cod_elemento=<?php echo $cod_elemento?>">Si desea Modificar la Foto pulse aqui</a></strong>

        <input type="hidden" name="cod_elemento" id="cod_elemento" value="<?php echo $cod_elemento ?>"> 
</div>
<tr><td colspan="2"><div align="center"><strong><br>

Presione el bot�n continuar para guardar los cambios</strong></div></td></tr>
    <div align="center">    </div>
<tr><td colspan="2"><div align="center">
      <input name="submit" type="submit" value="Continuar">
</div></td></tr>
    <div align="center">      </div>
      </form>
      </center>
      </table>

      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>


   
<!-- FINALIZA LA PAG -->
<!-- PIE DE PAG -->
              </div> </div>  
			   <div class="cleared"></div>
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