<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "formularioweb";

try{
    $conn = new PDO("mysql:host=$host; dbname=$db",$user, $password);
}catch(PDOException $e){
    echo "No Conectado: ".$e->getMessage();
}
/*

*/
?>