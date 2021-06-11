<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$phoneFrom = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$mailTo = "Benjamin.Schulz@hotmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail".$name.".\n\n".$message;

mail($mailTo, $subject, $text, $headers);
header("Location: index.html?mailsend");
}


?>