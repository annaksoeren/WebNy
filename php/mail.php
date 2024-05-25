<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    if(empty($name) || empty($subject) || empty($mailFrom) || empty($message)) {
        header('locationmail.php?error');
    }
    else{
        $mailTo = "anna.kaersgaard@gmail.com";
        if(mail($mailTo, $subject, $txt, $headers);){
            header("location:contact.php?mailsend");
        }
    }
}
else{
    header("location:contact.php?");
}



/* if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "anna.kaersgaard@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: mail.php?mailsend");
} */
?>


