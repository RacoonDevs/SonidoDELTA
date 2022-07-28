<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentarios = $_POST['comentarios'];


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $from = 'admin@pvj.mx';
    $to = "contacto@sonidodelta.pvj.mx";
    $subject = "Contacto Clientes WEB";

    $message = "NOMBRE : " . $nombre  . ",\r\n";
    $message .= "CORREO : " . $correo . " \r\n";
    $message .= "TELEFONO : " . $telefono . " \r\n";
    $message .= "IP : " . $ip . " \r\n";
    $message .= "COMENTARIOS : " . $comentarios . " \r\n";

    $headers = "From:" . $from . " \r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $headers .= "Mime-Version: 1.0 \r\n";
    $headers .= "Content-Type: text/plain";
    mail($to,$subject, utf8_decode($message), $headers);
    echo "The email message was sent.";
    
    header("Location:https://sonidodelta.pvj.mx");
?>