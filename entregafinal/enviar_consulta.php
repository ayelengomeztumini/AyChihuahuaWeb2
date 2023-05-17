<?php
$nombre_form = $_POST ["nombre"];
$apellido_form = $_POST ["apellido"];
$mail_form = $_POST ["mail"];
$mensaje_form = $_POST ["mensaje"];

//conexion a base de datos//
//$conexion = mysqli_connect("localhost", "root", "", "programador_web_200") or exit ("No se pudo conectar base de datos");//
$conexion = mysqli_connect("localhost", "id20560200_ayelenv", "OOPV)&)O6#/Fzkx3", "id20560200_programador_web_200") or exit ("No se pudo conectar base de datos");

//consulta insert//
mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$mail_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?ok");