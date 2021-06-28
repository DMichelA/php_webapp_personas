<?php

$db = new SQLite3('agenda.db');

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];

$db->exec("INSERT INTO personas(nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono');");

header("Location: index.php");
?>