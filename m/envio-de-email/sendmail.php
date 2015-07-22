<?php
$myemail="softechtecnologia@gmail.com";
$name=$_POST['name'];
$senderemail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$emailmessage="Este é um contato realizado através da versão \"Mobile\" do site \"http://www.softechtecnologia.hol.es/m/\", por $name, com as seguintes informações:\n\nNome: $name\nE-mail: $senderemail\nAssunto: $subject\n\nMensagem: $message";
if($_POST['buttonSender']||mail("$myemail,$senderemail","$subject - Enviado do site da Softech","$emailmessage")){
	header("Location:/m/envio-de-email/enviado-com-sucesso.html");
}
else{
	header("Location:/m/envio-de-email/erro-ao-enviar.html");
}
?>