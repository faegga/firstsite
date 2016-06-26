<?php 
if($_POST) {
	

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.mail.ru";

$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = "larcibashev@mail.ru";
$mail->Password = "19810217qW";

$mail->From = "larcibashev@mail.ru";
$mail->FromName = "Test User";
$mail->AddAddress("larcibashev@mail.ru");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Message from larcibashev.ru and server via SMTP Authentication";
$mail->Body = "test";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";





if(!$mail->Send())
{
	
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";


}
?>