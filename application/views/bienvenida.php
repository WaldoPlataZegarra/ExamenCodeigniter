<?php

include "cabecera.inc.php";
$id=$_SESSION['username'];
if(!isset($id)){
	header("location: http://localhost:8080/code/index.php/Login");
}
else
{

}

?>