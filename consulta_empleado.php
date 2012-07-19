<?php

	include "coneccionbasedatosmysql.inc";

	$enlace =conectarbase();



	if(!isset($_GET['pag']))

	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=30;

	$desde=($hasta*$pag)-$hasta;

	$consulta="SELECT * FROM empleado  LIMIT $desde, $hasta";

	$resultado=mysql_query($consulta,$enlace);

?><title>Consulta</title>





<center>

<table width="630"  border="1" bordercolor="#CCCCCC" class="tabla1"/>
<CAPTION><strong>
<p>&nbsp;</p>
<p>CONSULTA GENERAL</p>
<p>&nbsp;</p>
<p></strong></CAPTION>


<TR>

	<TH bgcolor="#E4E4E7" width="10">Empleado</TH>
	<TH bgcolor="#E4E4E7" width="130">Cargo</TH>
	<TH bgcolor="#E4E4E7" width="110">Teléfono</TH>
	<TH bgcolor="#E4E4E7" width="130">Dirección</TH>
	<TH bgcolor="#E4E4E7" width="130">Sexo</TH>
    <TH bgcolor="#E4E4E7" width="90">Fecha</TH>
	<TH bgcolor="#E4E4E7" width="90">Horario</TH>
	<TH bgcolor="#E4E4E7" width="120">Mostrar Foto</TH>
</tr>

	<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {

        $link2 =$row[9];


		echo "<td>$row[1], $row[2]. <p> CI:$row[0]</p></td>";
        echo "<center><td>$row[3]</td>";
		echo "<td><center>$row[4]</td>";
       	echo "<td><center>$row[5]</td>";
		echo "<td><center>$row[6]</td>";
       	echo "<td><center>$row[7]</td>";
       	echo "<td><center>$row[8]</td>";
		echo "<td><img src='$row[9]' width='100'height='100'></td>";	
		echo "<td><a target=_blank href='$link2'>$row[9]</a></td>";
      	
	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>



  </table>

  <?PHP

		$consulta="select count(cedula) from empleado";

		$lista=mysql_query($consulta,$enlace);

		$row=mysql_fetch_row($lista);

		$paginas=ceil($row[0]/$hasta);

		echo "<br>P&aacute;gina [".$pag."] de [".$paginas."]<br>";

		if($pag>1)

		{

			echo "<a href=\"consulta_empleado.php?pag=1\">|<<</a> <a href=\"pagina1.php?pag=".($pag-1)."\"></a> | ";

		}

		echo "<a href=\"consulta_empleado.php\">Volver</a> | ";

		if($pag<$paginas)

		{


			echo "<a href=\"consulta_empleado.php?pag=".($pag+1)."\">>></a> <a href=\"pagina1.php?pag=".($paginas)."\">|</a>";

		}

	
?>
