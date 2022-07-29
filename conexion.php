<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$BD = "mascotas";

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $BD);

if(!$conexion){
    echo "Fallo la conexion <br>";
    die("Connection failed: " . mysqli_connect_error());
}
else {
    //echo "Conexion exitosa";
    echo "-";
}
?>