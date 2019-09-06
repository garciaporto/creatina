

<?php
$name = $_POST['Full_Name'];
$phone = $_POST['Telephone_Number'];
$email = $_POST['Email_Address'];
$message = $_POST['Your_Message'];
$checkbox = $_POST['PrivacyPolicy'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html";

$mailbody .= $name . " - " . $email . " <br/>";
$mailbody .= "Contacto: " . $phone . " <br/>";
$mailbody .=  "<hr/>";
$mailbody .= wordwrap($message, 70, "\r\n");

$to = 'info@creatina-design.com';
$subject = 'Nuevo mensaje de '. $name .' desde la web de Creatina';

mail($to, $subject, utf8_decode($mailbody), $header);

echo "<script language=Javascript> location.href=\"submitted.html\"; </script>";

?>
