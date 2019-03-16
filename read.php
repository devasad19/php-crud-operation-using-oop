<?php
	$conn = new mysqli('localhost', 'root', '', 'db_asad');
if(isset($_GET["delete_id"])){
	$sql = "DELETE from users where id='" . $_GET["delete_id"] . "'";
	$result = $conn->query($sql);
	if($result){
		echo "<div class='alert alert-success'>
		  <strong>Success!</strong> Data item deleted successfully.
		</div>";
	}else{
		echo "<div class='alert alert-success'>
	  <strong>Faild!</strong> Data item not deleted.
	</div>";
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
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">Sl.No</th>
				  <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Address</th>
				  <th scope="col">action</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				$sql = "SELECT * from users";
				$result = $conn->query($sql);
				
				if(mysqli_num_rows($result) > 0){
				while($rows = mysqli_fetch_assoc($result)){
		
			  ?>
			  
				<tr>
				  <th scope="row"><?php echo $rows['id'] ?></th>
				  <td><?php echo $rows['name'] ?></td>
				  <td><?php echo $rows['email'] ?></td>
				  <td><?php echo $rows['address'] ?></td>
				  <td>
					<a href="edit.php?edit_id=<?php echo $rows['id']?>"><button class="btn btn-primary btn-sm">edit</button></a>
					<a href="read.php?delete_id=<?php echo $rows['id']?>"><button class="btn btn-danger btn-sm">delete</button></a>
				  </td>
				</tr>
				
			 <?php
				}
						}else{
							echo 'Data Not Found.';
						}
					
			  ?>
			  </tbody>
			</table>
		<a href="index.php"><button class="btn btn-primary btn-sm">Add Data</button></a>
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