<?php
// De pagina waar men komt na het invullen van het contactformulier
$file = file_get_contents('./html/contactlanding.php');

// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "contact@micropool.nl"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Set up email
$msg = "Nieuw ingevuld contactformulier! \nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,75);
mail($myemail,"New Form Submission",$msg);
mail($email,"Bedankt voor het invullen van ons contactformulier. We nemen zo snel mogelijk contact met u op. Het bericht dat u gestuurd heeft, is: ",$msg);

echo $file; ?>
