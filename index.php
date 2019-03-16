<?php
	if(isset($_POST['submit'])){
	$conn = new mysqli('localhost', 'root', '', 'db_asad');

		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];

	
	$sql = "INSERT INTO users(name, email, address) VALUES('$name', '$email','$address')";
	$query = $conn->query($sql);
	
	if($query){
		echo "data added successfully";
	}else{
		echo "not inserted";
	}
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
	<div class="row">
		<div class="col-md-8 col-offset-2">
			<form action="" method="post">
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
				  <input type="text" name="name" class="form-control" id="inputPassword" placeholder="name">
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" name="email" class="form-control" id="inputPassword" placeholder="email">
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="address" id="inputPassword" placeholder="address">
				</div>
			  </div>
			  			  
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
				 <input type="submit" name="submit" value="Submit">
				</div>
			  </div>
			</form>
		<a href="read.php"><button class="btn btn-primary btn-sm">data list</button></a>
		</div>
	</div>
  </div>
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>