<?php

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con) {echo "Conexion no establecida, verifique sus datos";}

$nombre=$_POST["nombre"];
$rut = $_POST["rut"];
$rol = $_POST["rol"];
$telefono = $_POST["telefono"];
$talla = $_POST["talla"];
$carrera = $_POST["carrera"];


$SQL2= "SELECT rol, student_id FROM students, coordinators WHERE students.rol='$rol' AND students.id = coordinators.student_id";
$consulta = pg_query($con, $SQL2);

$compara=pg_fetch_array($busqueda);
$student_id = intval($compara["student_id"]);

$SQL3 = " UPDATE coordinators SET talla='$talla' WHERE student_id=1";
$consulta3 = pg_query($con, $SQL3);

$SQL = "UPDATE students SET nombre = '$nombre', rut = '$rut', rol='$rol', telefono='$telefono', carrera= '$carrera' WHERE rol='$rol'";
$consulta2= pg_query($con, $SQL);

header('Location: misdatos.php');

?>