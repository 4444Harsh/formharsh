<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send the email using PHP's mail() function
  $to = 'guptaharshbly@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Message could not be sent.";
  }
}
?>
