<?php

if(isset($_POST["submit"])){
    echo "mail send";
    $name = htmlspecialchars(stripcslashes($_POST["name"]));
    $subject = "$name kontaktaufnahme";
    $email = htmlspecialchars(stripcslashes($_POST["email"]));
    $text =  htmlspecialchars(stripcslashes($_POST["subject"]));

    $mailto = "contact@aronba.dev";
    $headers = "From: $email";
    $msg = "$name hat dich über aronba.dev kontaktiert!\n\n$text";



    if(!isset($_POST['span'])) {
        if (mail($mailto,$subject,$msg,$headers)){
            header("location: index.html?mailsend");
            exit;
        }
        header("location: index.html?mailnotsend");
        exit;
    } else {
        $subject = "**Spam**";
        if (mail($mailto,$subject,$msg,$headers)){
            header("location: index.html?mailsend");
            exit;
        }
        header("location: index.html?mailnotsend");
        exit;
    }





} else {
    header("location: index.html");
}