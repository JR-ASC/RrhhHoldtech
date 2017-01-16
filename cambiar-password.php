<!DOCTYPE html>
<?php
    include 'php/cambioDePassword.php';
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
        <title></title>        
    </head>
    <body>
        <nav>
            <div class="nav-wrapper orange">
                <div class="container">
                    <img class="brand-logo center" src="imagenes/logo-small.png" alt="Holdtech" onclick="window.location.href='index.php'"/>
                </div> 
            </div>
        </nav>
        <main>
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 m4 l4">
                            
                        </div>
                        <div class="col s12 m4 l4">
                            <?php mensaje();?>
                            <h5 class="grey-text center">Cambiar Password</h5>
                            <form class="col s12 m12 l12" action="" method="post">
                                <div class="input-field">
                                    <input type="text" id="nueva" name="nueva" required>
                                    <label class="active" for="nueva">Nueva Password</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="confirmar" name="confirmada" required>
                                    <label class="active" for="confirmar">Confirmar Password</label>
                                </div>
                                <div class="input-field center">
                                    <button class="btn waves-effect waves-light orange" type="submit" name="aceptarPassword">Aceptar</button>
                                    <button class="btn waves-effect waves-light orange" type="submit" onclick="window.location.href='main-menu.php'">Cancelar</button>
                                </div>                                
                            </form> 
                        </div>
                        <div class="col s12 m4 l4">
                            
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
      <script type="text/javascript" src="js/materialize.min.js"></script>        
    </body>
</html>
