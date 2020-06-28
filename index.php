<!DOCTYPE html>
<html>
	<head>
		<title>Kundali Input</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
	</head>
	<body style="background-color: #F8EFBA;">
		<section>
			<div class="container-fluid jumbotron jumbotron-fluid text-center col-12 col-sm-12 col-md-12 col-lg-12" id="jumbo" style="background-color: #2bcbba;">
				<h1>Data Input</h1>
				<p>Enter your data to check the info</p>
			</div>
			<div class="container">
				<h1 class="text-center">Birth Info</h1>
				<hr>
				<form action="index1.php" method="POST" class="text-center">
					<div class="form-group" id="gap">
						<input type="text" name="DOB" id="DOB" class="form-control" placeholder="Enter Date of Birth">
					</div>
					<div class="form-group" id="gap">
						<input type="text" name="TOB" id="TOB" class="form-control" placeholder="Enter Time of Birth">
					</div>
					<div class="form-group"id="gap">
						<input type="text" name="POB" id="POB" class="form-control" placeholder="Enter Place of Birth">
					</div>
					<div class="form-group" id="gap">
						<input type="number" name="Age" id="Age" class="form-control" placeholder="Enter your age">
					</div>
					<hr>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</section>
		<script src="index.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
	</body>
</html>


