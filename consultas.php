<?php
//este archivo va en /php
    include 'seguridad.php';
    include 'conectarBD.php';
    $idUsuario=$_SESSION['idUsuario'];
    $estado=$_SESSION['estado'];
            
    function datosUser($idUsuario,$enlace){
        $query="SELECT nombreTrabajador,idCargo,descripcion_cargo
                FROM trabajadores,cargos
                WHERE idCargo=cargo_trabajador
                AND idTrabajador=$idUsuario";   
        $result= mysqli_query($enlace, $query);
        if($result){
            mysqli_data_seek($result, 0);
            $extraido= mysqli_fetch_array($result);
            $nombre=$extraido['nombreTrabajador'];
            $cargo=$extraido['descripcion_cargo'];
            $codCargo=$extraido['idCargo'];
            mysqli_free_result($result);
            mysqli_close($enlace);
            return array($nombre,$cargo,$codCargo);
        }else{
            mysqli_close($enlace); 
        }    
    }
    list($nombre,$cargo,$codCargo)= datosUser($idUsuario, conectarBD());
    $_SESSION['nombre']=$nombre;
    $_SESSION['cargo']=$cargo;
    $_SESSION['codCargo']=$codCargo;
    
    
    if($estado==0){
        header("Location: php/cambioDePassword.php");
    }elseif ($_SESSION['codCargo']==1){
            header("Location: main-boss.php");
    }
         
    
