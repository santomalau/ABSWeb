<!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="utf-8">
 		<title>Home</title>
 		<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap-grid.min.css">
 		<link href="<?php echo base_url(); ?>static/css/style.css" type="text/css" rel="stylesheet">
 		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 	</head>

 	<body class="home">
 		<div class="navbar">
 			<ul>
		  		<li><a  href="home">Home</a></li>
		  		<li><a href="login">Login</a></li>
		  		<li><a class="active" href="#contact">Contact</a></li>
		  		<a class="logo" href="#aboutus"><img class="logo" src="<?php echo base_url() ?>static/gambarHOME/logo.jpg"></a>
			</ul>
		</div>


		<div class="container">  
  <form id="contact" action="<?php echo base_url(); ?>Vape/contact" method="post">
    <h3>Colorlib Contact Form</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input name='name' placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name='email' placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name='phonenumber' placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea name='saran' placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
<