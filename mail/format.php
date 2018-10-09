<?php

	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
        $mail->SMTPDebug = 3;
	//$mail->isSMTP();
	$mail->Host = 'smtp.sparkpostmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = 'SMTP_Injection';
	// You will need an API Key with 'Send via SMTP' permissions.
	// Create one here: https://app.sparkpost.com/account/credentials
	$mail->Password = '81b3e96ec41f968a698ee6f06c488c4334937267';
	// sparkpostbox.com is a sending domain used for testing
	// purposes and is limited to 50 messages per account.
	// Visit https://app.sparkpost.com/account/sending-domains
	// to register and verify your own sending domain.
	$mail->setFrom('support@nidays.co.in','Nidays Event');
	$mail->addAddress('samarth@eigenschaft.net');
	$mail->Subject = 'Spark';
	$body = 'i am coming from spark';
	$mail->MsgHTML($body);
	//$mail->addCustomHeader('X-MSYS-API', '{"campaign_id" : "PHPExample"}');
	if (!$mail->send()) {
	  echo "Message could not be sent\n";
	  echo "Mailer Error: " . $mail->ErrorInfo . "\n";
	} else {
	  echo "Message has been sent";
	  echo "<br>";
	}
?>