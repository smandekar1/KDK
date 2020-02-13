<html>

<head>

<title>PHP mail() test</title>

</head>
<body>

<?php
$email = "webdev@kdkforging.com";
$test = "this is the test message";

$subject = $_POST["widget-contact-form-subject"];

$name = "Email: ".$_POST["widget-contact-form-sender"]." Name: ".$_POST["widget-contact-form-name"];

$message = $_POST["widget-contact-form-message"];

$sender = $_POST["widget-contact-form-sender"];


// $email_message = $message.$sender;
// $email_message .= "Last Name: ".clean_string($message)."\n";
// $email_message .= "Email: ".clean_string($subject)."\n";


// $eLog="/tmp/mailError.log";

// //Get the size of the error log
// //ensure it exists, create it if it doesn't
// $fh= fopen($eLog, "a+");
// fclose($fh);
// $originalsize = filesize($eLog);

// mail($email,$subject,$name,$message);

$goto_after_mail = "kdkforging.com";

mail($email,$subject,$name,$message);

header("Location: http://kdkforging.com");

print "SUCCESS!";

echo '<script>window.location = "http://www.kdkforging.com/" </script>';
    // Set a 200 (okay) response code.
    // http_response_code(200);
    // echo "Thank You! Your message has been sent.";
// } else {
//     // Set a 500 (internal server error) response code.
//     http_response_code(500);
//     echo "Oops! Something went wrong and we couldn't send your message.";
// }

// mail($email,$email_message);

/*
* NOTE: PHP caches file status so we need to clear
* that cache so we can get the current file size
*/

// clearstatcache();
// $finalsize = filesize($eLog);

// //Check if the error log was just updated
// if ($originalsize != $finalsize) {
// print "Problem sending mail. (size was $originalsize, now $finalsize) See $eLog
// ";
// } else {
// print "Mail sent to $email";
// }
?>
this is outside the block

</body>

</html>



