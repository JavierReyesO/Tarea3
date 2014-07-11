
<?php
session_start();
$rol = $_SESSION['rol'];
$pass = $_SESSION['pass'];

$con=pg_connect("host=localhost port=5432 user=postgres password=BD dbname=BD");
if(!$con)
{
    echo "Conexion no establecida, verifique sus datos";
}

$SQL="SELECT tipo FROM areas";
$lala = pg_query($SQL);
$numrows = pg_numrows($lala);

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<center>
    <table border="1" width="15%" cellpadding="3">
        <thead>
        <tr>
            <th colspan="3">Areas</th>
        </tr>
        </thead>
</center>

<?php
for ($i = 0 ; $i < $numrows ; $i++){
    $llamar = pg_fetch_array($lala);
    echo "<tr>";
    echo "<td>";
    echo '<form method="post" action="editar.php">';
    echo '<input type="text" name="tipo" value=';
    echo  $llamar["tipo"];
    echo " readonly/>";
    echo "<td>";
    echo '<input type="submit" value="Modificar" />';
    echo "</form>";
    echo "</td>";
    echo "</td>";
    echo "</tr>";
}
?>
<td>
    <form method="post" action="agregar.php">
        <input type="submit" value="Agregar"/>
    </form>
</td>
<td>
    <form method="post" action="admin.php">
        <input type="submit" value="Volver"/>
    </form>
</td>
</table>
</body>
</html>