<?php
    error_reporting (E_ALL ^ E_NOTICE); 
    //incluir la conexion
    include('./conexion/conexion.php');
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $domicilio = $_POST["domicilio"];
    
    try{
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();
        $conn->exec("INSERT INTO empleado(Nombre, Apellido, DNI, Domicilio) 
        VALUES ('$nombre', '$apellido', '$dni', '$domicilio')");
        $conn->commit();
    }catch(Exception $e){
        $conn->rollback();
        echo "Error :: " .$e->getMessage();
    }

?>