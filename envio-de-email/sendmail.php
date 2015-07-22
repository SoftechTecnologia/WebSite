<?php
$myemail="softechtecnologia@gmail.com";
$name=$_POST['name'];
$senderemail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$emailmessage="Este é um contato realizado através da versão \"Desktop\" do site \"http://www.softechtecnologia.hol.es/\", por $name, com as seguintes informações:\n\nNome: $name\nE-mail: $senderemail\nAssunto: $subject\n\nMensagem: $message";
if($_POST['buttonSender']||mail("$myemail,$senderemail","$subject - Enviado do site da Softech","$emailmessage")){
	header("Location:/envio-de-email/enviado-com-sucesso.html");
}
else{
	header("Location:/envio-de-email/erro-ao-enviar.html");
}
?>