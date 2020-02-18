<html>

<head>

<title>PHP mail() test</title>

</head>
<body>

<?php
$email = "webdev@kdkforging.com";
$test = "this is the test message";

$subject = $_POST["widget-contact-form-subject"];

$name = "Email: ".$_POST["widget-contact-form-sender"]."\n Name: ".$_POST["widget-contact-form-name"]."\n Message: ".$_POST["widget-contact-form-message"]."\n Company Name: ".$_POST["widget-contact-form-company-name"]."\n Attachement: ".$_FILES['widget-contact-form-attachment']['tmp_name'];

$message = $_POST["widget-contact-form-message"];

$sender = $_POST["widget-contact-form-sender"];

    // if(isset($_FILES['widget-contact-form-attachment']) && $_FILES['widget-contact-form-attachment']['error'] == UPLOAD_ERR_OK){
    //     $response = array ('response'=>'success'); 
    //     $name->AddAttachment( $_FILES['widget-contact-form-attachment']['tmp_name'], $_FILES['widget-contact-form-attachment']['name'] );
    // } 

	if(isset($_FILES['file'])){
		$name_file = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$local_image = "uploads/";
		$upload = move_uploaded_file($tmp_name, $local_image.$name_file);

		if($upload) {
			echo 'uploaded '. $name_file;
		}

	}

$goto_after_mail = "kdkforging.com";

mail($email,$subject,$name, $name_file);

header("Location: http://kdkforging.com");

print "SUCCESS!!";

echo '<script>window.location = "http://www.kdkforging.com/" </script>';

?>


</body>

</html>
