<?php

// Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

// Crear un email y password
$email = "orellanarapalo@gmail.com";
$password = "carlos199028";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


// Query para crear el usuario
$query = " INSERT INTO usuario (email, password) VALUES ( '${email}', '${passwordHash}'); ";

// echo $query;

// Agregarlo a la base de datos
mysqli_query($db, $query);