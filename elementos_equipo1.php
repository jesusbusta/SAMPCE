<?php require_once('Connections/consultaequipo.php'); ?>
<?php
mysql_select_db($database_consultaequipo, $consultaequipo);
$query_equi = "SELECT * FROM equipo";
$equi = mysql_query($query_equi, $consultaequipo) or die(mysql_error());
$row_equi = mysql_fetch_assoc($equi);
$totalRows_equi = mysql_num_rows($equi);
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
    <script type="text/javascript" src="script.js"></script>
    <style type="text/css">
<!--
.Estilo5 {
	color: #000000;
	font-weight: bold;
}
-->
    </style>
</head>
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
</head>
<body>

 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="elementos_equipo2.php" onsubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>Partes de equipos</strong> 
 <fieldset>
	<legend class="Estilo5">Seleccionar el equipo</legend>
	
	
</p>

<div align="center">
  
 <table  width="700" bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF"> <label> <a bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF"> EQUIPO
  <select name="equipo" id="equipo">
    <?php
do {  
?>
    <option value="<?php echo $row_equi['nombre_equipo']?>"<?php if (!(strcmp($row_equi['nombre_equipo'], $row_equi['nombre_equipo']))) {echo "selected=\"selected\"";} ?>><?php echo $row_equi['nombre_equipo']?></option><?php
} while ($row_equi = mysql_fetch_assoc($equi));
  $rows = mysql_num_rows($equi);
  if($rows > 0) {
      mysql_data_seek($equi, 0);
	  $row_equi = mysql_fetch_assoc($equi);
  }
?>
  </select>
  </label>
  <label></label>
<br>
</table>
 </fieldset>
    <p>&nbsp;</p>


<fieldset>
<legend class="Estilo5">Datos del elemento del equipo</legend>
  <table  width="700" bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF" >
    <tr>
      <td width="97"><div align="center"><strong>Codigo </strong></div></td>
      <td width="74"><label> </label>
      <div align="center">
        <input name="cod_elemento" type="text" id="cod_elemento" />
      </div></td>
      <td width="74"><div align="center">
          <p><strong>Nombre </strong></p>
      </div></td>
      <td width="78"><div align="center">
          <input name="nombre_elemento" type="text" id="nombre_elemento" />
      </div></td>
    </tr>
    <tr>
      <td width="97"><div align="center">
          <p><strong> Descripcion</strong></p>
      </div></td>
      <td width="74"><div align="center">
          <input name="descripcion" type="text" id="descripcion" />
      </div></td>
      <td width="104"><div align="center">
          <p><strong> Dimensiones</strong></p>
      </div></td>
      <td width="168"><div align="center">
          <input name="dimensiones" type="text" id="dimensiones" />
      </div></td>
    </tr></table>
    <table  width="700" bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF" >
      <td><div align="center"><strong>Fotografia</strong>
              <input type="hidden" id="titulo" name="titulo" />
              <input type="file" size="20" name="archivo" id="archivo" />
      </div></td>
      </tr>
  </table>
  <br>
</fieldset>
  
<div align="center"><input name="submit" type="submit" value="Guardar" /></div>
 </form>


</body>
</html>

<?php
mysql_free_result($equi);

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





