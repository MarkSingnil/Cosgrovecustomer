<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "cosgroveslawnservice@gmail.com";
$subject = "New Message";

mail ($to, $subject, $message, "From:" . $email );
echo "Your Message has been sent";


?>