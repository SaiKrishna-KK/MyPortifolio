<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $toEmail = "saikrishna@gmail.com"; // Replace with your email address

  $email = $_POST["email"];
  $subject = "Quote Request";
  $message = "A quote request has been submitted.\n\nEmail: " . $email;

  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($toEmail, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
}
?>
