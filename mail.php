<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");
function sendMail($subject, $body, $email, $name, $html = false){
 //configuracion inicial servidor
 
    $phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer ->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$phpmailer->Port = 2525;
$phpmailer->Username = 'cristiansanchez2715';
$phpmailer->Password = 'rthqgrogozcmqxdk';

//usuarios
$mail->setFrom('cristiansanchez2715@gmail.com', 'Mono');
$mail->addAddress($email, $name);     //Add 

//contenido

$phpmailer->isHTML($html);                                
  //Set email format to HTML
$phpmailer->Subject = $subject;
$phpmailer->Body    = $body;
$phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

$phpmailer -> send();

}


?>