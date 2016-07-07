<?php require_once('php/connection.php');

$ok = false;

if(isset($_POST[enviar]) && $_POST[enviar]="enviar"){
        
    $user_contact = "nxayancanxg@gmail.com";
    $asunto_contact = "Contacto desde Cajón del Maipo";
    $mensaje_contact = "El usuario ". $_POST['mail'] . " (" .$_POST['name'] . ") desea contactarse:
    Asunto:" . $_POST['asunto']."
    Mensaje:" . $_POST['mensaje']."
    --Fin del mensaje--
    ";
    $cabecera_contact = "From: <mail@mail.com>\n\r";
    
    if(mail($user_contact, $asunto_contact, $mensaje_contact, $cabecera_contact)){
        $ok = true;
    }else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Contacto | Cajón del Maipo</title>
    <!--btsrp-->
    <script src="js/jquery-1.11.3.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--site-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-style.css">
    <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,200,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,900' rel='stylesheet' type='text/css'>
    <!--font awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-sticky-black.png">
</head>

<body>
    <header class="normal-header">
        <!--desktop header-->
        <div id="desktop-hdr" class="container-fluid col-lg-12 col-md-12 hidden-sm hidden-xs">
            <div class="row">
                <figure class="logo col-lg-4 col-md-4">
                    <a href="index.php" title="Home | Cajón del Maipo">
                        <img src="img/logo-big-white.png" alt="Logo cajón del maipo blanco">
                    </a>
                </figure>
                <div class="nav-second col-lg-5 col-lg-offset-3 col-md-5 col-md-offset-3">
                    <nav>
                        <div class="search col-lg-6 col-md-5">
                            <input type="text" class="search-input col-lg-10 col-md-10" placeholder="Buscar...">
                            <span class="col-lg-2 col-md-2 fa fa-search"></span>
                        </div>
                        <div class="login col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-2">
                            <a href="login.php">
                                Login
                                <span class="fa fa-user"></span>
                            </a>
                        </div>
                        <div class="lang col-lg-2 col-md-2">
                            Idioma
                            <span class="lang-icon fa fa-globe"></span>
                            <!--hidden menu-->
                            <ul class="lang-menu list-unstyled show-lg show-md">
                                <li class="lang-option lang-sel"><a href="#">Español</a></li>
                                <li class="lang-option"><a href="#">Inglés</a></li>
                                <li class="lang-option"><a href="#">Alemán</a></li>
                                <li class="lang-option"><a href="#">Portugués</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="nav-primary col-lg-6 col-lg-offset-2 col-md-8 col-md-offset-0">
                    <nav>
                        <ul class="list-inline text-right">
                            <li class="nav-option"><a href="index.php">Home</a></li>
                            <li class="nav-option"><a href="informacion.php">Información</a></li>
                            <li class="nav-option"><a href="localidades.php">Localidades</a></li>
                            <li class="nav-option"><a href="actividades.php">Actividades</a></li>
                            <li class="nav-option nav-selected"><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--mobile header-->
        <div id="mobile-hdr" class="container-fluid col-sm-12 col-xs-12 hidden-lg hidden-md">
            <div class="row">
                <figure class="logo-ipad col-sm-4 hidden-xs">
                    <a href="#" title="Take me Home">
                        <img src="img/logo-big-white.png" alt="Logo cajón del maipo white">
                    </a>
                </figure>
                <figure class="logo-iphone col-xs-4 hidden-sm">
                    <a href="#" title="Take me Home">
                        <img src="img/logo-sticky-white.png" alt="Logo cajón del maipo white">
                    </a>
                </figure>
                <!--lang-->
                <div class="mob-lang-btn lang col-sm-1 col-xs-2 col-sm-offset-6 col-xs-offset-4 text-center">
                    <span class="fa fa-globe lang-icon" title="Idioma"></span>
                </div>
                <ul class="lang-menu-mob list-unstyled show-xs show-sm">
                    <li class="lang-option lang-sel"><a href="#">Español</a></li>
                    <li class="lang-option"><a href="#">Inglés</a></li>
                    <li class="lang-option"><a href="#">Alemán</a></li>
                    <li class="lang-option"><a href="#">Portugués</a></li>
                </ul>
                <!--menu-->
                <div class="mob-menu-btn col-sm-1 col-xs-2 text-center">
                    <span class="fa fa-navicon menu-icon" title="Menú"></span>
                </div>
                <ul class="burguer-menu-mob list-unstyled show-xs show-sm">
                    <li class="menu-option"><a href="index.php">Home</a></li>
                    <li class="menu-option"><a href="informacion.php">Información</a></li>
                    <li class="menu-option"><a href="localidades.php">Localidades</a></li>
                    <li class="menu-option"><a href="actividades.php">Actividades</a></li>
                    <li class="menu-option menu-sel"><a href="contacto.php">Contacto</a></li>
                    <hr class="menu-divider">
                    <li class="menu-option"><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--main-->
    <section class="main2">
        <div class="container-fluid full-xs">
            <div class="row">
               <!--page title-->
                <h1 class="main2-title col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
                    Contacto
                </h1>
            </div>
            <div class="row">
                <form action="" method="post" class="form contact-form col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <input type="text" id="nametxt" name="nombre" class="col-lg-6 col-sm-6 col-xs-12 input-form-50" required placeholder="Nombre">
                    <input type="email" id="mailtxt" name="mail" class="col-lg-6 col-sm-6 col-xs-12 input-form-50" required placeholder="E-mail">
                    <input type="text" id="asuntotxt" name="asunto" class="col-lg-12 col-sm-12 col-xs-12 input-form" placeholder="Asunto">
                    <textarea name="mensaje" id="mensajetxt" rows="5" class="col-lg-12 col-sm-12 col-xs-12 input-form" placeholder="Mensaje" required></textarea>
                    <input type="submit" name="enviar" value="enviar" class="col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 form-btn">
                </form>
            </div>
            
            <div class="row">
                <?php if($error){?>
                    <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 mensaje-error text-center">
                        Error al intentar enviar su mensaje <span class="fa fa-thumbs-o-down"></span>
                    </div>
                <?php }else if($ok){ ?>
                    <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 mensaje-ok text-center">
                        Su mensaje ha sido enviado <span class="fa fa-thumbs-o-up"></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>

        <!--scripts-->
        <script src="js/sticky.js"></script>
        <script src="js/menus.js"></script>
        <script src="js/smoothy.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>