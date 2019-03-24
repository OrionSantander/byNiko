<?php
   $NAM = $_POST['NOMBRE'];
   $COR = $_POST['CORREO'];
   $TEL = $_POST['TELEFONO'];
   $COM = $_POST['COMENTARIO'];
/*
 CONECTAR CON BASE DE DATOS **************** */
   $con = mysql_connect("localhost","root","");
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
/* ********************************************** */
/* CONECTA CON LA BASE DE DATOS  **************** */
   $database = mysql_select_db("FARMACIA",$con);
   if (!$database){die('ERROR CONEXION CON BD:'.Mysql_error());}
/* ********************************************** */
//REALIZAR CONSULTA
$sql = ("INSERT INTO EMPLEADOS(NOEMPLEADOS, NOMBRE, CARGO, RFC, HORARIO) VALUES($EM,'$NO','$CA','$RFC','$HO'); ") ;
               $result = mysql_query($sql);
                if (! $result){
                               echo"La consulta SQL contiene errore.".Mysql_error();
                               exit();
                }else {
                  echo "REGISTRO EXITOSO";
                }
?>
<html>
<head>
</head>
<body>
<BR>
<form name="consulta1" method="post" action="consulta_empleados2.php">
<input type="submit" value="REGRESAR">;
</form>
</body>
</html>
