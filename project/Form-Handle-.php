<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['Your comment']

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n". 
              "subject: $subject.\n".
              "user message: $your_email.\n";

$to = 'ithembadtdc@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

    
header("Location: Blog.html");
    
    
?>