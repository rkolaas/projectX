<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Fra: $name \n Beskjed: $message";
$recipient = "post@robertkolaas.no";
$subject = "Henvendelse via nettside";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Takk for din henvendelse,";
?>
<a href="http://www.robertkolaas.no"><p>Trykk her for å gå tilbake til siden</p></a>