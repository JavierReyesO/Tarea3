<?php


$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con) {echo "Conexion no establecida, verifique sus datos";}

$nombre= $_POST['nombre'];
$nombrenuevo= $_POST['nombrenuevo'];
$colab = $_POST['colaboradores'];

$SQL = "UPDATE areas SET tipo = '$nombrenuevo', numerocolab = '$colab' WHERE tipo='$nombre'";
$consulta= pg_query($con, $SQL);

header('Location: areas.php');

?>