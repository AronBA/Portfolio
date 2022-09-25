<?php

if(isset($_POST["submit"])){
    echo "mail send";
    $name = htmlspecialchars(stripcslashes(($_POST["name"])));
    $subject = "$name kontaktaufnahme";
    $email =  htmlspecialchars(stripcslashes(($_POST["email"])));
    $text =  htmlspecialchars(stripcslashes(($_POST["subject"])));

    $mailto = "contact@aronba.dev";
    $headers = "From: $email";
    $msg = "$name hat dich über aronba.dev kontaktiert!\n\n$text";


    mail($mailto,$subject,$msg,$headers);

    header("location: index.html?mailsend");
    exit;

}