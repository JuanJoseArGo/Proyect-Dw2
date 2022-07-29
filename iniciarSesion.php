<?php 

include("conexion.php");

session_start();
$_SESSION['login'] = false;

$usuario = $_POST["usuario"];
$password = $_POST["contraseña"];

$consulta = "SELECT * FROM `persona` WHERE Usuario='$usuario' ";
$consulta = mysqli_query($conexion, $consulta);
$consulta = mysqli_fetch_array($consulta);

if($consulta){
    if(password_verify($password,$consulta['Contraseña'])){
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $consulta['Usuario'];
        $_SESSION['nombre'] = $consulta['Nombre'];
        $_SESSION['apellidos'] = $consulta['Apellidos'];
        $_SESSION['email'] = $consulta['Email'];
        $_SESSION['edad'] = $consulta['Edad'];
        header('Location: miPerfil.php');
    }
    else{
        echo "Contraseña Incorrecta";
        echo "<br><a href='form.html'> Intentalo de nuevo. </a></div>";
    }
}
else{
    echo "El usuario no existe.";
    echo "<br><a href='form.html'> Intentalo de nuevo. </a></div>";
}

mysqli_close($conexion);

?>