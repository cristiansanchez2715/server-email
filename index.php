<?php 

require("mail.php");

function validate($name, $email, $subject, $message){
   return !empty($name) && !empty($email) && !empty($subject) &&
    !empty($message);
}

$status = "";

if(isset($_POST["form"])){
   if( validate(...$_POST)){
      $name = $_POST["name"];
      $subject = $_POST["subject"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $body = "$name <$email> te envia el siguiente mensaje: <br><br> . $message";
//Mandar correo
sendMail($subject);
      $status = "success";


   }else {
$status = "danger";
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="#" method="post">
      <div class="input-group">
         <label for="name">Nombre:</label>
         <input type="text" name="name" id="name"> </input>
      </div>
      
      <div class="input-group">
         <label for="email">Correo:</label>
         <input type="text" name="email" id="email"> </input>
      </div>
      
      <div class="input-group">
         <label for="subject">Asunto:</label>
         <input type="text" name="subject" id="subject"> </input>
      </div>


      <div>
         <label for="message">Nombre:</label>
         <textarea type="text" name="message" id="message"> </textarea>
      </div>

<div class="button-container">
   <button type="submit">Enviar</button>
</div>

<div class="info">
   <span>13 Saw Mill Circle, North Olmested.</span>
</div>
<div class="info">
<span>3203207924</span>
</div>


   </form>
</body>
</html>