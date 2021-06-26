<?php 

// importamos el archivo de funciones 

require 'funciones.php';

// importamos el archivo de bases de datos(conexion)

require "config/database.php";

// importamos el autoload de php 

require __DIR__. "/../vendor/autoload.php";


use App\Propiedad;


$Propiedad = new Propiedad();



?>

