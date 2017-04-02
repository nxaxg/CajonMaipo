<?php

$host="localhost";
$user="nicolas_user";
$pass="white-pony";
$database="nicolas_general";

$connect = new mysqli($host, $user, $pass, $database);

// if ($connection->connect_error) {
//     die('Error de Conexión (' . $connection->connect_errno . ') '. $connection->connect_error);
// }else{
//     echo 'Éxito... ' . $connection->host_info . "\n";
// }

//library

    //utf8Encoder function
    //http://stackoverflow.com/questions/4095899/utf8-encoding-problem-with-good-examples
    function utf8Encoder($text){
        $enc = mb_detect_encoding($text, "UTF-8,ISO-8859-1");
        return iconv($enc, "UTF-8", $text);
    }

?>