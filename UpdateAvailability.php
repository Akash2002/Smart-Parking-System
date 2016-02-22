<!DOCTYPE html>
<html>
<body>
	<?php 
		include 'dbcon.php';
		
		$Pos = $_GET["Position"];
		$Available = $_GET["Available"]; 
		$sql = "UPDATE ParkingLot SET Available = " . $Available . " WHERE position = " . $Pos;
		print $sql;
		$result = $conn->query($sql);
     	$conn->close();
	?>
</body>
</html>