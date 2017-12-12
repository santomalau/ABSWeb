<!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="utf-8">
 		<title>Accessory</title>
 		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
 		<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
 		<link href="<?php echo base_url(); ?>static/css/style.css" type="text/css" rel="stylesheet">
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap-grid.min.css">
 	</head>

 	<body class="picoresin" style="background-color: white">
 		<div class="navbar">

 		<ul>
		 <li><a  href="<?php echo base_url(); ?>Vape/home">Home</a></li>
                <?php if (!isset($this->session->userdata['logged_in'])){ ?>
                    <li><a href=<?php echo base_url(); ?>Vape/login>Login</a></li>
                <?php } else { ?>
            <li><a href=<?php echo base_url(); ?>Vape/logout>Logout</a></li>
                <?php } ?>
		  <li><a class="active" href="#product">Product</a></li>
		  <li><a href=<?php echo base_url(); ?>Vape/contact>Contact</a></li>
		  <a class="logo" href="#aboutus"><img class="logo" src=<?php echo base_url() ?>static/gambarHOME/logo.jpg></a>
		</ul>


	</div>
	<div class="container" >
		<div class="vape row">
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambarACCESSORY/1.jpg">
			</div>
			<div class ="desc col-sm-6">
				<h2 style="text-align: left">HW1 Head</h2>
				<p style="text-align: left">
					<b>Product Introduction:</b> <br> Eleaf added a new member to HW series coils, the HW4. The HW4 Quad-Cylinder 0.3ohm Head will provide you with an ultra vaping experience with huge amount of vapor production.
				</p>
			</div>
		</div>

		<div class="vape row background" style="height: 110vh">
			<div class ="desc col-sm-6" style="text-align: left;padding-left: 10%;margin-top: 40%">			
				<h2>Parameter:</h2><br>
				<p>
					Diameter: 15mm<br>
					Height: 20mm<br>
					Weight: 8.2g<br>
					E-liquid capacity: 1.8ml<br><br>
					Standard configuration:<br>
					<br>
					1×GS BASAL ----- 1×GS Air 0.75ohm Head ----- 1×User Manual<br>
					1×GS Air 1.5ohm Head ----- Spare Parts<br>
				</p>
			</div>
			<div class ="img col-sm-6" style="padding-top: 10%">
				<img src="<?php echo base_url(); ?>static/gambarACCESSORY/2.png">
			</div>
		</div>

		<div class="vape row " style="background-color:#00e6b8;height:120vh;padding-top:10vh">
		<div class ="desc col-sm-6" style="padding-top:20vh">
			<h2 style="text-align: left;">Note:</h2>
			<p style="text-align: left;">
				1. Please first drip a few drops of e-liquid directly into the coil to make it fully saturated before first use;<br>
                2. Please don’t vape until e-liquid nearly runs out. Otherwise, the coil inside will be damaged. 
			</p>
            <img src="<?php echo base_url(); ?>static/gambarACCESSORY/3.png">
		</div>
            <div class="col-sm-1"></div>
        <div class ="img col-sm-5">
            <img src="<?php echo base_url(); ?>static/gambarACCESSORY/4.png">
        </div>
		</div>
        
        <div class="vape row " >
        <div class ="img col-sm-12">
            <img src="<?php echo base_url(); ?>static/gambarACCESSORY/5.jpg" style="width:70vw">
        </div>
		</div>
        
        </div>
 	</body>
 </html>