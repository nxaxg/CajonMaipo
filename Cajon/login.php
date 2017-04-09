<?php require_once('php/connection.php');
global $page;
$page = 'Iniciar sesión';

if(!isset($_SESSION))session_start();

if((isset($_POST[user]) && $_POST[user]<>"") && (isset($_POST[pass]) && $_POST[pass]<>"") ){
    $query="SELECT * FROM `cajondb_usuarios` where username ='$_POST[user]' AND password='$_POST[pass]'";
    $resultado=$connect->query($query);
    
    if($total = $resultado->num_rows){
         $usuario = $resultado->fetch_assoc();
            
         $_SESSION[user_id]=$usuario[id_usuario];
         $_SESSION[user_name]=$usuario[nombre];
         $_SESSION[user_mail]=$usuario[email];
         $volver=($_SESSION[volver])?$_SESSION[volver]:"adm/home.php";
         header("Location: ".$volver);
    } else {
        $error="Usuario/Clave no registrados";
    }
}
require_once('php/header-meta.php');
?>
    <header class="normal-header">
        <!--desktop header-->
        <div id="desktop-hdr" class="container-fluid col-lg-12 col-md-12 hidden-sm hidden-xs">
            <div class="row">
                <figure class="logo col-lg-4 col-md-4">
                    <a href="index.php" title="Home | Cajón del Maipo">
                        <img src="img/logo-big-white.png" alt="Logo cajón del maipo blanco">
                    </a>
                </figure>
                <div class="nav-second col-md-6 col-md-offset-2 col-sm-7 col-sm-offset-1">
                    <nav>
                        <div class="login login-sel col-md-2 col-md-offset-7 col-sm-4 col-sm-offset-3">
                            <a href="login.php">
                                Login
                                <span class="fa fa-user"></span>
                            </a>
                        </div>
                        <div class="lang col-md-2 col-sm-4">
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
                            <li class="nav-option"><a href="contacto.php">Contacto</a></li>
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
                    <li class="menu-option"><a href="contacto.php">Contacto</a></li>
                    <hr class="menu-divider">
                    <li class="menu-option menu-sel"><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--main-->
    <section class="main2">
        <div class="main2-container container-fluid full-xs">
            <div class="row">
               <!--page title-->
                <div class="col-lg-6 col-sm-6 col-xs-12 col-lg-offset-3 col-sm-offset-3 col-xs-offset-0 text-center">
                    <h1 class="main2-title">Iniciar sesión</h1>
                </div>
            </div>
            <div class="row">
                <form action="" method="post" class="form login-form col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                    <input type="text" id="usertxt" name="user" class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 input-form" required placeholder="Usuario">
                    <input type="password" id="passtxt" name="pass" class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 input-form" required placeholder="Contraseña">
                    <input type="submit" name="ingresar" value="ingresar" class="col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 form-btn">
                </form>
            </div>
            
            <div class="row">
                <?php if($error){?>
                    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 mensaje-error text-center">
                        <?php echo $error;?> <span class="fa fa-thumbs-o-down"></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
<?php include('php/footer.php');?>