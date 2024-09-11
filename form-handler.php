<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['crop'];
$subject=$_POST['pesticide'];
$message=$_POST['message'];

$email_form='shashivardhanr104@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "subject:$crop.\n".
    "subject:$pesticide.\n".
    "User Message:$message.\n";
$to='shashivardhanr104@gmail.com';
$headers="Form:$email_form\r\n";
$headers.="Replay-to:$visitor_emial\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html.html");




?>