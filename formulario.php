<?php

include("conexion.php");
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["correo"];
$edad = $_POST["edad"];
$password = $_POST["contraseña"];

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$consultaId = "SELECT usuario FROM persona WHERE usuario = '$usuario' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if(!$consultaId){
    $sql = "INSERT INTO persona VALUES ('$usuario','$nombre','$apellidos','$email','$edad','$passwordHash')";
    if(mysqli_query($conexion, $sql)){
        echo "Tu cuenta ha sido creada.";
        echo "<br> <a href='formulario.html' > Iniciar Sesion </a> </div>";
    }
    else{
        echo "Error" . $sql . "<br>" . mysqli_error($conexion);
    }
}
else{
    echo " El usuario ya existe. ";
    echo "<a href='formulario.html' > Intentalo de nuevo </a> </div>";
}

mysqli_close($conexion);

?>