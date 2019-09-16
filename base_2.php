
<html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","sepulveda","luis0703","alumnos") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into estudiantes(nombre,mail,codigocurso) values
('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
</html>