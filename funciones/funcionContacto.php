<?php

//DATOS INGRESADOS SANITIZADOS
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

if (isset ($_POST['send'])) {
    if (!empty('name') && !empty('lastname') && !empty('msg') && !empty('email') && !empty('phone')) {

        //EMAIL DONDE VA A IR EL MENSAJE
        $to = ""; //EMAIL
        $header = "Enviado desde Black Hole Studio";
        $subject = "Mensaje de Contacto";

        //MENSAJE
        $message = "Nombre: " . $name . " " . $lastname . "\nMensaje: " . $msg . "\nEmail: " . $email . "\nTeléfono: " . $phone;

        //EMAIL
        $mail = mail($to,$subject,$message,$header);
            if ($mail) {
                echo "<script> alert('¡Mensaje enviado exitosamente!') </script>";
                } else {
                    echo "<script> alert('¡Por algún motivo el mensaje no se ha podido enviar!') </script>";
                    }
                }
            }