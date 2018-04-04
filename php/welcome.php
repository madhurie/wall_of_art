<?php
if(isset($_POST['send'])){
	$to = 'madhuriedala25@gmail.com';
	$subject = 'Feedback from my site';
}

$message  .= 'Name:' .$_POST['name'] . "\r\n\r\n";
$message .= 'Comments:' .$_POST['comments'];
echo $message;
?>


<!DOCTYPE html>
<html>

<head>
	<meta>
	<title>welcome acknowledgment</title>
	</head>
	<body>
	
	<h1>Thank You</h>
	<p>Your message has been sent.</p>
	<h1>Ooops!</h1>
	<p> Sorry, there was a problem sending your message</p>
	
	</body>
	</html>
	