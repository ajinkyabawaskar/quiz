<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Submitted!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			<h4>
			Winners shall receive an email!</h4>
				<form name="result" action="ds.php" method="post">
					<div class="form-group">
						<label for="username">Name</label>
						<input type="text" name="name" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter name" required>
						<small id="usernameHelp" class="form-text text-muted">Enter your name as verified on GenM.</small>
					</div>
					<div class="form-group">
						<label for="username">Email</label>
						<input type="email" name="email" class="form-control" id="emailHelp" aria-describedby="emailHelp" placeholder="Enter name" required>
					</div>
					<div class="form-group">
						<label for="username">Contact Number</label>
						<input type="number" length="10" name="contact" class="form-control" id="contactHelp" aria-describedby="contactHelp" placeholder="Enter name" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
			</div>
		</div>
	</div>
</body>
</html>
