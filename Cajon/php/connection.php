<?php

$host="localhost";
$user="nicolas_root";
$pass="cajondelmaipodb";
$database="nicolas_cajondb";

$connection = new mysqli($host, $user, $pass, $database);


if ($connection->connect_error) {
    die('Error de Conexión (' . $connection->connect_errno . ') '. $connection->connect_error);
}else{
    echo 'Éxito... ' . $connection->host_info . "\n";
}

//library

    function formatFecha($fecha){
        $meses = array(Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre);
        list($fecha,$hora) = explode(" ", $fecha);
        list($ano,$mes,$dia) = explode("-", $fecha);
        return "$dia.".$meses[$mes-1].".$ano";
    }


?>