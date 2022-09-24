<?php

if(isset($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $text = $_POST["subject"];
    $subject = "$name kontaktaufnahme";
    $mailto = "contact@aronba.dev";
    $header = "From: $email";
    $msg = "$name hat dich über aronba.dev kontaktiert!\n\n$subject";
    mail($mailto,$subject,$msg,$header);
    $header("Location: ../index.php?mailsend");

}