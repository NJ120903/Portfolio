<?php
// Recipient email address 
$to = 'jraghav663@gmail.com';

// Subject of the email 
$subject = 'Test Email';

// Message body 
$message = 'This is a test email.';

// Sender email and name 
$senderEmail = 'joshinarayan407@gmail.com'; 
$senderName 'Narayan Joshi';

// Additional headers
$headers = 'From: ' , $senderName . ' <' . $senderEmail . '>' . "\r\n" .
	'Reply-To: ' . $senderEmail . "\r\n .
	'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) { 
	echo 'Email sent successfully!";
} else {
	echo 'Failed to send email.';
}
?>
