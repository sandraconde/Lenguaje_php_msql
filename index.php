<?php 
include 'conexion/index.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>

 	<?php 
/*
 	$var1 = 12;
 	echo $var1;

 	$var2 = "hola";
 	echo $var2;

 	$var3 = 13.14;
 	echo $var3;

 	$var4 = $var1.$var2;
 	echo $var4;

 	$var5 = $var4;
 	echo $var5;
 	*/
 	 
 	 /*
 	 if (1==2){ 
 	 	echo "uno";
 	 	}else{
 	 		echo "dos";
 		}*/
 	$var =1;
 	switch ($var) {
 			case '1':
 	 	# code...
 	 	 echo"enero";
 	 	 break;
 	 	 case '2':
 	 	# code...
 	 	 echo"febrero";
 	 	 break;
 	case '3':
 	 	# code...
 	 	 echo"marzo";
 	 	 break;
 	 	 case '4':
 	 	# code...
 	 	 echo"abril";
 	 	 break;
 	 	 case '5':
 	 	# code...
 	 	 echo"mayo";
 	 	 break;
 	case '6':
 	 	# code...
 	 	 echo"junio";
 			break;
 		case '7':
 	 	# code...
 	 	 echo"julio";
 			break;
 			case '8':
 	 	# code...
 	 	 echo"agosto";
 			break;
 			case '9':
 	 	# code...
 	 	 echo"septiembre";
 			break;
 			case '10':
 	 	# code...
 	 	 echo"octubre";
 			break;
 			case '11':
 	 	# code...
 	 	 echo"noviembre";
 			break;
 			case '12':
 	 	# code...
 	 	 echo"diciembre";
 			break;
 		default:
 			# code...
 			echo "hola";
 			break;
 	}
 	 ?>
 
 </body>
 </html>