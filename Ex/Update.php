<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
</head>
<body>
	<?php 
		$servername = "localhost";
		$username_sql = "root";
		$password_sql = "";
		$dbname = "studentmg";
		$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
		mysqli_query($conn, "set character set 'utf8'"); 
	?>
	<?php 
		$id = isset($_GET['id'])?$_GET['id']: 0;
		$sql1 = "SELECT * FROM student where id =".$id;
		$result = $conn->query($sql1);
		if($result->num_rows > 0){					
			while ($row = $result->fetch_assoc()) {
				?>
					<form action="data.php" method="post">
						<table>
							<tr>
								<h3> Student Information</h3>
							</tr>
							<tr>
								<td>ID</td>
								<td><input type="text" name="id" value="<?= $row['id'] ?>"></td>
							</tr>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" value="<?= $row['Name'] ?>"></td>
							</tr>
							<tr>
								<td>Birthday</td>
								<td><input type="date" name="birthday"value="<?= $row['Birthday'] ?>"></td>
							</tr>
							<tr>
								<td>Sex</td>
								<td><input type="text" name="sex" value="<?= $row['Sex'] ?>"></td>
							</tr>
							<tr>
								<td><input type="submit" value="Add"></td>
							</tr>

						</table>
					</form>
				<?php				
			}
		}
		mysqli_close($conn);
	 ?> 
</body>
</html>			