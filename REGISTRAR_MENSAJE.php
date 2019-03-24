<html>
<head>
</head>
<body>
<BR>
<form name="consulta1" method="post" action="index-4.html">
<input type="submit" value="REGRESAR">
</form>

<?php
$conexion=mysql_connect("localhost","root")
or die("problemas en la conexion");

mysql_select_db("AMJO",$conexion)
or die("problemas con la seleccion de la base de datos");

mysql_query("INSERT INTO COMENTARIOS (NOMBRE, CORREO, TELEFONO, MENSAJE) VALUES('$_REQUEST[NOMBRE]','$_REQUEST[CORREO]',$_REQUEST[TELEFONO],'$_REQUEST[COMENTARIO]')",$conexion) or die ("problemas en el select".mysql_error());

mysql_close($conexion);

echo "se agrego el comentarios";
?>
</body>
</html>
