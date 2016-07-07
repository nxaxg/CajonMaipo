<?php require_once('../../php/connection.php');
if(!isset($_SESSION))session_start();
    if(!$_SESSION[user_id]){
        $_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_ STRING']; header("Location: ../../login.php");
}

$queryselect = "select * from `localidades` where 1 order by `id_localidad` asc";
$result = $connect->query($queryselect);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Listado de localidades | Cajón del Maipo CM</title>
    <!--btsrp-->
    <script src="../../js/jquery-1.11.3.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!--site-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/mobile-style.css">
    <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,200,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,900' rel='stylesheet' type='text/css'>
    <!--font awesome-->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/logo-sticky-black.png">
</head>

<body>
    <header class="normal-header">
        <!--desktop header-->
        <div id="desktop-hdr" class="container-fluid col-lg-12 col-md-12 hidden-sm hidden-xs">
            <div class="row">
                <figure class="logo col-lg-4 col-md-4">
                    <a href="../../index.php" title="Home | Cajón del Maipo">
                        <img src="../../img/logo-big-white.png" alt="Logo cajón del maipo blanco">
                    </a>
                </figure>
                <div class="nav-second col-lg-6 col-lg-offset-2 col-md-7 col-md-offset-1">
                    <nav>
                        <div class="welcome col-lg-6 col-md-6 text-right">
                            Bienvenido <strong><?php echo $_SESSION[user_name]?></strong> <span class="fa fa-user"></span>
                        </div>
                        <div class="logout login col-lg-3 col-md-3 text-center">
                            <a href="../../logout.php">Logout <span class="fa fa-sign-out"></span></a>
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
                            <li class="nav-option"><a href="../home.php">Home</a></li>
                            <li class="nav-option"><a href="../usuarios/listado-usuarios.php">Usuarios</a></li>
                            <li class="nav-option nav-selected"><a href="listado-localidades.php">Localidades</a></li>
                            <li class="nav-option"><a href="../actividades/listado-actividades.php">Actividades</a></li>
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
                        <img src="../../img/logo-big-white.png" alt="Logo cajón del maipo white">
                    </a>
                </figure>
                <figure class="logo-iphone col-xs-4 hidden-sm">
                    <a href="#" title="Take me Home">
                        <img src="../../img/logo-sticky-white.png" alt="Logo cajón del maipo white">
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
                    <li class="menu-option"><a href="../home.php">Home</a></li>
                    <li class="menu-option"><a href="../usuarios/listado-usuarios.php">Usuarios</a></li>
                    <li class="menu-option menu-sel"><a href="listado-localidades.php">Localidades</a></li>
                    <li class="menu-option"><a href="../actividades/listado-actividades.php">Actividades</a></li>
                    <hr class="menu-divider">
                    <li class="menu-user">Bienvenido <strong><?php echo $_SESSION[user_name]; ?></strong></li>
                    <li class="menu-option"><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--main-->
    <section class="main2">
        <div class="container-fluid full-xs">
            <div class="row">
                <h1 class="main2-title col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
                    Listado de localidades
                </h1>
            </div>
            <div class="row">
                <table class="table-adm col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                    <thead>
                        <tr>
                            <th class="text-center">Título</th>
                            <th class="text-center">Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($localidad = $result->fetch_assoc()){?>
                        <tr class="text-center">
                            <td><?php echo $localidad[titulo];?></td>
                            <td><a href="modificar-localidad.php?code=<?php echo $localidad[codigo];?>" title="Modificar"><span class="fa fa-edit"></span></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php include('../../php/footer-adm.php')?>

        <!--scripts-->
        <script src="../../js/menus.js"></script>
        <script src="../../js/sticky.js"></script>
        <script src="../../js/smoothy.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
</body>

</html>