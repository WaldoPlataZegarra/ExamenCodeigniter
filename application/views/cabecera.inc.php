<html>
	<head>
		<title>Bienvenida</title>
		<script>
		function colorE()
		{
			var x=document.getElementById("color");
			var bgcolor=x.options[x.selectedIndex].value;
			document.body.style.backgroundColor=bgcolor;
		}
		</script>
		<link href="http://localhost:8080/code/plantilla/hoja.css"  rel="stylesheet" />
	</head>
	<body>
	
		<div ID="cabecera">
		</div>
		<?php
		/*
		Pregunta 1
		*/
		
		session_start();
	
		echo "<select id='color'>";
		echo "<option value='' selected disabled hidden>Elige Color</option>";
		echo "<option class='Blue'>blue</option>";
		echo "<option class='Pink'>pink</option>";
		echo "<option class='Green'>green</option>";
		echo "</select>";
		echo "<button onclick='colorE()'>aceptar</button>";
		echo "<div id='fondo'>";
		$id=$_SESSION['username'];
		$nombre=$_SESSION['nombre'];
		echo $nombre."<br>";
		echo "<a href='http://localhost:8080/code/index.php/Salir'>Salir</a>";		
		echo "</div>";
		$imagen="cabecera".$id;
		echo "<div id='$imagen'>";
		echo "</div>";
		
		$notamateria = array(array(15),array(3));

		$notamateria[0][0]="INF-111";
		$notamateria[0][1]=12345678;
		$notamateria[0][2]=51;

		$notamateria[1][0]="INF-112";
		$notamateria[1][1]=12345678;
		$notamateria[1][2]=55;

		$notamateria[2][0]="INF-113";
		$notamateria[2][1]=87654321;
		$notamateria[2][2]=66;

		$notamateria[3][0]="INF-121";
		$notamateria[3][1]=87654321;
		$notamateria[3][2]=57;

		$notamateria[4][0]="MAT-124";
		$notamateria[4][1]=12378956;
		$notamateria[4][2]=99;

		$notamateria[5][0]="FIS-132";
		$notamateria[5][1]=12378956;
		$notamateria[5][2]=61;

		$notamateria[6][0]="INF-121";
		$notamateria[6][1]=12345600;
		$notamateria[6][2]=67;

		$notamateria[7][0]="MAT-124";
		$notamateria[7][1]=12345600;
		$notamateria[7][2]=55;

		$notamateria[8][0]="FIS-132";
		$notamateria[8][1]=1234567;
		$notamateria[8][2]=66;

		$notamateria[9][0]="INF-121";
		$notamateria[9][1]=12345777;
		$notamateria[9][2]=51;

		$notamateria[10][0]="MAT-124";
		$notamateria[10][1]=12345678;
		$notamateria[10][2]=55;

		$notamateria[11][0]="FIS-132";
		$notamateria[11][1]=1237154;
		$notamateria[11][2]=66;

		$notamateria[12][0]="INF-121";
		$notamateria[12][1]=22345200;
		$notamateria[12][2]=25;

		$notamateria[13][0]="MAT-124";
		$notamateria[13][1]=22345200;
		$notamateria[13][2]=78;

		$notamateria[14][0]="FIS-132";
		$notamateria[14][1]=1234599;
		$notamateria[14][2]=66;



		$identificador = array(array(10),array(4));
	$identificador[0][0]=1234567;
	$identificador[0][1]="Kevin Choque Quispe";
	$identificador[0][2]="2001-02-17";
	$identificador[0][3]="09";

	$identificador[1][0]=1234599;
	$identificador[1][1]="Fernado Condori Arruquipa";
	$identificador[1][2]="1997-04-11";
	$identificador[1][3]="02";

	$identificador[2][0]=1237154;
	$identificador[2][1]="Jose Torrez Nina";
	$identificador[2][2]="1994-12-25";
	$identificador[2][3]="07";

	$identificador[3][0]=12345600;
	$identificador[3][1]="Anna Huanca Mamani";
	$identificador[3][2]="1999-04-11";
	$identificador[3][3]="02";

	$identificador[4][0]=12345678;
	$identificador[4][1]="Juan Perez Ramirez";
	$identificador[4][2]="1993-05-23";
	$identificador[4][3]="01";

	$identificador[5][0]=12345777;
	$identificador[5][1]="Luis Patzi Gutierrez";
	$identificador[5][2]="1991-06-05";
	$identificador[5][3]="05";

	$identificador[6][0]=12378956;
	$identificador[6][1]="Maria Luisa Lopez";
	$identificador[6][2]="1997-06-09";
	$identificador[6][3]="03";

	$identificador[7][0]=22345200;
	$identificador[7][1]="Yola Callisaya Cari";
	$identificador[7][2]="1996-11-01";
	$identificador[7][3]="08";


	$identificador[8][0]=87654321;
	$identificador[8][1]="Carlos Quispe Flores";
	$identificador[8][2]="1995-03-02";
	$identificador[8][3]="04";

	$identificador[9][0]=87654515;
	$identificador[9][1]="Laura Cosme Quispe";
	$identificador[9][2]="1996-11-01";
	$identificador[9][3]="06";
	echo "<br>";
$	codigos = array(array(15));
	$c=0;

		for($i=0;$i<15;$i++)
		{
			if($notamateria[$i][2]>50)
			{
				$codigos[$c]=$notamateria[$i][1];
				$c++;
			}
		}

		$dep=array(array(9));
		$dep[0]="01";
		$dep[1]="02";
		$dep[2]="03";
		$dep[3]="04";
		$dep[4]="05";
		$dep[5]="06";
		$dep[6]="07";
		$dep[7]="08";
		$dep[8]="09";
	
	$departamentos = array(array(9));
	for($i=0;$i<9;$i++)
	{
	$departamentos[$i]=0;	
	}
	for($i=0;$i<9;$i++)
	{	for($j=0;$j<10;$j++){
		if($dep[$i]==$identificador[$j][3])
		{	
			for($k=0;$k<$c;$k++)
			{
				if($codigos[$k]==$identificador[$j][0])
				{
					$departamentos[$i]++;
				}
			}
		}
		}
	}
	echo "<br>";
	
	echo "<table table border='1' bordercolor='red'>";

	echo "<tr>";
		echo "<td>Chuqisaca</td>";
		echo "<td>La Paz</td>";
		echo "<td>Cochabamba</td>";
		echo "<td>Oruro</td>";
		echo "<td>Potosi</td>";
		echo "<td>Tarija</td>";
		echo "<td>Santa Cruz</td>";
		echo "<td>Beni</td>";
		echo "<td>Pando</td>";
		echo "</tr>";
       echo "<tr>";
		for($i=0;$i<9;$i++)
		{
			echo "<td>".$departamentos[$i]."</td>";
		}
		echo "</tr>";
	echo "</table>";
		?>
		

		