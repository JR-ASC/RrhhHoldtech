<?php
    session_start();
    include_once 'conectarBD.php';
    $user=filter_input(INPUT_POST,'nombre-usuario');//variable que recibe la el usuario
    $pass=filter_input(INPUT_POST,'contrasenia');// variable que recibe la contraseña
    
    function loginUser($user,$pass,$enlace){//funcion que realiza el login
        //consulta sql
            $query="SELECT idUsuario,loginPrimeraVezUsuario
                    FROM usuariossistema
                    WHERE userUsuario='$user'
                    AND passUsuario='$pass'"; 
            //funcion que realiza la consulta sql
            $result= mysqli_query($enlace, $query);
            //condicional para controlar si la consulta fallase
            if($result){
             //funcion que rescata el primer resultado de la consulta   
            mysqli_data_seek($result, 0);
            /*se guarda en $estraido el array que arma mysqli_fetch_array ($extraido ahora es un array)
             * que contiene los campos pedidos en la consulta sql
             */
            $extraido= mysqli_fetch_array($result);
            //se guardan en variables individuales los campos obtenidos en la consulta sql
            $idUsuario=$extraido['idUsuario'];
            $estado=$extraido['loginPrimeraVezUsuario'];
            //se libera la variable result y se cierra la coneccion
            mysqli_free_result($result);
            mysqli_close($enlace);
            // se retorna finalmente un arreglo con variables 
            return array($idUsuario,$estado);
            }else{
                //si falla la consulta por cualquier motivo se cierra la conneccion
               mysqli_close($enlace); 
            }    
    } 
    //verificamos si existe la variable session.
    if(!isset($_SESSION['idUsuario'])){
        //si no existe se verifica si se presiono el boton en el formulario
        if(null!==(filter_input(INPUT_POST, 'button-connection'))){
            //si se presiono se toma el array de la funcion loginUser y se obtienen las variables de cada casilla en la funcion list
                list($idUsuario,$estado)=loginUser($user, $pass, conectarBD());
            //finalmente si la variable idusuario no esta vacia se crean las variables de tipo session y se redirecciona al index.php
            if($idUsuario!==NULL){
                $_SESSION['idUsuario']=$idUsuario;
                $_SESSION['estado']=$estado;
                header("location: index.php");
            }else{
                //si no se encuentra el idUsuario en la BD la variable seria null entrando a este else
                echo '<script type="Text/Javascript">
                    alert("Usuario o Password incorrecto, intente nuevamente");
                    </script>'; 
            }  
        }
    } else {
            /*en la redireccion ya existiran las variables de sesion asi que pasara directamente a este punto
            donde seremos redirigidos a la pagina main-menu.php*/
            header("Location: main-menu.php");
      }
