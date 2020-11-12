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
<?php 
	$servername = "localhost";
	$username_sql = "root";
	$password_sql = "";
	$dbname = "qlsv";
	$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
	mysqli_query($conn, "set character set 'utf8'"); 
	$sql_search ="";

	if (isset($_POST['tim'])) {
		$txtSearch = isset($_POST['search'])?($_POST['search']):"";
		$sql_search = "SELECT * FROM sinhvien, class WHERE sinhvien.id = class.id and sinhvien.name like '%".$txtSearch."'";
	} else {
		$sql_search = "SELECT * FROM sinhvien, class WHERE sinhvien.id = class.id";
	}
	
	$result1 = $conn->query($sql_search);

 ?>
<body>
	
	<table class="table table-dark">
		<thead>
			<form action="#" method="post">
			<tr>
				<td>
					<input type="text" name="search" placeholder="Nhập keyword">
					<input type="submit" name="tim" value="Search">
				</td>
			</tr>
			</form>

			<tr>
				<td colspan="7" align="center"><h2>Danh sách sinh viên</h2></td>
			</tr>
			<form action="deletedata.php" method="post">
			<tr>
				<td>
					<a href="insertclass.php">Insert</a>
					<input type="submit" name="sb" value="Delete">
				</td>
			</tr>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">ClassName</th>
				<th scope="col">ID_ST</th>
				<th scope="col">Name</th>
				<th scope="col">Birthday</th>
				<th scope="col">Sex</th>
				<th scope="col">Option</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<?php 
					// $servername = "localhost";
					// $username_sql = "root";
					// $password_sql = "";
					// $dbname = "qlsv";
					// $conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
					// mysqli_query($conn, "set character set 'utf8'"); 
					//$sql_select1 = "SELECT * FROM sinhvien, class WHERE sinhvien.id = class.id";
					//$result1 = $conn->query($sql_select1);
					if($result1->num_rows >0){					
						while ($row = $result1->fetch_assoc()) {
							?>
								<tr>
									<td><?= $row['id']?></td>
									<td><?= $row['class_name']?></td>
									<td><?= $row['id_st']?></td>
									<td><?= $row['name']?></td>
									<td><?= $row['birthday']?></td>
									<td><?= $row['sex']?></td>
									<td>
										<a href="#">Update</a> 
										<a href="deletedata.php?id=<?=$row['id'] ?>">
											Delete
											<input type="checkbox" name="st[]" value="<?=$row['id'] ?>">
										</a>
									</td>
								</tr>
							<?php				
						}
					}
					mysqli_close($conn);

				 ?>
			</form>
			</tr>
		</tbody>
	</table>
	
</body>
</html>