<!DOCTYPE html>
 <?php
 include '/php/consultas.php';
 ?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Bienvenido Usuario</title>
    </head>

    <body>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="php/logout.php">Logout<i class="material-icons">power_settings_new</i></a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="php/logout.php">Logout</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <!--nav bar structure-->
        <nav class="nav-extended orange">
            <div class="nav-wrapper">
                <img class="brand-logo center"src="imagenes/logo-small.png" alt="holdtech" onclick="window.location.href='index.php'">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Impociciones</a></li>
                    <li><a href="#">Caja Gabriela Mistral</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION['nombre'];?><i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="#">Impociciones</a></li>
                    <li><a href="#">Caja Gabriela Mistral</a></li>
                </ul>

                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1">Liquidaciones</a></li>
                    <li class="tab"><a class="active" href="#test2">Horarios</a></li>
                    <li class="tab"><a href="#test3">Calidad</a></li>
                    <li class="tab"><a href="#test4">Asistencia</a></li>
                </ul>
            </div>
        </nav>
        <div id="test1" class="col s12">Test 1</div>
        <div id="test2" class="col s12">Test 2</div>
        <div id="test3" class="col s12">Test 3</div>
        <div id="test4" class="col s12">Test 4</div>
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          $(".button-collapse").sideNav();
      </script>    
    </body>
  </html>
