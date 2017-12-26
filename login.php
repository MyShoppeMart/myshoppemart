<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="Images/FAVICON.png" rel="shortcut icon" type="image/png">

  <link rel="stylesheet" type="text/css" href="css/login.css">

  <link rel="stylesheet" type="text/css" href="css/MSMstyle.css">

  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!--Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/camera.css">
     <!-- Template  -->
  <link href="css/templatemo_style.css" rel="stylesheet">
    <!--Google Font API -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
  <div class="newnav">
        <div>
        <a href="index.html" id="thelogo"><img src="Images/christmaspng.png" width="80" height="80"></a>
        </div>
        <label for="toggle" id="mainLabel"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="Platforms.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Platforms</a>
            <a href="Contact-Us.html"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact</a>
            <a href="About-Us.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
        </div>

    </div>
<div class="container_form">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
<div id="templatemo_about_footer" >
    <div class="container-fluid-footer">
        <div class="col-sm-6 col-md-3 about_icon">
            
            <h3 id="myownh4">About Us</h3>
            <p id="myownp">
                My ShoppeMart is your non-traditional online and offline shopping, retail and logistics experience and platform that's transforming the way you shop/buy anything, anywhere, anytime.
                <br><a href="About-Us.html"><span id="aboutlink">Know More.</span></a>
            </p>
        </div>
        <div class="col-sm-6 col-md-3 about_icon">
            
            <h3 id="myownh4">Quick Help</h3>
                <p id="myownp">
                    <a href="#"> Shopping with us</a>
                </p>
                <p id="myownp">
                    <a href="#"> Logistics with us</a>
                </p>
                <p id="myownp">
                    <a href="#"> Our Bot Usage</a>
                </p>
                <p id="myownp">
                    <a href="#"> Shipping & Delivery</a>
                </p>
        </div>
        <div class="col-sm-6 col-md-3 about_icon">
            
            <h3 id="myownh4">How We Operate</h3>
                <p id="myownp">
                    <a href="Privacy-Policy.html"> Privacy Policy</a>
                </p>
                <p id="myownp">
                    <a href="#"> Terms and Conditions</a>
                </p>
                <p id="myownp">
                    <a href="#"> Return Policy</a>
                </p>
                <p id="myownp">
                    <a href="#"> Cookies</a>
                </p>
        </div>
        <div class="col-sm-6 col-md-3 about_icon">
            
            <h3 id="myownh4">Become A Partner</h3>
                <p id="myownp">
                    <a href="#"> Sell with us</a>
                </p>
                <p id="myownp">
                    <a href="#"> Become an Affiliate Partner</a>
                </p>
                <p id="myownp">
                    <a href="#"> Become a Sales Consultant</a>
                </p>
                <p id="myownp">
                    <a href="#"> Become a Vendor Service Provider</a>
                </p>
        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
        <hr/>
    </div>
</div>


<div id="templatemo_footer">
        <p id="footer">Copyright &copy; 2017 Myshoppemart
            <br>
            
            <a href="https://www.facebook.com/myshoppemart">
            <i id="footericons" class="fa fa-facebook" style="color: #0D47A1;"></i></a>

            <a href="https://www.instagram.com/myshoppemart">
            <i id="footericons" class="fa fa-instagram" style="color: #F06292"></i></a>

            <a href="https://www.twitter.com/MyShoppeMart">
            <i id="footericons" class="fa fa-twitter" style="color: #2979FF;"></i></a>
        
        </p> 
</div>

</body>
</html>
