<!DOCTYPE html>
<html>
<body>
<?php
$bid= $_GET["bid"];
$desg= $_GET["desg"];
$url_yes= 'http://127.0.0.1:8081/designlab/index2.php?bid='.$bid.'&desg='.$desg.'&yes=true&no=false';
$url_no= 'http://127.0.0.1:8081/designlab/index2.php?bid='.$bid.'&desg='.$desg.'&yes=false&no=true';
?>
<p> Please Choose your response </p>
<a href='<?php echo $url_yes?>'>Yes</a>
<a href='<?php echo $url_no?>'>No</a>
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
function takeActionYes()
{

	$bid= $_GET["bid"];
	$desg= $_GET["desg"];
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
	$subject = 'Reservation';
	$message= '<a href = "http://127.0.0.1:8081/designlab/index3.php?bid='.$bid.''.'&desg='.$desg.'">Click here</a>';
	$headers = 'From: rashikadaga@gmail.com';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	mail($to_email,$subject,$message,$headers);
}
function takeActionNo(){
	$bid= $_GET["bid"];
	$desg= $_GET["desg"];
	//delete the bid record;
	//send mail to user who booked;
	/* $sql = "DELETE FROM $rname WHERE id=$bid";
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}*/
}
if (($_GET['yes'])=='true')
{
    echo "Yes Accepted";
	takeActionYes();
}
if (($_GET['no'])=='true')
{
	echo "No Accepted";
	takeActionNo();
}

?>
</form>
</body>
</html>