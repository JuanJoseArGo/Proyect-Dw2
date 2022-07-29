<?php

include("conexion.php");
$usuario = $_POST["nombre"];
$nombre = $_POST["nombreDog"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];

$consulta = "INSERT INTO compañero (Nombre, NombreDog, Sexo, Edad) VALUES ('$usuario','$nombre','$sexo','$edad')";
if(mysqli_query($conexion, $consulta)){
    echo "va bien";
        echo "Ahora tienes nueva mascota";
        header('Location: miPerfil.php');
}
else {
    echo "ERROR";
}



?>