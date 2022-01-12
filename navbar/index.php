<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Bootstrap Navbar Toggle Show/Hide</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

  
  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css'>

      <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style2.css">

   
  <style>

  </style>
</head>

<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db= "designlab";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mail= $_SESSION["usermail"]; 
$sql = "SELECT * FROM users where email='$mail'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$name=$row['name'];
        // Free result set}
       
	}
	 mysqli_free_result($result);
    
}	
	else{
        echo "No records matching your query were found.";
    }
}
?>







  <div id='background'></div>
<div class='navbar navbar-fixed-top'>
  <nav class='navbar-inner header'>
    <div class='container'>
		
      <div class='brand'>
	  <img src="logo1.png" style="height:auto;width:auto;max-height:50px;max-width:70px">
    
        GREEDY CODERS
	  </div>
      <ul class='nav pull-right'>
        <li>
          <a class='nav-link'>
        BOOK</a>
        </li>
        <li>
          <a class='nav-link'>
         VIEW </a>
        </li>
        <li class='dropdown'>
          <a class='dropdown-toggle nav-link' data-toggle='dropdown'>
            
                  <?php echo $name ?><ul class='dropdown-menu text-center'>
              <li>
                <a>
				BOOKINGS
                </a>
              </li>
              <li>
                <a href="login.html">
                  LOGOUT
                </a>
              </li>
            </ul>
          </a>
        </li>
      </ul>
      <div class='triangle-down center'>
        <p>
          <i class='fa fa-chevron-down fa-2x isDown' id='toggle'></i>
        </p>
      </div>
    </div>
  </nav>
  <br>
</div>
<div id='content'>
  <div class='row-fluid'>
    <div class='span12' style='background-color:rgba(0, 0, 0, .8);'>
      <div class='row-fluid'>
        <div class='span8 offset2'>
          <br>
          <h1 class='threed text-center' style='letter-spacing:4px'>
            RESOURCE RESERVATION SYSTEM
          </h1>
        </div>
      </div>
	  <br>
	  <br>
	  <br><br><br><br><br><br>
	     <div class="row-fluid">
                        <div class="span6" style="text-align:center">
	                   		 <span class='pulse-button'>BOOK</span> <br><br>
						    <h2 style="font-family:The Blacklist">Book Resource</h2>
						
</div>
                        <div class="span6" style="text-align:center">
	            			 <span class='pulse-button'>VIEW</span>
							       	<br><br>
		
							       <h2 style="font-family:The Blacklist">View Resource</h2>
						</div>
                    </div><!--/row-->
                
     <br>
	 <br><br><br><br><br><br><br><br>
	
</div>
		
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
