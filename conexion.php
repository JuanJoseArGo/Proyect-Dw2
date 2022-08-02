<?php
// Pa probar papi
//$servidor = "localhost";
//$usuario = "root";
//$contrasenia = "";
//$BD = "mascotas";

$servidor = "remotemysql.com";
$usuario = "pn4Ka2jL80";
$contrasenia = "Osb60Li89G";
$BD = "pn4Ka2jL80";

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