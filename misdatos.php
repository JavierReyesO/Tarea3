<?php
session_start();

$rol = $_SESSION['rol'];

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con)
{
    echo "Conexion no establecida, verifique sus datos";
}


$SQL= "SELECT * FROM students WHERE rol='$rol'";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);
$numrows = pg_numrows($busqueda);
$talla="";

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<form method="post" action="editarAdmin.php">
    <center>
        <table border="1" width="15%" cellpadding="3">
            <thead>
            <tr>
                <th colspan="3">Edicion del Área <?php echo $compara["nombre"] ?></th>
            </tr>
            </thead>
    </center>
    <tr>
        <td>Nombre</td>
        <td>
            <input type="text" name="nombrenuevo" value="<?php echo $compara["nombre"] ?>"/>
        </td>
    </tr>
    <tr>
        <td>Rol USM</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $compara["rol"] ?>"/>
        </td>
    </tr>
    <tr>
        <td>Rut</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $compara["rut"] ?>"/>
        </td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $compara["telefono"] ?>"/>
        </td>
    </tr>
    <tr>
        <td>Talla</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $talla ?>"/>
        </td>
    </tr>
    <tr>
        <td>Carrera</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $compara["carrera"] ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Editar" name="editar" />
        </td>
</form>
</body>
</html>