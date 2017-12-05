 <!DOCTYPE html>
 <html lang="en">
<?php
if(isset($this->session->userdata['logged_in'])){$username = ($this->session->userdata['logged_in']['username']);}
?>
 	<head>
 		<meta charset="utf-8">
 		<title>Home</title>
 		<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap-grid.min.css">
 		<link href="<?php echo base_url(); ?>static/css/style.css" type="text/css" rel="stylesheet">
 	</head>

 	<body class="home">
 		<div class="backgroundvideo">
			<video autoplay poster="<?php echo base_url(); ?>mama.jpg"  loop muted> 
				<source src="<?php echo base_url(); ?>static/gambarHOME/videovape.mp4" type="video/ogv" />
				<source src="<?php echo base_url(); ?>static/gambarHOME/videovape.mp4" type="video/webm" />
				<source src="<?php echo base_url(); ?>static/gambarHOME/videovape.mp4" type="video/mp4" />
			</video>
		</div>

 		<div class="navbar">
 			<ul>
		  		<li><a class="active" href="<?php echo base_url(); ?>Vape/home">Home</a></li>
                <?php if (!isset($this->session->userdata['logged_in'])){ ?>
                    <li><a href=<?php echo base_url(); ?>Vape/login>Login</a></li>
                <?php } else { ?>
                <li><a href=<?php echo base_url(); ?>Vape/logout>Logout</a></li>
                <?php } ?>
		  		<li><a href=<?php echo base_url(); ?>Vape/contact>Contact</a></li>
		  		<a class="logo" href="#aboutus"><img class="logo" src="<?php echo base_url() ?>static/gambarHOME/logo.jpg"></a>
			</ul>
		</div>

		<div class="xop-section">
			<ul class="xop-grid">
				<li>
					<div class="xop-box xop-img-1">
						<a href="<?php echo base_url(); ?>Vape/picoresin">
							<div class="xop-info">
								<h3>Kits</h3>
								<p>Nulla commodo iaculis vulputate. Nullam enim mauris, dignissim id est nec, mollis pretium nulla.</p>
							</div>
						</a>
					</div>
				</li>
				<li>
					<div class="xop-box xop-img-2">
						<a href="#">
							<div class="xop-info">
								<h3>Atomizer</h3>
								<p>Nulla commodo iaculis vulputate. Nullam enim mauris, dignissim id est nec, mollis pretium nulla.</p>
							</div>
						</a>
					</div>
				</li>
				<li>
					<div class="xop-box xop-img-3">
						<a href="#">
							<div class="xop-info">
								<h3>Mod</h3>
								<p>Nulla commodo iaculis vulputate. Nullam enim mauris, dignissim id est nec, mollis pretium nulla.</p>
							</div>
						</a>
					</div>
				</li>
				<li>
					<div class="xop-box xop-img-4">
						<a href="#">
							<div class="xop-info">
								<h3>Accessories</h3>
								<p>Nulla commodo iaculis vulputate. Nullam enim mauris, dignissim id est nec, mollis pretium nulla.</p>
							</div>
						</a>
					</div>
				</li>
			</ul>
		</div>

		
	</body>
 	</html>