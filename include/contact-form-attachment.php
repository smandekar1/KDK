<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/src/Exception.php';
require 'php-mailer/src/PHPMailer.php';
require 'php-mailer/src/SMTP.php';

$mail = new PHPMailer();


// Enter your email address. If you need multiple email recipes simply add a comma: email@domain.com, email2@domain.com
$to = "smahisekar@gmail.com";

// Add your reCaptcha Secret key if you wish to activate google reCaptcha security
$recaptcha_secret_key = ''; 


// Form Fields
$name = isset($_POST["widget-contact-form-name"]) ? $_POST["widget-contact-form-name"] : null;
$email = "webmaster@kdkforging.com";
$phone = isset($_POST["widget-contact-form-phone"]) ? $_POST["widget-contact-form-phone"] : null;
$company = isset($_POST["widget-contact-form-company"]) ? $_POST["widget-contact-form-company"] : null;
$service = isset($_POST["widget-contact-form-service"]) ? $_POST["widget-contact-form-service"] : null;
$subject = isset($_POST["widget-contact-form-subject"]) ? $_POST["widget-contact-form-subject"] : 'New Message From Contact Form';
$message = isset($_POST["widget-contact-form-message"]) ? $_POST["widget-contact-form-message"] : null;

$recaptcha_response = isset($_POST["g-recaptcha-response"]) ? $_POST["g-recaptcha-response"] : null;


if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	
    
 if($email != '') {
            
                //If you don't receive the email, enable and configure these parameters below: 
     
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers, example: smtp1.example.com;smtp2.example.com
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'smahisekar@gmail.com';                    // SMTP username
                $mail->Password = 'Hotgoogle1';                    // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to 
     
     	        $mail->IsHTML(true);                                    // Set email format to HTML
                $mail->CharSet = 'UTF-8';
                // $mail->AddAttachment($attachment);
                $mail->From = $email;
                $mail->FromName = $name;
     
                if(strpos($to, ',') !== false){
                    $email_addresses = explode(',', $to);
                    foreach($email_addresses as $email_address) {
                       $mail->AddAddress(trim($email_address));
                    }
                 }
                 else {
                     $mail->AddAddress($to);
                 }
							  
                $mail->AddReplyTo($email, $name);
                $mail->Subject = $subject;
                
                $name = isset($name) ? "Name: $name<br><br>" : '';
                $email = isset($email) ? "Email: $email<br><br>" : '';
                $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
                $company = isset($company) ? "Company: $company<br><br>" : '';
                $service = isset($service) ? "Service: $service<br><br>" : '';
                $message = isset($message) ? "Message: $message<br><br>" : '';
                // $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['widget-contact-form-attachment']['widget-contact-form-attachment']));
                // move_uploaded_file($_FILES['file']['tmp_name'], "uploads/". $_FILES['file']['name']);
                // if (move_uploaded_file($_FILES['widget-contact-form-attachment']['tmp_name'], $uploadfile)) {
                //     $mail->addAttachment($_FILES['widget-contact-form-attachment'], ['name']);
                //     } else {
                //         $msg .= 'Failed to move file to ' . $uploadfile;
                //     }
                // $mail->AddAttachment( $_FILES['file']['tmp_name']);
                $mail->Body = $name . $email . $phone . $company . $service . $message . '<br><br><br>This email was sent from: ' . $_SERVER['HTTP_REFERER'];
                
                // $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name']));
                // if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                //     // Upload handled successfully
                //     // Now create a message
                //     // This should be somewhere in your include_path

                //     $mail->addAttachment($uploadfile, 'My uploaded file');
                //     if (!$mail->send()) {
                //         $msg .= "Mailer Error: " . $mail->ErrorInfo;
                //     } else {
                //         $msg .= "Message sent!";
                //     }
                // }

                // This works
                $mail->addAttachment('uploads/6.jpg','facebookcover.phg');

                // if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK){
                //     $response = array ('response'=>'success'); 
                //     $mail->AddAttachment( $_FILES['file']['tmp_name']);
                // } 
     
	           // Check if google captch is present
                if(!empty($recaptcha_secret_key)) {
            
                    $ch = curl_init();
                    curl_setopt_array($ch,[CURLOPT_URL=>'https://www.google.com/recaptcha/api/siteverify',CURLOPT_POST =>true,CURLOPT_POSTFIELDS=>['secret'=> $recaptcha_secret_key,'response'=>$recaptcha_response,'remoteip'=>$_SERVER['REMOTE_ADDR']],CURLOPT_RETURNTRANSFER => true]);
                    $response = curl_exec($ch); 
                    curl_close($ch); 
                    $json = json_decode($response);

                    if ($json->success !== true ) {
                        $response = array ('response'=>'error', 'message'=> "Captcha is not Valid! Please Try Again.");
                    }else {
                       if(!$mail->Send()) {

                        
                            $response = array ('response'=>'error', 'message'=> $mail->ErrorInfo);  
                        }else {
                            $response = array ('response'=>'success');  
                        } 
                    }
                }else {
                    if(!$mail->Send()) {
                        $response = array ('response'=>'error', 'message'=> $mail->ErrorInfo);  

                    }else {                  
                        $response = array ('response'=>'success');  
                    }
                }
     
            echo json_encode($response);
} else {
	$response = array ('response'=>'error');     
	echo json_encode($response);
}
    
}
// header("Location: http://kdkforging.com");
echo "<script>alert('Message has been sent')</script>";
// print "SUCCESS!";

// echo '<script>window.location = "http://www.kdkforging.com/" </script>';

?>