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

 	<body class="home" style="background: #eee">
 		<div class="navbar">
 			<ul>
		  		<li><a  href="home.php">Home</a></li>
		  		<li><a href="login.html">Login</a></li>
		  		<li><a class="active" href="#contact">Contact</a></li>
		  		<a class="logo" href="#aboutus"><img class="logo" src="<?php echo base_url() ?>static/gambarHOME/logo.jpg"></a>
			</ul>
		</div>
		<div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button>Login</button>   
    </form>
  </div>