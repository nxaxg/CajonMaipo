<?php require_once('../php/connection.php');

$queryselect = "select * from `cajondb_localidades` where `codigo`='$_GET[code]';";
$result = $connect->query($queryselect);
$localidad = $result->fetch_assoc();

global $page;
$page = $localidad[titulo];

require_once('../php/header-meta-int.php');

?>
        <header class="normal-header">
            <!--desktop header-->
            <div id="desktop-hdr" class="container-fluid col-lg-12 col-md-12 hidden-sm hidden-xs">
                <div class="row">
                    <figure class="logo col-lg-4 col-md-4">
                        <a href="../index.php" title="Home | Cajón del Maipo">
                            <img src="../img/logo-big-white.png" alt="Logo cajón del maipo blanco">
                        </a>
                    </figure>
                    <div class="nav-second col-md-6 col-md-offset-2 col-sm-7 col-sm-offset-1">
                        <nav>
                            <div class="login col-md-2 col-md-offset-7 col-sm-4 col-sm-offset-3">
                                <a href="../login.php">
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
                                <li class="nav-option"><a href="../index.php">Home</a></li>
                                <li class="nav-option"><a href="../informacion.php">Información</a></li>
                                <li class="nav-option nav-selected"><a href="../localidades.php">Localidades</a></li>
                                <li class="nav-option"><a href="../actividades.php">Actividades</a></li>
                                <li class="nav-option"><a href="../contacto.php">Contacto</a></li>
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
                            <img src="../img/logo-big-white.png" alt="Logo cajón del maipo white">
                        </a>
                    </figure>
                    <figure class="logo-iphone col-xs-4 hidden-sm">
                        <a href="#" title="Take me Home">
                            <img src="../img/logo-sticky-white.png" alt="Logo cajón del maipo white">
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
                        <li class="menu-option"><a href="../index.php">Home</a></li>
                        <li class="menu-option"><a href="../informacion.php">Información</a></li>
                        <li class="menu-option menu-sel"><a href="../localidades.php">Localidades</a></li>
                        <li class="menu-option"><a href="../actividades.php">Actividades</a></li>
                        <li class="menu-option"><a href="../contacto.php">Contacto</a></li>
                        <hr class="menu-divider">
                        <li class="menu-option"><a href="../login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!--main-->
        <section class="main main-localidad">
            <div class="container-fluid full-xs">
                <div class="row">
                    <!--page title-->
                    <div class="col-lg-8 col-sm-10 col-xs-12 col-lg-offset-2 col-sm-offset-1 col-xs-offset-0 text-center">
                        <h1 class="main-title">
                            <?php echo $localidad[titulo];?>
                        </h1>
                        <p class="main-bajada">
                            <?php echo utf8Encoder($localidad[descripcion]);?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4 page-down text-center">
                        <a href="#content" class="fa fa-angle-down" id="page-down-icon" title="Going down"></a>
                    </div>
                </div>
            </div>
        </section>

        <!--content-->
        <section id="content" class="content content-localidades">
            <div class="container-fluid full-xs">
                <div class="row">
                    <h2 class="content-title text-center col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">Galería de imágenes</h2>
                </div>
                <div class="row">
                    <div class="img-container col-lg-12 col-lg-offset-0 full-xs">
                        <!--php callback-->
                        <?php for($x=0; $x<4; $x++){?>
                            <!--localidad-->
                            <figure class="col-lg-3 col-sm-3 col-xs-6 full-xs">
                                <!--img localidad-->
                                <img src="../img/min-<?php echo $localidad[codigo];?>-0<?php echo $x;?>.jpg" class="img-responsive" alt="Localidad <?php echo $localidad[titulo];?>">
                                <!--link img-->
                                <a href="#" title="Localidad <?php echo $localidad[titulo];?>" data-toggle="modal" data-target="#imgModal-<?php echo $x;?>">
                                    <figcaption class="text-center">
                                        <div class="row">
                                            <!--titulo localidad-->
                                            <h3 class="col-lg-12 img-title">
                                                <span class="fa fa-eye"></span>
                                            </h3>
                                        </div>
                                    </figcaption>
                                </a>
                            </figure>
                            <!--img-modal-->
                            <div id="imgModal-<?php echo $x;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" title="<?php echo $localidad[titulo]?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="../img/img-<?php echo $localidad[codigo];?>-0<?php echo $x;?>.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <?php }?>

                    </div>
                </div>
            </div>
        </section>

        <section class="content mapa-container">
            <div class="container-fluid full-xs">
                <div class="row">
                    <h2 class="content-title text-center col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">Visitanos</h2>
                    <div id="mapa-localidad" class="map-box col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <script>
                            function initMap() {
                                var mapDiv = document.getElementById('mapa-localidad');
                                var coord = new google.maps.LatLng(<?php echo $localidad[coordenadax];?>, <?php echo $localidad[coordenaday];?>);
                                var marker = new google.maps.Marker({
                                    position: coord
                                , });
                                var map = new google.maps.Map(mapDiv, {
                                    center: coord
                                    , zoom: 10
                                    , scrollwheel: false
                                });
                                marker.setMap(map);
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
                        <!--api key -->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpNu7ZGW1ukwAf6mLFNnFHPl-6Jqz-fTw" type="text/javascript" hidden></script>
                    </div>
                </div>
            </div>
        </section>

<?php include('../php/footer-int.php');?>