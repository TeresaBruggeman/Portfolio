<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cantactSubject = $_POST['subject'];
    $message = $_POST['message'];

    $from = 'From: Portfolio_Contact_Form'; // Edit to suit your needs 
    $to = 'tsbruggeman@gmail.com'; // Edit to suit the email on which you wish to recieve the form details
    $subject = 'Contact form submission'; 

    $body = "From: $name\n E-Mail: $email\n Subject: $cantactSubject\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }

?>