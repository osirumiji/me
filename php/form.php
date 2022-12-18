<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate the form data
  if (empty($name) || empty($email) || empty($message)) {
    // Display an error message
  } else {
    // Send the message
    mail('ihudeosirumiji@gmail.com', 'New Message', $message, "From: $email");
  }
}

?>