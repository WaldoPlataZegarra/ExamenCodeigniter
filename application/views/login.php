<html>
<head>
</head>
<body>


<form  action="http://localhost:8080/code/index.php/accion" method="POST">
<table>
<?php
	
	echo "<tr>";
	echo "<td>".'<label>ID:  </label>'."</td>";
	echo "<td>".'<input type="text" name="id"/>'."</td>";	 
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td>".'<label>Contraseña:  </label>'."</td>";
	echo "<td>".'<input type="password" name="Contra"/>'."</td>";	 
	echo "</tr>";
	echo "<tr>";
	echo "<tr >";
	echo "<td colspan='2' align='center'>".'<input type="submit" name="Aceptar" value="Aceptar"/>'."</td>";
	echo "<tr>";
?>
</table>
</form>
</body>
</html>