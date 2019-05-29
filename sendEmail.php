<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

$mail = new PHPMailer;

if(isset($_GET['function'])) {
    if($_GET['function'] == 'contact') {
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.surya.org.ar";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "remis@surya.org.ar";
      $mail->Password = "remis123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "TLS";
      //Set TCP port to connect to
      $mail->Port = 587;

      $mail->From = "asociacionmutualara@gmail.com";
      $mail->FromName = "Contacto desde la web";

      $mail->addAddress("asociacionmutualara@gmail.com", "Recepient Name");

      $mail->isHTML(true);

      $mail->Subject = "Beneficios - Radiadores";
      $mail->Body = "Hola, un usuario ha enviado este mensaje para solicitar el beneficio de radiadores, sus datos a continuacion:
      <br><br>
      <b>Email:</b> ".$_GET['email']." <br>
      <b>Nombre y Apellido:</b> ".$_GET['name']." <br>
      <b>Telefono:</b> ".$_GET['phone']." <br>
      <b>Modelo del Auto:</b> ".$_GET['model']." <br>
      <b>Año:</b> ".$_GET['year']." <br>
      <b>Aire Acondicionado:</b> ".$_GET['air']." <br>
      ";
      $mail->AltBody = "";

      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          header('Content-Type: application/json');
          $response = [
            'message' => 'success'
          ];
          echo json_encode($response);
      }

    } elseif($_GET['function'] == 'turismo') {
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.surya.org.ar";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "remis@surya.org.ar";
      $mail->Password = "remis123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "TLS";
      //Set TCP port to connect to
      $mail->Port = 587;

      $mail->From = "asociacionmutualara@gmail.com";
      $mail->FromName = "Contacto desde la web";

      $mail->addAddress("asociacionmutualara@gmail.com", "Recepient Name");

      $mail->isHTML(true);

      $mail->Subject = "Beneficios - Turismo";
      $mail->Body = "Hola, un usuario ha enviado este mensaje para solicitar el beneficio de turismo, sus datos a continuacion:
      <br><br>
      <b>Email:</b> ".$_GET['emailt']." <br>
      <b>Nombre y Apellido:</b> ".$_GET['namet']." <br>
      <b>Telefono:</b> ".$_GET['phonet']." <br>
      <b>Paquete:</b> ".$_GET['package']." <br>
      <b>Fecha de ida:</b> ".$_GET['date_ini']." <br>
      <b>Fecha de vuelta:</b> ".$_GET['date_end']." <br>
      <b>Cantidad de adultos:</b> ".$_GET['adultq']." <br>
      <b>Cantidad de menores:</b> ".$_GET['childq']." <br>
      ";
      $mail->AltBody = "";

      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          header('Content-Type: application/json');
          $response = [
            'message' => 'success'
          ];
          echo json_encode($response);
      }
    } elseif($_GET['function'] == 'seguro') {
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.surya.org.ar";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "remis@surya.org.ar";
      $mail->Password = "remis123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "TLS";
      //Set TCP port to connect to
      $mail->Port = 587;

      $mail->From = "asociacionmutualara@gmail.com";
      $mail->FromName = "Contacto desde la web";

      $mail->addAddress("asociacionmutualara@gmail.com", "Recepient Name");

      $mail->isHTML(true);

      $mail->Subject = "Beneficios - Seguros";
      $mail->Body = "Hola, un usuario ha enviado este mensaje para solicitar el beneficio de seguro, sus datos a continuacion:
      <br><br>
      <b>Email:</b> ".$_GET['emails']." <br>
      <b>Nombre y Apellido:</b> ".$_GET['names']." <br>
      <b>Telefono:</b> ".$_GET['phones']." <br>
      <b>Modelo del Auto:</b> ".$_GET['models']." <br>
      <b>Año:</b> ".$_GET['years']." <br>
      <b>Con GNC:</b> ".$_GET['gnc']." <br>
      <b>Tipo de Cobertura:</b> ".$_GET['cover']." <br>
      <b>Uso del Auto:</b> ".$_GET['caruse']." <br>
      <b>Dudas sobre Cobertura:</b> ".$_GET['doubts']." <br>
      <b>Chasis:</b> ".$_GET['chasis']." <br>
      <b>Numero de Motor:</b> ".$_GET['nengine']." <br>
      <b>Datos del Asegurado:</b> ".$_GET['userd']." <br>
      ";
      $mail->AltBody = "";

      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          header('Content-Type: application/json');
          $response = [
            'message' => 'success'
          ];
          echo json_encode($response);
      }
    }elseif($_GET['function'] == 'baterias') {
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.surya.org.ar";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "remis@surya.org.ar";
      $mail->Password = "remis123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "TLS";
      //Set TCP port to connect to
      $mail->Port = 587;

      $mail->From = "asociacionmutualara@gmail.com";
      $mail->FromName = "Contacto desde la web";

      $mail->addAddress("asociacionmutualara@gmail.com", "Recepient Name");

      $mail->isHTML(true);

      $mail->Subject = "Beneficios - Baterias";
      $mail->Body = "Hola, un usuario ha enviado este mensaje para solicitar el beneficio de baterias, sus datos a continuacion:
      <br><br>
      <b>Email:</b> ".$_GET['emailb']." <br>
      <b>Nombre y Apellido:</b> ".$_GET['nameb']." <br>
      <b>Telefono:</b> ".$_GET['phoneb']." <br>
      <b>Tamaño de la bateria:</b> ".$_GET['batterysize']." <br>
      <b>Cantidad de Cuotas:</b> ".$_GET['quota']." <br>
      ";
      $mail->AltBody = "";

      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          header('Content-Type: application/json');
          $response = [
            'message' => 'success'
          ];
          echo json_encode($response);
      }
    }elseif($_GET['function'] == 'cubiertas') {
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.surya.org.ar";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "remis@surya.org.ar";
      $mail->Password = "remis123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "TLS";
      //Set TCP port to connect to
      $mail->Port = 587;

      $mail->From = "asociacionmutualara@gmail.com";
      $mail->FromName = "Contacto desde la web";

      $mail->addAddress("asociacionmutualara@gmail.com", "Recepient Name");

      $mail->isHTML(true);

      $mail->Subject = "Beneficios - Cubiertas";
      $mail->Body = "Hola, un usuario ha enviado este mensaje para solicitar el beneficio de cubiertas, sus datos a continuacion:
      <br><br>
      <b>Email:</b> ".$_GET['emailc']." <br>
      <b>Nombre y Apellido:</b> ".$_GET['namec']." <br>
      <b>Telefono:</b> ".$_GET['phonec']." <br>
      <b>Modelo de Auto:</b> ".$_GET['modelc']." <br>
      <b>Rodado de Cubierta:</b> ".$_GET['rolled']." <br>
      <b>Cantidad de Cuotas:</b> ".$_GET['quotac']." <br>
      ";
      $mail->AltBody = "";

      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          header('Content-Type: application/json');
          $response = [
            'message' => 'success'
          ];
          echo json_encode($response);
      }
    }
}
