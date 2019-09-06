<?php

if($_POST) {
    $visitor_name = "firstName";
    $visitor_email = "email";
    $email_title = "subject";
    $visitor_message = "message";

    if(isset($_POST['firstName'])) {
      $visitor_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['lasttName'])) {
      $visitor_name = filter_var($_POST['lasttName'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['subject'])) {
        $email_title = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['message'])) {
        $visitor_message = htmlspecialchars($_POST['message']);
    }

    $recipient = "creatina@creatina-design.com";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}

?>
