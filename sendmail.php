<?php
$myemail="softechtecnologia@gmail.com";
$name=$_POST['name'];
$senderemail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$emailmessage="Este é um contato realizado através do site (softechtecnologia.hol.es), por $name, com as seguintes informações:\n\nNome: $name\nE-mail: $senderemail\nAssunto: $subject\n\nMensagem: $message";
if($_POST['button-sender']){
	if(mail("$myemail,$senderemail","$subject - enviado pelo site","$emailmessage")){
		header("Location:enviado-com-sucesso.html");}
	else{
		header("Location:erro-ao-enviar.html");}
}
else{
	header("Location:erro-ao-enviar.html");}
?>