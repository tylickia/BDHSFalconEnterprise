<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="page-width" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Flacon enterprise contact form">
  <meta name="keywords" content="VICOM-128, HTML Contact Form">
	<title>Contact Form</title>
  <link rel="shortcut icon" href="images/falcon.ico">
	<link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/contact.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

</head>

<body>
<header>
        <section>
            <div class="header-bar">
                <div>
                    <div class="logo">
                        <a href="/"><img src="images/falcon.png" alt="logo" height="125"></a>
                    </div>
                    <div class="name-address">
                        <h1>
                            Falcon Enterprise
                        </h1>
                       
                        <h3>
                            Brown Deer, Wisconsin<br>
                            <a href="mailto:asullivan@browndeerschools.com">asullivan@browndeerschools.com</a>
                            <br>
                        </h3>
                    </div>
                </div>
                <div class="contact-buttons">
                    <a href="/contact-form.html">Message Us Now</a>
                </div>
            </div>
            <nav class="navbar">
                <div class="navlink">
                    <a href="/">Home</a>
                </div>
                <div class="navlink">
                    <a href="/about-us.html">About Us</a>
                </div>
                <div class="navlink">
                    <a href="/photogallery.html">Photo Gallery</a>
                </div>
                <div class="navlink">
                    <a href="/contact-us.html">Contact Us</a>
                </div>
                <div class="navlink">
                    <a href="/faq.html">FAQ</a>
                </div>
            </nav>
            <hr>
        </section>
    </header>

  <section class=formBox>
  <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Contact Information</legend>
    		<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    		<legend>Message Information</legend>
			<label for="date_needed">Date Needed:</label>
			<input type="date" name="date_needed" id="date_needed" value="<?php echo $_REQUEST['date_needed'] ?>" disabled><br>
			<label for="item_options">Item Options:</label>
			<input type="text" name="item_options" id="item_options" value="<?php echo $_REQUEST['item_options'] ?>" disabled><br>
			<label for="message">Message:</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
  </section>
<h2>
<?php
  if (isset($_REQUEST['email'])) { 
    $admin_email = "asullivan@browndeerschools.com"; 
    $email = $_REQUEST['email']; 
    $phone = $_REQUEST['phone']; 
    $date_needed = $_REQUEST['date_needed'];
    $item_options = $_REQUEST['item_options']; 
    $message = $_REQUEST['message']; 
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
    $subject = "New order inquiry: " . $item_options; 
             
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Date Needed: " . $date_needed . "\n";
    $body .= "Item Options: " . $item_options . "\n";
    $body .= "Message: " . $message;
  
    $headers = "From: " . $name . " <" . $email . "> \r\n"; 
    $headers .= "CC: " . $name . " <" . $email . ">"; 

  mail($admin_email, $subject, $body, $headers); 
    
  echo "Thank you for contacting us!"; 
  }
  
  else  { 
     echo "There has been an error!";
        }
?>

</h2>

<footer>
        <p>
            <i>&copy; Falcon Enterprise 2022</i>
        </p>
    </footer>
</body>
</html>