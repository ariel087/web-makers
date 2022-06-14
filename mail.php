<?php
require('./PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='ariellabuson08@gmail.com';
$mail->Password='zynywmrcmhnffyqz';

$mail->setFrom('ariellabuson08@gmail.com','ariel');
$mail->addAddress('202011333@btech.ph.education');
$mail->addReplyTo('ariellabuson08@gmail.com');

$mail->isHTML(true);
$mail->Subject='PHP Mailer Subject';
$mail->Body='hi costumer';
if(!$mail->send()){
    echo"Messege could not be sent";
}
else{
    echo"Messege has been sent";
     
}
?>