<!DOCTYPE HTML>
<html lang="en-US">
<head>
	
	<title>Tourism Capsule</title>
	<link href="https://fonts.maateen.me/charukola-ultra-light/font.css" rel="stylesheet">
	<link rel="stylesheet" href="places.css" />
	<link rel="stylesheet" href="css/responsive.css" />

								<style>
								.dropbtn {
								    background-color: #4CAF50;
								    color: white;
								    padding: 16px;
								    font-size: 16px;
								    border: none;
								}

								.dropdown {
								    position: ;
								    display: inline-block;
								}

								.dropdown-content {
								    display: none;
								    position: absolute;
								    background-color: #4CAF50;
								    min-width: 100px;
								    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
								    
								}

								.dropdown-content a {
								    color: black;
								    padding: 12px 16px;
								    text-decoration: none;
								    display: block;
								}

								.dropdown-content a:hover {background-color: #ddd;}

								.dropdown:hover .dropdown-content {display: block;}

								.dropdown:hover .dropbtn {background-color: #3e8e41;}

								body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #4CAF50;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
								</style>
</head>
<body>
<!--
	<div class="fullwrap">
		<div class="wrap"> 
		
		</div>
	</div>
	-->
	
	<div class="fullwrap header-bg">
		<div class="wrap "> 
			<div class="header-top">
				<div class="logo"> 
					<img src="img/capture.png" alt="image unload" />
				</div>
				<div class="menu">
					<ul>
						<div class="topnav" id="myTopnav">
						<li><a href="index.php">হোম</a></li>
					</div>
															
						<li>
								<div class="dropdown">
								  <button class="dropbtn">স্থানসমূহ</button>
								  <div class="dropdown-content">
										<a href="dhaka.php">ঢাকা</a>
										<a href="rajshahi.php">রাজশাহী</a>
										<a href="khulna.php">খুলনা</a>
										<a href="chattagram.php">চট্টগ্রাম</a>
										<a href="rongpur.php">রংপুর</a>
										<a href="sylhet.php">সিলেট</a>
										<a href="mymensingh.php">ময়মনসিংহ</a>
										<a href="barishal.php">বরিশাল</a>
								  </div>
								</div>
						</li>
						<li>
								<div class="dropdown">
								  <button class="dropbtn">টিকেট</button>
								  <div class="dropdown-content">
										<a href="air ticket/air ticket.php">বিমান টিকেট</a>
										<a href="rent car/rent a car.php">গাড়ি ভাড়া</a>
						</li>
						<li>
							<div class="topnav" id="myTopnav">
									  <a href="team.php">যোগাযোগ</a>
									  <a href="login.php">Sign in</a>
									  <a href="register.php">sign up</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</div>

				<div class="fullwrap gallery-bg">
		<div class="wrap">
			<div class="header-area"> 
				<h2 style="text-align: center;margin-bottom: : 20px; text-transform: capitalize;">খুলনায় ভ্রমণের স্থানসমূহ</h2><br>
				
			</div>
			<div class="row-one">
				<div class="col">
					<a href="sundarban.php"><img src="img/khulna/sundarban4.jpg" alt="" /></a>
					<h3>সুন্দরবন</h3>
				</div>
				<div class="col">
					<a href=""><img src="img/khulna/shat.jpg" alt="" /></a>
					<h3>ষাটগম্বুজ মসজিদ</h3>
				</div>	
				<div class="col">	
					<a href=""><img src="img/gallery3.jpg" alt="" /></a>
					<h3></h3>
				</div>	
			</div>
			<div class="row-tow">
				<div class="col">
					<a href=""><img src="img/gallery4.jpg" alt="" /></a>
					<h3></h3>
				</div>
				<div class="col">
					<a href=""><img src="img/gallery5.jpg" alt="" /></a>
					<h3></h3>
				</div>
				<div class="col">
					<a href=""><img src="img/gallery6.jpg" alt="" /></a>
					<h3></h3>
				</div>
			</div>
		</div>
	</div>


		<div class="fullwrap gallery-bg">
		<div class="wrap"> 
			<div class="header-area"> 
				<h2 style="text-align: center;margin-bottom: : 20px; text-transform: capitalize;">খুলনায় হোটেলসমূহ</h2><br>
				
			</div>
			<div class="row-one">
				<div class="col">
					<a href=""><img src="khulna_h/1.jpg" alt="" /></a>
					<h3>Hotel City Plaza International </h3>
				</div>
				<div class="col">
					<a href=""><img src="khulna_h/2.jpg" alt="" /></a>
					<h3>Tiger Garden International Hotel</h3>
				</div>	
				<div class="col">	
					<a href=""><img src="khulna_h/3.jpg" alt="" /></a>
					<h3>Hotel Castle Salam</h3>
				</div>
			</div>
			<div class="row-tow">
				<div class="col">
					<a href=""><img src="khulna_h/4.jpg" alt="" /></a>
					<h3>Western Inn International Ltd</h3>
				</div>
				<div class="col">
					<a href=""><img src="khulna_h/5.jpg" alt="" /></a>
					<h3>City Inn Ltd.</h3>
				</div>
				<div class="col">
					<a href=""><img src="khulna_h/6.jpg" alt="" /></a>
					<h3>The Hotel Millennium Ltd.</h3>
				</div>
			</div>
		</div>
	</div>

		<div class="fullwrap wrap-bg">
		<div class="wrap"> 
			<div class="footer">
				<p>© All rights reserved by Travel Capsule</p>
			</div>	
		</div>
	</div>