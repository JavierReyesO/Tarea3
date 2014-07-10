<?php

session_start();

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con)
{
    echo "Conexion no establecida, verifique sus datos";
}

$rol=$_POST['rol'];
$pass=$_POST['pass'];
$tipo = "admin";


$SQL="SELECT rol, contrasena, tipo FROM students WHERE rol='$rol' and contrasena='$pass'";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);

if ($compara["rol"]==$rol && $compara["contrasena"]==$pass)
{
    $_SESSION['rol'] = $rol;
    $_SESSION['pass'] = $pass;

    if($compara["tipo"]=="admin"){
        header('Location: admin.php');
    }





}

?>