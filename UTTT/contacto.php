<?php

try{
     $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    $conexion = new PDO('mysql:host=localhost;dbname=UTTT','root','1234',$opciones);

}


catch (PDOException $ex) 
{
    echo $ex->getMessage();
    echo 'no se conecto a la bd';
    exit;
}

$nom = $_POST['nombre'];
$dir = $_POST['direccion'];
$tel = $_POST['telefono'];
$correo = $_POST['email'];

$sentencia = $conexion->prepare("INSERT INTO contacto (nombre,direccion,telefono,email ) VALUES (:nom,:dir,:tel,:em)");
$sentencia->bindParam(':nom', $nom);
$sentencia->bindParam(':dir', $dir);
$sentencia->bindParam(':tel', $tel);
$sentencia->bindParam(':em', $correo);
$sentencia->execute();

$conexion = null;
echo 'Usuario Registrado';
header("Location:index.html"); 
?>