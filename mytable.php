<!DOCTYPE html>
<html>
<html>
<head>
<link href="Images/FAVICON.png" rel="shortcut icon" type="image/png">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> <!-- S
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Main CSS File -->
	<link rel="stylesheet" href="css/MSMstyle.css">
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "custom order";

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
            <a href="index.html" id="thelogo"><img src="Images/LOGO small.png"></a>
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
<div class="row">
    <div class="col-md-1 row-height">
            <p id="dash_icons"><i class="fa fa-user" aria-hidden="true"><br><span id="dash_p">My Profile<span/></i></p>
            <p id="dash_icons"><i class="fa fa-user" aria-hidden="true"><br><span id="dash_p">My Profile<span/></i></p>
    </div>
<div class="col-md-10">
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

</body>
</html>



    