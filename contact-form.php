<?php
$name = $_POST['yourName'];
$email = $_POST['yourEmail'];
$subject = $_POST['yourSubject'];
$message = $_POST['yourMessage'];

$email_from = 'github@';

$email_subject = "New form submission from college site";

$email_body = "User name: $name.\n". "User email: $email.\n". "Subject: $subject.\n". "Message: $message.\n";

$to = 'sankalpanthi@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
 ?>
