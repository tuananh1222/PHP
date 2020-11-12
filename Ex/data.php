<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DataUpdate</title>
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
		$id = isset($_POST['id'])?$_POST['id']:0;
		$name = isset($_POST['name'])?$_POST['name']:"";
		$birthday = isset($_POST['birthday'])?$_POST['birthday']:"";
		$sex = isset($_POST['sex'])?$_POST['sex']:"";
		$sql = "UPDATE student SET Name ='$name', Birthday='$birthday', Sex = '$sex' WHERE id=".$id;

		if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $conn->error;
		}

		$conn->close();
	 ?>
	 <a href="qlsv.php">Xem dữ liệu</a>
</body>
</html>		