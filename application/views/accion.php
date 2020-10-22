<?php
$id=$_POST['id'];
$contra=$_POST['Contra'];

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

$identificador[3][0]=1234500;
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

$usuario = array(array(10),array(2));

$usuario[0][0]=1234567;
$usuario[0][1]="123";

$usuario[1][0]=1234599;
$usuario[1][1]="321";

$usuario[2][0]=1237154;
$usuario[2][1]="321";

$usuario[3][0]=12345600;
$usuario[3][1]="123";

$usuario[4][0]=12345678;
$usuario[4][1]="123";

$usuario[5][0]=12345777;
$usuario[5][1]="321";

$usuario[6][0]=12378956;
$usuario[6][1]="123";

$usuario[7][0]=22345200;
$usuario[7][1]="321";

$usuario[8][0]=87654321;
$usuario[8][1]="123";

$usuario[9][0]=87654515;
$usuario[9][1]="321";


$c=0;
for($i=0;$i<10;$i++){
	if($usuario[$i][0]==$id && $usuario[$i][1]==$contra)
	{
       $c=1;
	}

}
echo "<br>";
if($c==1)
{
	

	for($i=0;$i<10;$i++){
	if($identificador[$i][0]==$id)
	{  session_start();
       $_SESSION['username']=$identificador[$i][0];
		$_SESSION['nombre']=$identificador[$i][1];
	}

}
	
	header ("location: http://localhost:8080/code/index.php/Bienvenida");
}
else{
		echo "Datos Erroneos"."<br>";
	echo "<a href='http://localhost:8080/code/index.php/Login'>Intentar Nuevamente</a>";
}

?>