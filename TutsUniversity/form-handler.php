<?php

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $email. \n".
                "Subject: $subject. \n".
                "User Message: $mesage. \n";

$to = 'gloriosooliver44@gmail.com';

$headers = "From: $email from \r\n";
$headers = "Reply-To: $visitor_email from \r\n";

mail($to, $email_subject, $email_body,$headers);

header("Location: contact.html.html");



?>