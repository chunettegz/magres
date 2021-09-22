<?php
include("index.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$Email = $_POST['Email'];

if (!empty($_POST['Nombre']) && is_string($_POST['Nombre'])) {
    $Nombre = $_POST['Nombre'];
}

if (!empty($_POST['Apellido']) && is_string($_POST['Apellido'])) {
    $Apellido = $_POST['Apellido'];
}

if (!empty($_POST['Telefono']) && is_numeric($_POST['Telefono'])) {
    $Telefono = $_POST['Telefono'];
}

if (!empty($Email) && is_string($Email) ){
$Email = filter_var($Email, FILTER_VALIDATE_EMAIL);
}

//Conexión base de datos
$connection = new mysqli('localhost', 'root', '', 'magres_form');

if ($connection->errno !== 0) {
    die('Hubo un error en la conexión');
}
$Nombre        = trim($_POST['Nombre']);
$Apellido      = trim($_POST['Apellido']);
$Telfono       = intval($_POST['Telefono']);
$Email         = trim($_POST['Email']);
$mensaje       = trim($_POST['mensaje']);
$Fecha_Ingreso = date("d/m/y");


if (isset($_POST['Submit'])) {
    if (! empty($_POST['Nombre']) &&
        ! empty($_POST['Apellido']) &&
        ! empty($_POST['Telefono']) &&
        ! empty($_POST['Email']) &&
        ! empty($_POST['mensaje'])) { 
                $connection->query(
                    "INSERT INTO `magres_datos_form`( `NOMBRE`, `APELLIDO`, `EMAIL`, `TELEFONO`, `FECHA_INGRESO`, `MENSAJE`)
                    VALUES('$Nombre','$Apellido','$Email','$Telefono','$Fecha_Ingreso','$mensaje');"
                );
        }
    }