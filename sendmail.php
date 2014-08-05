<?php
$myemail="softechtecnologia@gmail.com";
$name=$_POST['name'];
$senderemail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$emailmessage="Este é um contato realizado através do site (softechtecnologia.hol.es), por $name, com as seguintes informações:\n\nNome: $name\nE-mail: $senderemail\nAssunto: $subject\n\nMensagem: $message";
if($_POST['button-sender']){
	mail("$myemail,$senderemail","$subject - enviado pelo site","$emailmessage");
}
if(mail("$myemail,$senderemail","$subject - enviado pelo site","$emailmessage")){
	header("Location:mailsuccess.html");}
else{
	header("Location:mailfailure.html");}
?>