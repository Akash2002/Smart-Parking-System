<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
	.red-icon {
		color:#ff0000;
	}
	.green-icon {
		color:#009933;
	}
	.table-responsive
	{
		width:50%;
	}
</style>

</head>
<body>

<?php include 'dbcon.php'; 
	$sql = "SELECT Position, Available FROM ParkingLot Order by Position";
	$result = $conn->query($sql);
	header("Refresh:1");
?>

<div class="container-fluid">

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th> Position </th>
					<th> Availability </th>
				</tr>
			</thead>
		 	<?php while($row = $result->fetch_assoc()) { ?> 
				<tbody>
					<tr>
	 					<td> P <?php echo $row['Position']; ?>  </td>
						<td> 
							<?php if ( $row['Available'] == 1 ) { ?>
								<p><span class="glyphicon glyphicon-ok green-icon"></span></p>
							<?php } else { ?>
								<p><span class="glyphicon glyphicon-remove red-icon"></span></p>
							<?php } ?>
						</td>
		 			</tr>
				</tbody>
			<?php } ?>
		</table>
	</div>

</div>
<?php 	$conn->close(); ?>

</body>
</html>