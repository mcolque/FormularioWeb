<?php
    //archivo de prueba
    session_start();
    echo "COOKIE:".$_COOKIE["token"]."<br>";
    echo "SESSION:".$_SESSION["token"]."<br>";
?>