<?php

		if(isset($_GET['cajanumero']))
		{
			$numeroingresado = $_GET['cajanumero'];
			echo "<table border='1'><br>";
			echo "<h3>Tabla del $numeroingresado </h3>";
			
			for($i=1; $i <= 12; $i++)
			{
				$valor = $i*$numeroingresado;
				echo "<tr>";
				echo "<td>&nbsp; $i X $numeroingresado &nbsp;</td>";
				echo "<td>&nbsp; $valor &nbsp;</td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
		}

?>