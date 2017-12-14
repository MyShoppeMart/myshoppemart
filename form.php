<?php

if($_POST["submit"]) {
    $recipient="obinnaleo78@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nemail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>