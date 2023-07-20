<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_form='ajitkumarmandal18bca06@gmail.com';
$email_subject='new form submission';
$emil_body=
        "user Name:$name.\n".
        "user Email:$visitor_email.\n".
        "Subject:$subject.\n".
        "user Message:$message.\n";
$to = 'ajitkumarmandal8090@gmail.com';
$headers = "Form: $email_form \r\n";
$headers = "Replay-To:$visitor_email \r\n";
mail($to, $email_subject,$emil_body,$headers);

header("Location:contact.html");

        
?>
