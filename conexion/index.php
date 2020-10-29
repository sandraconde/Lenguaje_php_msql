<?php 
$conexion = new mysqli("localhost","root","","dba");
if ($conexion) {
	# code...
	echo "hola bien";
	}else{
		echo "hola mal";
}
 ?>