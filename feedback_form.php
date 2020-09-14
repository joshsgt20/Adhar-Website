<?php
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];

function filter_email_header($form_field) {  
  return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
  }


  $email_address  = filter_email_header($email_address);

  $headers = "From: $email_addressn";
$sent = mail('ehwbp@adharproject.org', 'Feedback Form Submission', $feedback, $headers);

if ($sent) {

  ?><html>
  <head>
  <title>Thank You</title>
  </head>
  <body>
  <h1>Thank You</h1>
  <p>Thank you for your email, we promise to get back to you as soon as possible.</p>
  </body>
  </html>
  
  <?php
  
  } else {
  ?><html>
  <head>
  <title>Something went wrong</title>
  </head>
  <body>
  <h1>Something went wrong</h1>
  <p>We could not send your feedback. Please try again.</p>
  </body>
  </html>
  <?php
  }
  ?>