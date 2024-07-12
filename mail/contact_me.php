
// Check for empty fields
// if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   echo "No arguments provided!";
//   return false;
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email_address = strip_tags(htmlspecialchars($_POST['email']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// // Create the email and send the message
// $to = 'rossie164@gmail.com'; // Replace this with your email address
// $email_subject = "Website Contact Form: $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
// $headers = "From: noreply@rossiejimenez.github.io\n"; // Replace with your domain
// $headers .= "Reply-To: $email_address";	
// mail($to, $email_subject, $email_body, $headers);
// return true;			





<?php 
if(isset($_POST['submit'])){
    $to = "rossie164@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 