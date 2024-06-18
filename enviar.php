
					<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/* Clase para tratar con excepciones y errores */
/*require 'C:\PHPMailer\src\Exception.php';*/
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(TRUE);


try {
    // Crear una instancia de la clase PHPMailer
    $mail = new PHPMailer();

    // Emitir un registro detallado de infooooo
    /* $mail->SMTPDebug = SMTP::DEBUG_SERVER; */

    // Autentificación vía SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // Configuración del servidor SMTP
	$mail->Host = "segundodaw.com";
	$mail->Port = 465;
    $mail->Username = "alumno@segundodaw.com";
    $mail->Password = "SegundoDAW";
 
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

	//para el idioma
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';

    // Destinatario y remitente
    $mail->setFrom('alumno@segundodaw.com', 'Restapuesta al portfolio');
    $mail->addAddress('sheilamiggad@gmail.com'); // me lo envio a mi misma desd eel correo de alumno

    // Contenido del correo
    $mail->isHTML(true);
    
    $mail->Subject = "Contacto de " . $_POST['nombre'];
    $mail->Body = "Desde el correo:<br> ".$_POST['email']. " <br> Te han enviado el mensaje:<br> " .$_POST['observaciones'];

    // Envío del correo
    $mail->send();
	?>
	<script>
        // Redireccionar utilizando JavaScript si la redirección automática falla
        window.location.href = "/PortfolioSheila/?mensaje=ok#contacto";
    </script>	
	<?php
	exit;
    echo "Mensaje enviado correctamente. De " .$_POST['email']. " para Sheila.<br>" ;

} catch (Exception $e) {
	?>
	<script>
        // Redireccionar utilizando JavaScript si la redirección automática falla
        window.location.href = "/PortfolioSheila/?mensaje=error#contacto";
    </script>	
	<?php
	exit;
    echo "El mensaje no pudo ser enviado. Error del correo: " . $mail->ErrorInfo;
}





?>
			