<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$visitor_phone=$_POST['phone'];
$message=$_POST['message'];

$email_from='benjaminschulzcounselling.com';

$email_subject="Counselling Inquiry";

$email_body="User Name:$name.\n".
                "User Email:$visitor_email.\n". 
                "User Phone:$visitor_phone.\n". 
                "User Message:$message.\n";

$to="benjaminschulzcounselling@gmail.com";

$headers="From:$email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");
?>