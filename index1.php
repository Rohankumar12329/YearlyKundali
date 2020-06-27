<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "yearly kundali";//Enter the Db name
	$con = mysqli_connect($hostname, $username, $password);
	$DOB = $_POST['DOB'];
	$TOB = $_POST['TOB'];
	$POB = $_POST['POB'];
	$Age = $_POST['Age'];
	$sql1 = "INSERT INTO `yearly kundali`.`personalinfo` ( `DOB`, `TOB`, `POB`, `Age`) VALUES ( '$DOB', '$TOB', '$POB', '$Age')";
	echo $sql1;
	if ($con->query($sql1) == true){
		echo "success";
	}
	else{
		echo "ERROR: $sql1 <br> $con->error";
	}
	$con->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container-fluid jumbotron jumbotron-fluid text-center col-12 col-sm-12 col-md-12 col-lg-12" id="jumbo">
			<h1>Data Input</h1>
			<p>Enter your data to check the info</p>
		</div>
		<section class="container text-center">
			<h1 class="text-center">Birth Kundali info</h1>
			<hr class="container">
			<form action="index2.php" method="post">
				<table class="table table-bordered">
					<thead>
						<tr class="table-secondary">
							<th>House</th>
							<th>Sun <br> (Surya) </th>
							<th>Moon <br> (Chandra)</th>
							<th>Venus <br> (Shukra)</th>
							<th>Mars <br> (Mangal)</th>
							<th>Mercury <br> (Budh)</th>
							<th>Jupiter <br> (Guru)</th>
							<th>Saturn <br> (Shani)</th>
							<th>Rahu <br> (Uranus)</th>
							<th>Ketu <br> (Neptune)</th>
							<th>Submit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="House" id="House" class="form-control" value="0"></td>
							<td><input type="text" name="Sun" id="Sun" class="form-control" value="0"></td>
							<td><input type="text" name="Moon" id="Moon" class="form-control" value="0"></td>
							<td><input type="text" name="Venus" id="Venus" class="form-control" value="0"></td>
							<td><input type="text" name="Mars" id="Mars" class="form-control" value="0"></td>
							<td><input type="text" name="Mercury" id="Mercury" class="form-control" value="0"></td>
							<td><input type="text" name="Jupiter" id="Jupiter" class="form-control" value="0"></td>
							<td><input type="text" name="Saturn" id="Saturn" class="form-control" value="0"></td>
							<td><input type="text" name="Rahu" id="Rahu" class="form-control" value="0"></td>
							<td><input type="text" name="Ketu" id="Ketu" class="form-control" value="0"></td>
							<td><button type="submit" class="btn text-left">Submit</button></td>
						</tr>
					</tbody>
				</table>
			</form>
		</section>
		<script src="index.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>