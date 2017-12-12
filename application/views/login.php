<!DOCTYPE html>
 <html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: Vape/login");
}
?>
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
		  		<li><a  href="<?php echo base_url(); ?>Vape/home">Home</a></li>
		  		<li><a class="active" href="login">Login</a></li>
		  		<li><a  href="<?php echo base_url(); ?>Vape/contact">Contact</a></li>
		  		<a class="logo" href="#aboutus"><img class="logo" src="<?php echo base_url() ?>static/gambarHOME/logo.jpg"></a>
			</ul>
		</div>
		<div class="wrapper">
            <form class="form-signin" method="post" action="<?php echo base_url(); ?>Vape/login">       
                <h2 class="form-signin-heading">Please login</h2>
        
				<?php
					echo "<div class='error_msg'>";
						if (isset($error_message)) {
							echo $error_message;
						}
					echo validation_errors();
					echo "</div>";
				?>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <input type="submit" value="Login " name="submit"/>
    </form>
  </div>