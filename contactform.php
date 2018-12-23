<?php 


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "riley@riley.gg";
    $headers = "From: " . $mailFrom;
    // $txt = "You have recieved an email from " . $name . ".\n\n" . $mailFrom . ".\n\n" . $message;
    $txt = "You have recieved an email from {$name} \n\n Email: {$mailFrom} \n\n Message: {$message}";


    mail($mailTo, $subject, $txt, $headers);

    header("Location:  /thanks.html");

}