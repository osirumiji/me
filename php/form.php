
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$subscribe = $_POST['subscribe'];
$message = $_POST['message'];

$to = "ihudeosirumiji@gmail.com";
$subject = "New form submission";
$body = "A new form submission was received:\nName: $name\nEmail: $email\nSubject: $subject\nSubscribe: $subscribe\nMessage:\n$message";

mail($to, $subject, $body);

// Validate the form data
if (empty($name) || empty($email) || empty($message)) {
  // Display an error message
} else {
  // Send the message
  mail('ihudeosirumiji@gmail.com', 'New Message', $message, "From: $email");
}

?>
