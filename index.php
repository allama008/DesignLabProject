<!DOCTYPE html>
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
echo "Connected successfully";
$bid= $_GET["bid"];
$name= $_GET["fname"]; echo $name;
$mail= $_GET["mail"]; echo $mail;
$rname=$_GET["rname"];
$stime= $_GET["stime"];
$etime= $_GET["etime"];
$desg="";
$dept="";
$sql = "SELECT * FROM users where name='$name' and email='$mail'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$dept= $row['department'];
			$desg= $row['designation'];
        }
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$to_email="";
if($desg=="Staff")
{
$sql = "SELECT email from users where department='$dept' and designation='HOD'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$to_email= $row['email'];
			echo $to_email;
        }
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
echo $to_email;
$subject = 'Reservation for '.$rname.' ';
$message= '<a href = "http://127.0.0.1:8081/designlab/index1.php?bid='.$bid.''.'&desg='.$desg.'">Click here</a>';
$headers = 'From: rashikadaga@gmail.com';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to_email,$subject,$message,$headers);
}
else if ($desg=="HOD")
{
$sql = "SELECT email from users where designation='Principal'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$to_email= $row['email'];
			echo $to_email;
        }
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
echo $to_email;
$subject = 'Reservation for '.$rname.' ';
$message= '<a href = "http://127.0.0.1:8081/designlab/index2.php?bid='.$bid.''.'&desg='.$desg.'">Click here</a>';
$headers = 'From: rashikadaga@gmail.com';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to_email,$subject,$message,$headers);
}
else if ($desg=="Principal")
{
$sql = "SELECT email from users where designation='Director'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			$to_email= $row['email'];
			echo $to_email;
        }
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
echo $to_email;
$subject = 'Reservation for '.$rname.' ';
$message= '<a href = "http://127.0.0.1:8081/designlab/index3.php?bid='.$bid.''.'&desg='.$desg.'">Click here</a>';
$headers = 'From: rashikadaga@gmail.com';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to_email,$subject,$message,$headers);
}
else
{
	//update sr1 directly to Booked.
	/*$sql = "update '$rname' set status="Booked" where id= $bid";
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } 
	else {
    echo "Error updating record: " . $conn->error;
	}*/
	//mail to the concerned person who booked it.
}
?>
<p>hello</p>
</body>
</html> 