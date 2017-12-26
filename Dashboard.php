<!DOCTYPE html>
<html>
<html>
<head>
        <title>Dashboard</title>
        <link href="Images/FAVICON.png" rel="shortcut icon" type="image/png">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Main CSS File -->
  <link rel="stylesheet" href="css/MSMstyle.css">

  <link rel="stylesheet" href="css/login.css">
    <!--Font Awesome -->
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

<?php
$servername = "myshoppemart.com.mysql";
$username = "myshoppemart_com";
$password = "LyneXtkK";
$dbname = "myshoppemart_com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, description, name, email, phone, address, availability FROM userdata";
$result = $conn->query($sql); ?>

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
 <br>   
<!-- notification message -->
<?php if ($result->num_rows > 0) : ?>
<div class="col-md-12">
<div class="panel panel-success">
  
  <div class="panel panel-heading" >
    <div id="dash_h4">
        <a href="index.html"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
        <a href="Platforms.html"><i class="fa fa-plus" aria-hidden="true"></i> Add custom order</a>

    </div>
          <div class="menu">
            <p><i class="fa fa-home" aria-hidden="true"></i> My Custom Orders</p>
                
          </div>  
  </div>                      

  
  <div class="panel-body">      
   <div class="table-responsive">          
  <table class="table">          
    
    <thead>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Availability</th>
    </tr>
    </thead>

      
      <?php 
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["description"]. "</td><td> " . $row["name"]. "</td><td>" . 
            $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["address"]. "</td><td>" . $row["availability"]. 
            "</td> 
            <a class='btn btn-default' id='found' href='#'>
            <i class='fa fa-asterisk'></i><span id='available'> Not found yet</span></a>
            <td>" . 
            "</td></tr>";
        }
        echo "</table>";
         
        else:
        echo "0 results";
        $conn->close();
      ?>
  </div>
</div>
</div>
</div>
</div>
<?php endif ?>

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
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="Dashboard.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</body>
</html>
