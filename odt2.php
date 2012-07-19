<?php require_once('Connections/consultaequipo.php'); ?>
<?php
mysql_select_db($database_consultaequipo, $consultaequipo);
$query_equi = "SELECT * FROM empleado";
$equi = mysql_query($query_equi, $consultaequipo) or die(mysql_error());
$row_equi = mysql_fetch_assoc($equi);
$totalRows_equi = mysql_num_rows($equi);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_empleado = "SELECT * FROM empleado";
$empleado = mysql_query($query_empleado, $consultaequipo) or die(mysql_error());
$row_empleado = mysql_fetch_assoc($empleado);
$totalRows_empleado = mysql_num_rows($empleado);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_equipo = "SELECT * FROM equipo";
$equipo = mysql_query($query_equipo, $consultaequipo) or die(mysql_error());
$row_equipo = mysql_fetch_assoc($equipo);
$totalRows_equipo = mysql_num_rows($equipo);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_elemento = "SELECT * FROM elementos_equipo";
$elemento = mysql_query($query_elemento, $consultaequipo) or die(mysql_error());
$row_elemento = mysql_fetch_assoc($elemento);
$totalRows_elemento = mysql_num_rows($elemento);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
<script type="text/javascript" src="script.js"></script></head>
<body>
tr<div id="art-page-background-middle-texture">
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
			
            <p>
			
<?php include "menu.php" ?>			


<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 
<?php
// declaracion de variables

//$id_elemento=$_POST['id_elemento'];
$codigo_odt=$_POST['codigo_odt'];
$empleado=$_POST['empleado'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_final=$_POST['fecha_final'];
$tipodemantenimiento=$_POST['tipodemantenimiento'];
$equipo=$_POST['equipo'];
$elemento=$_POST['elemento'];

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();

$empleado=strtoupper($empleado);
$tipodemantenimiento=strtoupper($tipodemantenimiento);
$equipo=strtoupper($equipo);
$elemento=strtoupper($elemento);

// funcion para insertar los ddatos en la tabla informe_personal
             $Insertar= "INSERT INTO odt VALUES('$codigo_odt','$empleado','$fecha_inicio','$fecha_final','$tipodemantenimiento','$equipo','$elemento')";
             $resultadoins=basedatos($Insertar);
             echo "<BR><p><strong><center>  La Informaci&acute;on fue registrada satisfactoriamente</center></strong></p><BR></tr>";
           
?>
<div class="art-content-layout">
  <div class="art-layout-cell art-sidebar1">
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                <div class="art-footer-text">				
                                
<p>Elaborado por  ING. Johan Manuel</a></p>
<p>2012</p>
