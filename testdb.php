<?php
$mysqli = new mysqli("localhost", "biblioteca", "usuario", "biblioteca");
if ($mysqli->connect_error) {
    die(" Error de conexión: " . $mysqli->connect_error);
}
echo " Conexión correcta a la base de datos.";
$mysqli->close();
?>
