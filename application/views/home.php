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
				<?php foreach($response as $data){ ?>
				<a href="<?php echo base_url(); ?>Vape/link_category?id=<?php echo $data['id'] ?>">
				<li>
					<div class="xop-box xop-img-1" style="background-image: url(<?php echo base_url(); ?>static/gambarHOME/<?php echo $data['gambar_kategori'] ?>);">
							<div class="xop-info">
								<h3><?php echo $data['nama_kategori'] ?></h3>
								<p><?php echo $data['deskripsi_kategori'] ?></p>
							</div>
					</div>
				</li>
			</a>
				<?php } ?>
			</ul>
		</div>

		
	</body>
 	</html>