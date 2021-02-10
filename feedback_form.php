<?php
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];

function filter_email_header($form_field) {
  return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
  }


  $email_address  = filter_email_header($email_address);

  $headers = "From: $email_address";
$sent = mail('ehwbp@adharproject.org', 'Email from Website', $feedback, $headers);

if ($sent) {

  ?>
  
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Adhar Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.typekit.net/rwg4trk.css"></link>
            <link href='CSS\general.css' rel='stylesheet' type='text/css'>
            <link href='CSS\contact.css' rel='stylesheet' type='text/css'>


  </head>

<header>
  <nav class="Logo"><img src="Images\Adhar Logo.png" alt="Adhar Project Logo"></img>


    <a class="Navigation" href="index.html">Home</a>
    <div class="dropdown" id="Dropdown">
      <div class="dropbtn">Services &#9660;</div>
      <div class="dropdown-content" id="Dropdown">
        <a href="services.html">Our Mission</a>
        <a href="services.html#Advocacy">Advocacy Project</a>
        <a href="services.html#DomesticAbuse">Domestic Abuse Project</a>
        <a href="services.html#RecoveryProject" #>Recovery Project</a>
        <a href="services.html#SupportGroup">Support Groups</a>
      </div>
    </div>
    <a class="Navigation" href="About.html">About Us</a>
    <a class="Navigation" href="gallery.html">Gallery</a>
    <a class="Navigation" href="contact.html">Contact Us</a>
    <a class="Navigation, DonateLink" href="donate.html" >Donate</a>
<span id="SmallMenuOpen">☰</span>
</nav>

  <div id="SmallMenu">
    <a class="SecondMenu" href="index.html">Home</a>
    <a href ="services.html">Services</a>
    <a href="About.html">About Us</a>
    <a href="contact.html">Contact Us</a>
    <a href="gallery.html">Gallery</a>
    <a href="donate.html" id="DonateSmall">Donate</a>
  </div>


    <div class="PageTitle" id="Menu">'Building a society where all those
      with mental health difficulities can live happy, healthy fulfilled lives.'</div>

  </header>

<body>

<h1>Thank you for your email.</h1>

<p>Someone from our team of dedicated individuals will respond shortly to your email.</p>
  <img src="Images\Group Talking-01-01-min.png" style="width: 100%"> </img>

  </body>



  <footer>
    <p>Adhar Project (limited by guarantee). Registered Company Number: 5524 738 Registered Charity Number: 1121 499.
      <br>
    Registered address: Adhar Project, 79 St Peter's Road, Leicester, Leicestershire, LE2 1DH Tel: 0116 220 0070</p>
      </footer>

        
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script src="index.js"></script>

</html>










  <?php

  } else {
  ?><html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Adhar Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.typekit.net/rwg4trk.css"></link>
            <link href='CSS\general.css' rel='stylesheet' type='text/css'>
            <link href='CSS\contact.css' rel='stylesheet' type='text/css'>


  </head>

<header>
  <nav class="Logo"><img src="Adhar Logo-min.png"></img>


    <a class="Navigation" href="index.html">Home</a>
    <div class="dropdown" id="Dropdown">
      <div class="dropbtn">Services &#9660;</div>
      <div class="dropdown-content" id="Dropdown">
        <a href="services.html">Our Mission</a>
        <a href="services.html#Advocacy">Advocacy Project</a>
        <a href="services.html#DomesticAbuse">Domestic Abuse Project</a>
        <a href="services.html#RecoveryProject" #>Recovery Project</a>
        <a href="services.html#SupportGroup">Support Groups</a>
      </div>
    </div>
    <a class="Navigation" href="About.html">About Us</a>
    <a class="Navigation" href="gallery.html">Gallery</a>
    <a class="Navigation" href="contact.html">Contact Us</a>
    <a class="Navigation, DonateLink" href="donate.html" >Donate</a>
<span id="SmallMenuOpen">☰</span>
</nav>

  <div id="SmallMenu">
    <a class="SecondMenu" href="index.html">Home</a>
    <a href ="services.html">Services</a>
    <a href="About.html">About Us</a>
    <a href="contact.html">Contact Us</a>
    <a href="gallery.html">Gallery</a>
    <a href="donate.html" id="DonateSmall">Donate</a>
  </div>


    <div class="PageTitle" id="Menu">'Building a society where all those
      with mental health difficulities can live happy, healthy fulfilled lives.'</div>

  </header>

<body>

<h1>Sorry, something went wrong.</h1>

<p>Return to our website to try again, or contact us directly using a different method.</p>
  <img src="Images\Group Talking-01-01-min.png" style="width: 100%"> </img>

  </body>



  <footer>
    <p>Adhar Project (limited by guarantee). Registered Company Number: 5524 738 Registered Charity Number: 1121 499.
      <br>
    Registered address: Adhar Project, 79 St Peter's Road, Leicester, Leicestershire, LE2 1DH Tel: 0116 220 0070</p>
      </footer>

</html>
  <?php
  }
  ?>
