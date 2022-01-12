<!DOCTYPE html>
<html>
<body>
<?php
$bid= $_GET["bid"];
$desg= $_GET["desg"];
$url_yes= 'http://127.0.0.1:8081/designlab/index3.php?bid='.$bid.'&desg='.$desg.'&yes=true&no=false';
$url_no= 'http://127.0.0.1:8081/designlab/index3.php?bid='.$bid.'&desg='.$desg.'&yes=false&no=true';
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
	//update DB of resource to Booked of bid
	//send mail to user who booked
	/*$sql = "update '$rname' set status="Booked" where id= $bid";
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } 
	else {
    echo "Error updating record: " . $conn->error;
	}*/
}
function takeActionNo(){
	$bid= $_GET["bid"];
	$desg= $_GET["desg"];
	//delete the bid record
	//send mail to user who booked
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