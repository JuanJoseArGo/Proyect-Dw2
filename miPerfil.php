<?php
include("conexion.php");
include("validarSesion.php");
?>

<html>
    <head>
        <title>Perfil</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miprofile.css">
    </head>

    <body>
        
    <h2>Nombre & Raza</h2>
    <hr>
        <?php
        $consulta = "SELECT * FROM compañero P WHERE P.Nombre in (SELECT A.Usuario FROM persona A WHERE A.Usuario ='$usuario') Limit 10";
        $datos = mysqli_query($conexion, $consulta);
        while($fila=mysqli_fetch_array($datos)){
        //var_dump($fila);
        ?>

        <h2><?php echo "Nombre:" .$fila['NombreDog'] . "| Raza: " .$fila['Sexo'] ?></h2>
        <?php } //var_dump($fila); ?>

        <a href="formMascota.html"> <button> Agregar </button> </a>
    </body>
</html>