<?php
// De pagina waar men komt na het invullen van het contactformulier
$file = file_get_contents('./html/contactlanding.php');

// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "rodger@micropool.nl"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Email voor client
$msg = "Beste " . $name . 
	",\n\nWij danken u vriendelijk voor het invullen van ons contactformulier!\n" . 
		"We zullen zo snel mogelijk contact met u opnemen. \n\n" . 
		"Hieronder staan de gegevens die u ingevuld heeft: \n\n" .
		"Naam: " . $name .
		"\nEmail-adres: " . $email .
		"\nTelefoonnummer: " . $phone .
		
		"\n\nHet bericht dat u gestuurd heeft, is: \n\n" . $message . 
	
	"\n\n Met vriendelijke groet, \n " . 
		"Het team van Micropool \n\n ";

// Email voor ons
$msg4us = "Beste jongens van Micropool, er is weer een contactformulier binnen.\n" .
	"\nNaam: " . $name .
	"\nEmail-adres: " . $email . 
	"\nTelefoonnummer: " . $phone .
	"\nBericht: \n\n" . $message;

// Words per line (useful for readability)
$msg = wordwrap($msg,140);
$msg4us = wordwrap($msg4us,70);

// Onderwerp van mail naar client
mail($email,"Micropool: Bedankt voor het invullen van ons contactformulier.",$msg);
// Onderwerp van mail naar ons
mail($myemail,"Ingevuld contactformulier van " . $name, $msg4us);

echo $file; ?>
