<?php

//USER DATA SANITIZED
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

if (isset ($_POST['send'])) {
                if (!empty('name') && !empty('msg') && !empty('email')) {

                    //EMAIL WHERE ARE YOU GOING TO RECEIVE EVERYTHING
                    $to = "lukefeat123@gmail.com";
                    $header = "Enviado desde Oteroweb";
                    $subject = "Mensaje de Contacto";

                    //FULL MESSAGE
                    $message = "Nombre: " . $name . " " . $lastname . "\nMensaje: " . $msg . "\nEmail: " . $email . "\nTeléfono: " . $phone;

                    //EMAIL SENDING
                    $mail = mail($to,$subject,$message,$header);
                        if ($mail) {

                            echo "<script> alert('¡Mensaje enviado exitosamente!') </script>";

                            echo "<script> setTimeout(\"location.href='contacto.php'\",1000) </script>";

                            } else {

                                echo "<script> alert('¡Por algún motivo el mensaje no se ha podido enviar!') </script>";

                            echo "<script> setTimeout(\"location.href='contacto.php'\",1000) </script>";
                        }
                    }
                }