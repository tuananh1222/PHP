<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<a href="AddData.php">Add</a>
	<table class="table table-dark">
		<thead>
			<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Birthday</th>
			<th scope="col">Sex</th>
			<th scope="col">Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
					$servername = "localhost";
					$username_sql = "root";
					$password_sql = "";
					$dbname = "studentmg";
					$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
					mysqli_query($conn, "set character set 'utf8'");  

					$id = isset($_GET['id'])?$_GET['id']:0;
					echo $id;
					$sql_delete = "delete from student where id =".$id;

					if ($conn->query($sql_delete) === TRUE) {
					  echo "Record deleted successfully";
					} else {
					  echo "Error deleting record: " . $conn->error;
					}
					$sql1 = "SELECT * FROM student";
					$result = $conn->query($sql1);
					if($result->num_rows > 0){					
						while ($row = $result->fetch_assoc()) {
							?>
								<tr>
								<td><?= $row['id']?></td>
								<td><?= $row['Name']?></td>
								<td><?= $row['Birthday']?></td>
								<td><?= $row['Sex']?></td>
								<td><a href="Update.php?id=<?=$row['id'] ?>">Sửa</a><a href="qlsv.php?id=<?=$row['id'] ?>" onClick = "return confirm('Confirm delete')">Xóa</a></td>
								</tr>
							<?php				
						}
					}
					mysqli_close($conn);
				?>
			</tr>
		</tbody>
	</table>
</body>
</html>