<?php
    include 'seguridad.php';
    include 'conectarBD.php';
    
    
    function mensaje (){
        $mensajePrimerLogin='<h5 class="red-text"><i class="medium material-icons prefix">report_problem</i>
            Debe cambiar su contraseña 
            en el primer inicio de seseion, 
            no use caracteres especiales.<br>
            Una vez cambiada sera desconectado inmediatamente 
            y redireccionado a la pagina de login.</h5>';
        $mensajeCambioDePassword='<h5 class="red-text"><i class="medium material-icons prefix">new_releases</i> 
            Asegurese de escojer una 
            contraseña facil de recordar. <br>
            no use caracteres especiales.</h5>';
        
        if($_SESSION['estado']==0){
            echo $mensajePrimerLogin;
        }
        if($_SESSION['estado']==1){
            echo $mensajeCambioDePassword;
        }  
    }
    
    
    $idUsuario=$_SESSION['idUsuario'];
    $nueva=filter_input(INPUT_POST,'nueva');
    $confirmada= filter_input(INPUT_POST, 'confirmada');
    
    function cambiarPassword($nuevaPassword,$idUsuario,$enlace){
            $query="UPDATE usuariossistema
                    SET passUsuario='$nuevaPassword',loginPrimeraVezUsuario=1
                    WHERE idUsuario=$idUsuario";   
            $result= mysqli_query($enlace, $query);
            if($result){
            mysqli_close($enlace);
            }else{
               mysqli_close($enlace); 
            }
    }
    
    $logout=null;
    if(null!==filter_input(INPUT_POST, 'aceptarPassword')){
        if($nueva&&$confirmada!==NULL){
            if($nueva===$confirmada){
               cambiarPassword($nueva, $idUsuario, conectarBD());
               sleep(3);
               header('Location: php/logout.php');
            }else{
                echo '<script type"Text/Javascript">
                            alert("Las password deben coincidir");
                      </script>';
            } 
        }    
    }
