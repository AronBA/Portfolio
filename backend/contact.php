<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $text = $_POST["subject"];
    $subject = "$name kontaktaufnahme";

    $mailto = "contact@aronba.dev";
    $header = "From: $email";
    $msg = "$name hat dich über aronba.dev kontaktiert!\n\n$text";


    mail($mailto,$subject,$msg,$header);
    header("Location: ../index.html?mailsend");

}