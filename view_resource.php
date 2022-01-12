<?php
include('connection.php');
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	    <script src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>

	    <link rel="stylesheet" type="text/css" href="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" />

	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.css" />

	    <script src="lib/pikaday.js"></script>
	    <link rel="stylesheet" type="text/css" href="lib/pikaday.css" />

	    <script src="lib/jquery.ptTimeSelect.js"></script>
	    <link rel="stylesheet" type="text/css" href="lib/jquery.ptTimeSelect.css" />
	    
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />

	    <script src="lib/moment.min.js"></script>
	    <script src="lib/site.js"></script>
	    <link rel="stylesheet" type="text/css" href="lib/site.css" />

	    <script src="dist/datepair.js"></script>
	    <script src="dist/jquery.datepair.js"></script>
	</head>
	<body style="background-color:white;color:black;">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<p id="basicExample">
			<table>
				<tr>
	                <td><input type="radio" name="resource" value="Shared Resource 1"> Shared Resource 1</td>
	                <td><input type="radio" name="resource" value="Shared Resource 2"> Shared Resource 2</td>
	                <td><input type="radio" name="resource" value="Shared Resource 3"> Shared Resource 3</td>
	            </tr>
				<tr><td>Date : </td>
				   		<td><input type="text" class="date start" name="date"><br></td>
				</tr>
				<tr><td> <input type="submit" name="submit" value="View" id="submit"><br></td></tr>s
			</table>
		</p>
		</form>
			
		<?php
			if(isset($_POST['submit']))
			{
				$date = date('Y-m-d', strtotime($_POST['date']));
				$resource = $_POST['resource'];
				$sql = "SELECT * from resources WHERE purpose='$resource' AND bookDate='$date'";
				$result = mysqli_query($con, $sql);
				if($result)
				{
		?>
		
			<table  border="1">
				<div id="view">
						<th>Booking Id</th>
						<th>Name</th>
						<th>Date</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Resource</th>
						<th>Status</th>

				</div >
		<?php
						while($row = mysqli_fetch_assoc($result))
						{
							$name = $row['bookedBy'];
							$date = $row['bookDate'];
							$bid = $row['booking_id'];
							$stime = $row['startTime'];
							$etime = $row['endTime'];
							$resource = $row['purpose'];
							$status= $row['status'];
		?>
							<tr>
								<td><?php echo $bid;?> </td>
								<td><?php echo $name;?> </td>
								<td><?php echo $date;?> </td>
								<td><?php echo $stime;?> </td>
								<td><?php echo $etime;?> </td>
								<td><?php echo $resource;?> </td>
								<td>
									<?php
										if($status==1)
											echo "Not Available";
										else
											echo "Available";
									 ?> 
								</td>
							</tr>
		<?php
						}
		?>
						</table>

		<?php
				}
			}
		?>
	</body>	
	<script type="text/javascript">
		$(document).ready(function() {
			$("#view").hide();
			  $("#submit").click(function() {
			    
			    $("#view").show();
			  });
		});
		 $('#basicExample .date').datepicker({
                    'format': 'm/d/yyyy',
                    'autoclose': true
          });

        var basicExampleEl = document.getElementById('basicExample');
        var datepair = new Datepair(basicExampleEl);
	</script>
</html>