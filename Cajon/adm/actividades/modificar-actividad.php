<?php require_once('../../php/connection.php');
if(!isset($_SESSION))session_start();
    if(!$_SESSION[user_id]){
        $_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_ STRING']; header("Location: ../../login.php");
}

$queryselect = "SELECT * FROM `cajondb_actividades` where `codigo` = '$_GET[code]'";
$result = $connect->query($queryselect);
$actividad = $result->fetch_assoc();

if(isset($_POST[modificar]) && $_POST[modificar]=="modificar"){
    $querymod = "UPDATE `cajondb_actividades` set `titulo`='$_POST[titulo]', `bajada`='$_POST[bajada]', `descripcion`='$_POST[descripcion]', `categoria`='$_POST[categoria]' where `id_actividad`='$actividad[id_actividad]'";
    $connect->query($querymod);
    $ID = $connect->insert_id; 
    if($connect->query($querymod))header("Location: listado-actividades.php");   
}

$categorias = array('Aire libre', 'Aventura', 'Salud');

global $page;
$page = 'Administrador';

require_once('../../php/header-meta-adm.php');

?>
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
                            <li class="nav-option"><a href="../localidades/listado-localidades.php">Localidades</a></li>
                            <li class="nav-option nav-selected"><a href="listado-actividades.php">Actividades</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--mobile header-->
        <div id="mobile-hdr" class="container-fluid col-sm-12 col-xs-12 hidden-lg hidden-md">
            <div class="row">
                <figure class="logo-ipad col-sm-4 hidden-xs">
                    <a href="../../index.php" title="Take me Home">
                        <img src="../../img/logo-big-white.png" alt="Logo cajón del maipo white">
                    </a>
                </figure>
                <figure class="logo-iphone col-xs-4 hidden-sm">
                    <a href="../../index.php" title="Take me Home">
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
                    <li class="menu-option"><a href="../localidades/listado-localidades.php">Localidades</a></li>
                    <li class="menu-option  menu-sel"><a href="listado-actividades.php">Actividades</a></li>
                    <hr class="menu-divider">
                    <li class="menu-user">Bienvenido <strong><?php echo $_SESSION[user_name]; ?></strong></li>
                    <li class="menu-option"><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--main-->
    <section class="main2">
        <div class="main-wrap"></div>
        <div class="main2-container container-fluid full-xs">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 col-lg-offset-3 col-sm-offset-3 col-xs-offset-0 text-center">
                    <h1 class="main2-title">
                        Modificar actividad
                    </h1>
                </div>
            </div>
            <div class="row">
                <form action="" method="post" class="form modificar-form col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                   <!--titulo-->
                    <label for="titulo" class="col-lg-2 col-lg-offset-1 col-sm-2 col-sm-offset-1 col-xs-12 text-right">Título:</label>
                    <input type="text" id="titulotxt" name="titulo" value="<?php echo $actividad[titulo];?>" class="input-form col-lg-8 col-sm-8 col-xs-12" required>
                    <!--bajada-->
                    <label for="bajada" class="col-lg-2 col-lg-offset-1 col-sm-2 col-sm-offset-1 col-xs-12 text-right">Bajada:</label>
                    <textarea id="bajadatxt" name="bajada" class="input-form col-lg-8 col-sm-8 col-xs-12" required><?php echo utf8Encoder($actividad[bajada]);?></textarea>
                    <!--descripcion-->
                    <label for="descripcion" class="col-lg-2 col-lg-offset-1 col-sm-2 col-sm-offset-1 col-xs-12 text-right">Descripción:</label>
                    <textarea id="desctxt" name="descripcion" class="input-form col-lg-8 col-sm-8 col-xs-12" required><?php echo utf8Encoder($actividad[descripcion]);?></textarea>
                    <!--categoría-->
                    <label for="categoria" class="col-lg-2 col-lg-offset-1 col-sm-2 col-sm-offset-1 col-xs-12 text-right">Categoría:</label>
                    <select name="categoria" id="categsel" class="input-form col-lg-8 col-sm-8 col-xs-12" required>
                        <option value="null" disabled>-Seleccione categoria-</option>
                        <option value="<?php echo $actividad[categoria];?>" selected><?php echo $actividad[categoria];?></option>
                         <?php foreach($categorias as $categoria){?>
                             <?php if ($categoria!=$actividad[categoria]){?>
                                <option value="<?php echo $categoria;?>"><?php echo $categoria;?></option>
                              <?}?>
                          <?}?>
                      </select>
                    
                    <input type="submit" name="modificar" value="modificar" class="col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 form-btn cool-btn">
                </form>
            </div>
        </div>
    </section>
<?php include('../../php/footer-adm.php');?>