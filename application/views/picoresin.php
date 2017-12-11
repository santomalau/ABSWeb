<!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="utf-8">
 		<title>Kits</title>
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
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/1.jpg">
			</div>
			<div class="col-sm-2"></div>
			<div class ="desc col-sm-4">
				<h2>iStick Pico RESIN with MELO III Mini</h2>
				<p>
					<b>Product Introduction:</b> <br> This new RESIN style iStick Pico features a durable resin encasement of light weight, nice looking and comfortable texture, and each one comes in its unique psychedelic pattern. The innovative process and compact size make it comfortable to hold and carry. Powered by single interchangeable 18650 cell, the iStick Pico provides you with 75W maximum output and upgradeable firmware. With top e-liquid filling design, hidden airflow control and detachable structure, the MELO III Mini fits the iStick Pico perfectly. 
				</p>
			</div>
		</div>

		<div class="vape row background">
			<div class ="desc col-sm-6"><br><br><br><br><br><br><br><br>
				<p>
					Parameter:<br>
					Weight: 120g<br>
					Size: 45mm*23mm*115mm<br>
					Thread type: 510 thread<br>
					E-liquid capacity: 2ml<br>
					Cell type: High-rate 18650 cell<br>
					(Continuous discharge current should be above 25A)<br>
					Output mode: VW/Bypass/TC(Ni,Ti,SS,TCR-M1,M2,M3) mode<br>
					Output wattage: 1-75W<br>
					Resistance range: 0.05-1.5ohm (TC modes)<br>
					Resistance range:0.1-3.5ohm (VW/Bypass mode)<br>
					Standard configuration:<br>
				</p>
			</div>
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/2.png">
			</div>
		</div>

		<div class="vape row ">
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/4.jpg" width="100%">
			</div>
			<div class ="desc col-sm-6">
				
					<h2>Compact, Lightweight, Durable, and Comfortable to Use</h2>
				<p>
				This new RESIN style iStick Pico features an encasement of resin material which is scratch-resistant, durable and lightweight. Also with a compact size, you can hold the iStick Pico RESIN style in the palm or put in pocket, much more comfortable to use and carry.
				</p>
			</div>
			
		</div>

		<div class="vape row ">
			<div class ="img-full col-sm-12">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/3.jpg" width="100%">
			</div>

		</div>

		<div class="vape row">
			<div class ="img col-sm-6" >
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/5.png" width="90%" >
			</div>
			<div class ="desc col-sm-6">
				<h2>Various Vaping Modes with 75W Output</h2>
				<p>
					Despite the compact size, the iStick Pico RESIN still allows an intelligent but yet satisfying draw with 75W maximum output and switchable VW/Bypass/TC(Ni,Ti,SS,TCR) modes.
				</p>


			</div>
		</div>

		<div class="vape row ">
			<div class ="desc col-sm-6">			
					<h2>Single Replaceable 18650 Cell</h2>
				<p>
	Users can carry spare cells when on the go and change the cell easily by removing the battery cap.
				</p>
			</div>
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/6.jpg" width="75%">
			</div>
		</div>
		<div class="container" >
		<div class="vape row ">
			<div class ="desc ">
				<h2>Detachable Structure</h2>
				<div class ="img" >
					<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/7.jpg" width="75%" >
				</div>
			</div>
		</div>

		<div class="vape row " style="background-color: #efefef">
			<div class="desc col-sm-5" >
				<h2>Top E-liquid Filling</h2>
				<br><br>
				<p>The MELO III Mini can easily be refilled with
e-liquid by removing the top cap only.</p>
			<div class="img">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/8.jpg" width="100%">
			</div>
		</div>
			<div class="col-sm-2"></div>
			<div class="desc col-sm-5">
				<h2>Invisible Airflow Control</h2>
				<br><br>
				<p>This design of the hidden airflow control is also a plus to the
simple and fashionable appearance of MELO III Mini.</p>
			<div class="img">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/9.jpg" width="100%">
			</div>

			</div>
		</div>
			<div class="vape row background2">
				<div class="desc col-sm-12" style="color: white">
					<h2 >510 Spring Connector</h2><br>
					<p>It also retains stainless steel spring loaded 510 connector for strong wear resistance and high adaptability.</p>
				<div class="img">
					<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/10.png">
				</div>
			</div>
		</div>
	<div class="vape row">
		<div class="desc col-sm-12">
			<h2>Unique Bottom Design</h2><br>
			<p>The ventilation holes at the bottom are for better heat dissipation and the adjustment buttons are located at the bottom as well.</p>
			<div class="img">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/11.jpg">
			</div>
		</div>
	</div>
	<div class="vape row">
		<div class="desc col-sm-12">
			<h2>Functions of Micro USB Port</h2><br>
			<p>Charging: The 18650 cell can be charged in the iStick Pico RESIN through the side USB port via 1A wall adapter or computer or charged with an external battery charger. The recommended way is to charge the cell externally as it will take less time to give the cell a full charge.</p>
			<div class="img">
				<img src="<?php echo base_url(); ?>static/gambar(MOD)PICORESIN/12.jpg">
			</div>
		</div>
	</div>

	<div class="vape row">
		<div class="col-md-12 gambarbelakang">
			<div class="desc">
				<h3>Firmware upgrading: The firmware can be upgraded by connecting the device with a computer through the USB port via a micro USB cable.</h3>
			</div>
		</div>
	</div>
</div>
</div>


				








 	</body>
 </html>