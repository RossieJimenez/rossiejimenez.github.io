<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo "No arguments provided!";
  return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'rossie164@gmail.com'; // Replace this with your email address
$email_subject = "Website Contact Form: $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@rossiejimenez.github.io\n"; // Replace with your domain
$headers .= "Reply-To: $email_address";	
mail($to, $email_subject, $email_body, $headers);
return true;			
?>
