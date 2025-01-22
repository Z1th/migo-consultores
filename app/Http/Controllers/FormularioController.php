<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FormularioController extends Controller
{
    public function formulario(Request $request) {
        $name_contact = $request->name;
        $phone_contact = $request->phone;
        $mail_contact = $request->mail;
        $subject = $request->subject;
        $additional_comments = $request->comment;

        $company_email = 'conciliaciones@migoconsultoresjuridicos.com';

        $bodyMail = '
        <!DOCTYPE html>
        <html lang="es">            
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mensaje Enviado con éxito</title>
        </head>
        <body> 
            <h2>' . $name_contact . ' requiere agendar una cita.  </h2>
            <h2>Solicitud hecha en Formulario de Sitio Web</h2>
            <h4>Información del solicitante:</h4>
            <p>
                <b>Nombre: </b>' . $name_contact . ' <br>
                <b>Telefono: </b>' . $phone_contact . '<br>
                <b>Motivo: </b>' . $subject . '<br>
                <b>Correo: </b>' . $mail_contact . '<br>
                <b>Mensaje: </b><br>' . $additional_comments . '<br>';

        $bodyMail .= '</p>
                        <br>
                        <h5>Éxito!</h5>
                    </body>    
                    </html>         
                    ';

        $mail = new PHPMailer(true);
        try {
            // SERVER SETTINGS
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host       = 'bookingtech.mx';                   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'notificaciones@bookingtech.mx';                     //SMTP username
            $mail->Password   = 'Fe!fg8949';                               //SMTP password
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->SMTPSecure = "tls";
            $mail->CharSet = 'UTF-8';
            // RECIPIENTES
            $mail->setFrom('notificaciones@bookingtech.com', 'Notificaciones Migo');//Nombre de la agencia
            $mail->addAddress($company_email);  //Set who the message is to be sent to 
            // $mail->addReplyTo($email_contact);
            // MESSAGE
            $mail->Subject = 'Solicitud de Cita';  //Set the subject line - Nombre de la agencia
            $mail->AltBody = 'Desea Agendar una Cita';
            $mail->isHTML(true);
            $mail->Body = $bodyMail;
            $mail->send();
        } catch (Exception $e) {
            echo $e->errorMessage();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return view('gracias');
    }
}
