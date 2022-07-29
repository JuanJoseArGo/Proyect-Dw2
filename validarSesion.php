<?php

session_start();
$login = $_SESSION['login'];
if(!$login){
    header('Location: form.html');
}
else{
    $usuario = $_SESSION['usuario'];
}

?>