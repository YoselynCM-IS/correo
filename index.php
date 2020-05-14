<?php

/*
echo $imagen;
echo "<br>";
echo $ea1_regGP;
echo "<br>";
echo $ea1_regCA;
echo "<br>";
echo $ea1_regND;
echo "<br>";
echo $ea1_regCD;
echo "<br>";
echo $ea1_regNA;
echo "<br>";
//die("fin");
**/
//$imagen = preg_replace('#^data:image/[^;]+;base64,#', '', $imagen); 
//librerias
require 'PHPMailer/PHPMailerAutoload.php';
require_once 'PHPMailer/class.phpmailer.php';
 


$mensaje = "Materia: English Aware\r\nNombre del alumno: ".$ea1_regNA."\r\nGrupo: ".$ea1_regGP."\r\nEnviado al Docente: ".$ea1_regND; 
$para = "jabocho@gmail.com";
//$para2 = $ea1_regCA;
$asunto = 'English Aware: Activity';				
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
//Agregar la imagen

 
//Configuracion servidor mail

$mail->From = "ebook@majesticeducacion.com.mx"; //remitente
$mail->FromName = "Majestic Education";//nombre remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; //seguridad
$mail->Host = "mail.majesticeducacion.com.mx"; // servidor smtp
$mail->Port = 465; //puerto
$mail->Username ='ebook@majesticeducacion.com.mx'; //nombre usuario
$mail->Password = 'Q[ioa2]lHg^h'; //contraseña
//$mail->SMTPDebug = 4;

/***
$mail->From = "test@lgruiz.com"; //remitente
$mail->FromName = "Majestic Education";//nombre remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; //seguridad
$mail->Host = "servidor1313.il.controladordns.com"; // servidor smtp
$mail->Port = 465; //puerto
$mail->Username ='test@lgruiz.com'; //nombre usuario
$mail->Password = 'u1Y2dp0[WIP~'; //contraseña
**/

 
//Agregar destinatario
$mail->AddAddress($para);
//$mail->AddAddress($para2);
$mail->Subject = $asunto;
$mail->Body = $mensaje;


 
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
		   window.history.back();
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
?>