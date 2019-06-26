<?php
// the message
$message = $_POST['message']; // required
$msg = $message;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$succeed = mail("youremail@address.com","Your Subject",$msg);
if ($succeed){
    header('Location:thankyou.html');
}else{
    echo('<h1>the email service is having an issue, we are working on it now. please submit your message later, thank you.</h1>');
}
?>
