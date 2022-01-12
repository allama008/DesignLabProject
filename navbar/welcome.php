<?php
session_start();
?>
<html>
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
$mail= $_POST["email"]; 
$pass= $_POST["pass"]; 
$sql = "SELECT * FROM users where email='$mail'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$role=$row['role'];
			$passverify= $row['password'];
			if($passverify == $pass)
			{
				if($role=="staff")
				{
					
				
				$_SESSION["usermail"]=$mail;
				$_SESSION["userpass"]=$pass;
			$_SESSION["role"]=$role;
header('Location: index.php');
				break;
				}
				else
				{
					echo "You are not an admin";
					break;
				}
			}
			else{
				echo "Wrong Username/Password";
				break;
			}
			
		 }
		 
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
}
?>


</body>
</html>