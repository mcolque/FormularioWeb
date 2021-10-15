<?php
    session_start();

    header("Content-Type: application/json");
    include_once("../class/class-usuario.php");

    
    if(!isset($_SESSION["token"])){
        echo '{"mensaje": "Acceso No Autorizado"}';
        exit;
    }

    if(!isset($_COOKIE["token"])){
        echo '{"mensaje": "Acceso No Autorizado"}';
        exit;
    }

    if($_SESSION["token"] != $_COOKIE["token"]){
        echo '{"mensaje": "Acceso No Autorizado"}';
        exit;
    }
    

    $_POST = json_decode(file_get_contents('php://input'), true);
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            //Guardar
        break;
    }
?>