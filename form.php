<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<pre>';
var_dump( $_POST );

if (!empty($_POST['Nombre']) && is_string($_POST['Nombre'])) {
    $Nombre = $_POST['Nombre'];
}

if (!empty($_POST['Apellido']) && is_string($_POST['Apellido'])) {
        $Apellido = $_POST['Apellido'];
}

if ( !empty( $_POST['Telefono'] ) && is_numeric($_POST['Telefono'])){
    $Telefono = $_POST['Telefono'];
}

if ( ! empty( $_POST['Email'] ) && filter_var( $_POST['Email'], FILTER_VALIDATE_EMAIL ) ) {
    echo("$email Email válido <br>" );
} else {
  echo("$email Email inválido <br>");
};



if( !empty($_POST) ){
        echo 'FORMULARIO RECIBIDO';
}
    