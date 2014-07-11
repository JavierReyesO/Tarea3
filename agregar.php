<?php

$tipo="";
$colab = ""


?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Agregar Area</title>
</head>
<body>
<form method="post" action="agregarArea.php">
    <center>
        <table border="1" width="15%" cellpadding="3">
            <thead>
            <tr>
                <th colspan="3">Area</th>
            </tr>
            </thead>
    </center>
    <tr>
        <td>Nombre</td>
        <td>
            <input type="text" name="tipo" value="<?php echo $tipo ?>"/>
        </td>
    </tr>
    <tr>
        <td>Colaboradores</td>
        <td>
            <input type="text" name="colab" value="<?php echo $colab ?>"/>
        </td>
    </tr>
    <td>
        <input type="submit" value="Agregar"/>
    </td>
    <td>
        <form method="post" action="areas.php">
            <input type="submit" value="Volver"/>
        </form>
    </td>

</form>
</body>
</html>