<?php
//poner en /php
// redirige a la pagina principal si no existe la variable tipo session idUsuario
session_start();
if($_SESSION['idUsuario']==NULL){
   header('Location: index.php');
   exit();
}

