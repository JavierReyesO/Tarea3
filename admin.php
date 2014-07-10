<?php session_start();
$rol = $_SESSION['rol'];
$pass = $_SESSION['pass']; ?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Administrador</title>
</head>
<body>
<ul>
    <li>Menu
        <ul>
            <li><a href="">Mis Datos</a></li>
            <li><a href="areas.php">Áreas</a></li>
            <li><a href="">Coordinadores de Área</a></li>
            <li><a href="">Noticias</a></li>
            <li><a href="">Postulantes</a></li>
            <li><a href="">Colaboradores Seleccionados</a></li>
            <li><a href=""></a></li>
        </ul>
    </li>

</ul>
<ul> <li><?php$pass?><a href='logout.php'>Log out</a>  </li></ul>
</body>
</html>