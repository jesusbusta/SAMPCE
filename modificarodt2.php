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

<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 
</head>

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
  
    
   $consulta = "SELECT * from odt where codigo_odt = '$criterio';";
  
  
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
                   $codigo_odt=$row[0];
                   $empleado=$row[1];
                   $fecha_inicio=$row[2];
                   $fecha_final=$row[3];
                   $tipodemantenimiento=$row[4];
                   $equipo=$row[5];
                   $elemento=$row[6];
                   
				   //$link2=$row[9];
                   ?>
     
      <div align="center">
	  <strong>MODIFICAR Orden de trabajo</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>N° de odt:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr>
          <td><strong>empleado</strong></td>
          <td><?php echo "  $row[1]" ?></td></tr>
        <tr><td><strong>Fecha de inicio  </strong></td><td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>Fecha de culminacion:</strong></td><td><?php echo "$row[3]" ?></td></tr>
        <tr><td><strong>Tipo de mantenimiento:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>equipo:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
        <tr><td><strong> elemento :</strong></td><td><?php echo "  $row[6]" ?></td></tr>
         </table>        
        <?php
                   }
                   ?>
        
 <form action="modificar_odt.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >
    
        <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="114"><div align="center"><strong>N° de ODT </strong></div></td>
          <td width="141"><label>
            <div align="center">
              <input name="codigo_odt" type="text" id="codigo_odt"  value="<?php echo $codigo_odt?>" size="20" />
            </div>
          </label></td>
          <td width="103"><div align="center">
            <strong>Empleado</strong>
          </div></td>
          <td width="154"><div align="center">
            <input name="empleado" type="text" id="empleado"  value="<?php echo $empleado?>" size="20" />
            </div></td>
          </tr>
		  </table>
		  
		  
       <table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
          <tr>
            <td width="99"><div align="center"><strong>Fecha de ingreso</strong></div></td>
          <?php // formato de la fecha ano, mes y dia
              $hoy=date("d-m-Y");
            ?>
            <td width="144"><div align="center">
              <input type="text" id="fechai" name="fecha_inicio" size="10" value="<?php echo $fecha_inicio?>" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
              <input type="image" src="calendario/calendario.gif" id="fecha" />
              <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
              <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fechai", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
            </div></td>
        
		</tr>
		</table>
		
		
		<table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
          <tr>
            
			<td width="99"><div align="center"><strong>Fecha de culminacion</strong></div></td>
          <?php // formato de la fecha ano, mes y dia
              $hoy=date("d-m-Y");
            ?>
            <td width="144"><div align="center">
              <input type="text" id="fechaf" name="fecha_final" size="10" value="<?php echo $fecha_final?>" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
              <input type="image" src="calendario/calendario.gif" id="fecha2" />
              <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
              <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fechaf", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha2" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
            </div></td>
        
		</tr>
		</table>
		
		<table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
		<tr>	
		<td><div align="center"><strong>Tipo de mantenimiento</strong></div>
       <div align="center"> <?php echo $tipodemantenimiento ?> 
	   <center> <td> <div align="center">
	     <input name="tipodemantenimiento" type="radio" value="preventivo" <?php echo $tipodemantenimiento ?>/>
	     Preventivo</div>
	   </div> </label>
        <div align="center"><input type="radio" name="tipodemantenimiento" value="correctivo" <?php echo $tipodemantenimiento ?> />
   Correctivo</div></label></td>
   
		<!--<td width="100"><div align="center"><strong>Tipo de mantenimientoo</strong></div></td>
          <td width="144"><div align="center">
            <select name="tipodemantenimiento" id="tipodemantenimiento">
            <option selected><?php echo $tipodemantenimiento ?></option>
            <option value="preventivo">preventivo</option>
            <option value="correctivo">correctivo</option>
          </select>
            </div></td>
			</tr>
		-->
		</td>
		</td>
		</td>
		</td>
			</table>
		
		<table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
		<tr>
		<td width="114"><div align="center"><strong>Empleado </strong></div></td>
          <td width="141"><label>
            <div align="center">
              <input name="empleado" type="text" id="empleado"  value="<?php echo $empleado?>" size="20" />
            </div>
          </label></td>
		  </tr>
		</table>
		
		<table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
		<tr>
		<td width="114"><div align="center"><strong>Equipo </strong></div></td>
          <td width="141"><label>
            <div align="center">
              <input name="equipo" type="text" id="equipo"  value="<?php echo $equipo?>" size="20" />
            </div>
          </label></td>
		  <tr>
		  
		  <td width="114"><div align="center"><strong>Pieza </strong></div></td>
          <td width="141"><label>
            <div align="center">
              <input name="elemento" type="text" id="elemento"  value="<?php echo $elemento?>" size="20" />
            </div>
          </label></td>
		  
		  
		  </tr>
		  
		  </tr>
		</table>
		
		

Presione el bot�n continuar para guardar los cambios</strong></div></td></tr>
    <div align="center">
    </div>
<tr><td colspan="2"><div align="center">
      <input name="submit" type="submit" value="Continuar">
</div></td></tr>
    <div align="center">
      </div>
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