<?php
$tipo = $_POST['tipo'];
?>

<html>
<body>
<center>
    <table border="1" width="15%" cellpadding="3">
        <form method="post" action="borrarArea.php">
            <thead>
            <tr><th colspan="3">Confirme el borrado</th></tr>
            </thead>
            <tr>
                <td>
                    <input type="hidden" name="nombre" value="<?php echo $tipo ?>"/>
                    <input type="submit" value="Confirmar" />
                </td>
        </form>
        <form method="post" action="areas.php">
            <td>
                <input type="submit" value="Cancelar" />
            </td>
            </tr>
        </form>
    </table>
</center>
</body>
</html>