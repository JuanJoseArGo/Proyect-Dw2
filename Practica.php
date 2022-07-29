<?php

function contraseña($contra1,$contra2){
  if($contra1 <> $contra2){

      return 'contraseña no coincide.';
  } else {
      return 'contraseña coincide.';
  }
}


if(isset($_GET['valor1']) && isset($_GET['valor2'])) {
  // ejecutamos la funcion contraseña.
   echo contraseña($_GET['valor1'],$_GET['valor2']);
} else {
  // en caso de que no esten definidos (valor1,valor2) mostramos mensaje de error)
   echo 'No has introducido tu contraseña.';
}
?>