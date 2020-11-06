<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'vinothkumar33va@gmail.com';

    $email_subject =" New Form Submisson";

    $email_body ="User Name : $name.\n".
    "User Message: $message.\n";

    $to ="vintothkumar33va@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply_To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    
?>