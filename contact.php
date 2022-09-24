<?php

if(isset($_POST["submit"])){
    echo "mail send";
    $name = $_POST["name"];
    $subject = "$name kontaktaufnahme";
    $email = $_POST["email"];
    $text = $_POST["subject"];

    $mailto = "contact@aronba.dev";
    $headers = "From: $email";
    $msg = "$name hat dich über aronba.dev kontaktiert!\n\n$text";

    echo "mail send";
    mail($mailto,$subject,$msg,$headers);
    echo "mail true";
    header("location: index.html?mailsend");
    exit;

}