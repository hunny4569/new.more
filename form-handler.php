<?php
$name = $_POST['name'];
$vistor_emai = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@myweb.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $vistor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'hunzalach12359@gmail.com';
$header = "From: $eamil_from \r\n";
$header .= "Reply-To: $vistor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");




?>