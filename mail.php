<?php
$to = "ishika@example.com";
$subject = "hey there!";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: xyz@example.com";

mail($to,$subject,$txt,$headers);
?>