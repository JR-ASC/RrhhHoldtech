<!DOCTYPE html>
<?php
  include 'php/login.php';
  ?>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <title>Login Holdtech</title>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper orange">
                <img class="brand-logo center" src="imagenes/logo-small.png" alt="holdtech" onclick="window.location.href='index.php'">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="http://www.holdtech.cl/">Holdtech</a></li>
                    <i class="material-icons">language</i>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="http://www.holdtech.cl/">Holdtech.cl</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <!--parallax container-->
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                    <div class="container">
                        <br><br>
                        <img class="header" src="imagenes/logo.png" alt="Holdtech"/>  
                    </div>
                </div>
                <div class="parallax"><img src="imagenes/slide2.jpg"></div>
            </div>
            <!--   Login section   -->
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                                <h5 class="center">Login</h5>
                                <form class="col s11" action="" method="post">
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input placeholder="Rut sin puntos ni guion" id="user" type="text" name="nombre-usuario" pattern="^([0-9]+[k]{0,1}){8,9}" title="Ese no parece un Rut valido." class="validate" required/>
                                        <label class="active" for="user">Usuario:</label>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <input id="user" type="password" name="contrasenia" class="validate" required/>
                                        <label for="user">password:</label>
                                    </div>
                                    <div class="input-field center">
                                        <button class="btn waves-effect waves-light orange" type="submit" name="button-connection">Ingresar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                                <div class="input-field right">
                                    <br>
                                    <a class="grey-text text-darken-1" href="#!">¿Olvido su password?</a>                                   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 l4">
                            <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">cloud</i></h2>
                                <h5 class="center">Sus datos en todo lugar:</h5>
                                <p class="light">Con la aplicación web de holdtech, usted podra tener acceso a sus datos en todo lugar, disfrute de la compatibilidad con diferentes dispositivos moviles o de escritorio Android, Windows o Macintosh, usted podra revisar en linea su horario laboral, pre-liquidaciones, liquidaciones de sueldo, notas de calidad y asistencia ademas de tener a su dispocición enlaces de utilidad para verificacación de cotizaciones y caja de compensación.</p>
                            </div>
                        </div>
                        <div class="col s12 m4 l4">
                            <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                                <h5 class="center">Facíl de Usar:</h5>
                                <p class="light">Con un diseño, elgante, limpio y sencillo basado en material desing de Google &REG; disponemos su información en pantalla de modo que esta se vizualice de forma clara y comoda aprovechando los espacios y haciendo que la navegacion sea rapida, comoda e intuitiva.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <h5 class="white-text">Holdtech S.A.</h5>
                        <p class="grey-text text-lighten-4">Contacto:</p>
                        <p class="grey-text text-lighten-4"><i class="material-icons prefix">phone</i> (+56 2) 2429 7770.</p>
                        <p class="grey-text text-lighten-4"><i class="material-icons prefix">location_on</i> Lira #278. Región Metropolitana, Santiago Chile.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 Copyright J&R Ltda. all right reserved.
                    <a class="grey-text text-lighten-4 right" href="#!">Contacto J&R Ltda.</a>
                </div>
            </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <script> $(".button-collapse").sideNav();</script>
    </body>
</html>

