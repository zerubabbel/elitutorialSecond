<?php
$to = "achiappetta90@gmail.com";
$subject = "Test mail from XAMPP";
$message = "Hello! This is a simple email message.";
$from = "steve@apple.com";
$headers = "From:" . $from;
if(mail($to,$subject,$message,$headers)) {
echo "Mail Sent.";
} else {
echo "Oops, the mail was ** NOT ** sent";
}
?>