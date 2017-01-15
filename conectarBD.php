<?php
//funcion basica para conectar a la base de datos provisora poner el archivo en /php
  function conectarBD(){    
        $host='localhost';
        $user='root';
        $password='';
        $database='empresax';
        $port='3306';
        $socket='/tmp/mysql.sock';
        $enlace= mysqli_connect($host, $user, $password, $database, $port, $socket);
        if($enlace){
               
        } else {
           die("fallo la coneccion");
        }
            return $enlace;
    }
