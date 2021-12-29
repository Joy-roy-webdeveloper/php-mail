<!DOCTYPE html>
<html>
<head>
	<title>php mail send</title>
</head>
<body>
	<h1>php mail send</h1>

	<?php
$to ='fiveerjoy@gmail.com';
$subject = "php Email Subject";

$message = 'php message';


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <joyroy9608@gmail.com>' . "\r\n";
$headers .= 'Cc: roy882882@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>

</body>
</html>