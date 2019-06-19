<?php
// the message
$message = $_POST['message']; // required
$msg = $message;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("youremail@address.com","Your Subject",$msg);
echo("<h1>Thanks for your message.</h1>")
?>