<?php

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con)
{
    echo "Conexion no establecida, verifique sus datos";
}

$tipo = $_POST['tipo'];

$SQL="SELECT * FROM areas";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);
$columnas = pg_fetch_all_columns($busqueda);

for ($i=0;$i<sizeof($columnas);$i++){
    $filaasd = pg_fetch_array($busqueda);
    if ($filaasd["tipo"]==$tipo){
        $colaborador = $filaasd[2];
    }
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<form method="post" action="editar2.php">
    <center>
        <table border="1" width="15%" cellpadding="3">
            <thead>
            <tr>
                <th colspan="3">Edicion del Area <?php echo $nombre ?></th>
            </tr>
            </thead>
    </center>
    <tr>
        <td>Nombre</td>
        <td>
            <input type="text" name="nombrenuevo" value="<?php echo $nombre ?>"/>
            <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
        </td>
    </tr>
    <tr>
        <td>Colaboradores</td>
        <td>
            <input type="text" name="colaboradores" value="<?php echo $colaborador ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Editar" name="editar" />
        </td>
</form>
<form method="post" action="confirmacion.php">
    <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
    <td>
        <input type="submit" value="Borrar" name="borrar" />
    </td>
    </tr>
</form>
</body>
</html>