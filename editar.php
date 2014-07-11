<?php

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con)
{
    echo "Conexion no establecida, verifique sus datos";
}

$tipo = $_POST["tipo"];

$SQL= "SELECT tipo, numerocolab FROM areas WHERE tipo='$tipo'";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);
$numrows = pg_numrows($busqueda);

if($tipo == $compara["tipo"]){
    $colab = $compara["numerocolab"];
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<form method="post" action="editarArea.php">
    <center>
        <table border="1" width="15%" cellpadding="3">
            <thead>
            <tr>
                <th colspan="3">Edicion del Área <?php echo $tipo ?></th>
            </tr>
            </thead>
    </center>
    <tr>
        <td>Nombre</td>
        <td>
            <input type="text" name="nombrenuevo" value="<?php echo $tipo ?>"/>
            <input type="hidden" name="nombre" value="<?php echo $tipo ?>"/>
        </td>
    </tr>
    <tr>
        <td>Colaboradores</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $colab ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Editar" name="editar" />
        </td>
</form>
<form method="post" action="confirmacion.php">
    <input type="hidden" name="tipo" value="<?php echo $tipo ?>"/>
    <td>
        <input type="submit" value="Borrar" name="borrar" />
    </td>
    </tr>
</form>
</body>
</html>