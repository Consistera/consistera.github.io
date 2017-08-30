<?php 
$name = $_POST['jap'];
$email_ad = $_POST['email_ad'];
$message = $_POST['zprava'];


$formcontent="\n Jméno a Příjmení: $name \n Email: $email_ad \n \n Zpráva: \n $message";
$recipient = "postmaster@consistera.cz";
$subject = "Zprava z Kontaktniho formulare";


$mailheader = "From: $email_ad \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Jejda! Něco se pokazilo :(");
header('Location: /kontakt/mail_ad.html');
?>