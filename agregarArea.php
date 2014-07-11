<?php


$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con) {echo "Conexion no establecida, verifique sus datos";}

$tipo=$_POST['tipo'];;
$colab = $_POST['colab'];

$SQL = "INSERT INTO areas (tipo, numerocolab) VALUES ('$tipo', '$colab')";
$consulta= pg_query($con, $SQL);

header('Location: areas.php');

?>