<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database</title>
</head>

<body>
	<h2>Dữ liệu của bạn</h2>
	<?php 
		$name = isset($_POST['name'])?$_POST['name']:"";
		$birthday = isset($_POST['birthday'])?$_POST['birthday']:"";
		$sex = isset($_POST['sex'])?$_POST['sex']:"";

		$servername = "localhost";
		$username_sql = "root";
		$password_sql = "";
		$dbname = "studentmg";

		// Create connection
		$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
		mysqli_query($conn, "set character set 'utf8'");   
		$sql = "INSERT INTO student(Name, Birthday, Sex)
		VALUES ('$name', '$birthday', '$sex')";

		if ($name != "" && $birthday != "" && $sex != "") {
			mysqli_query($conn, $sql);
			echo '<script type="text/javascript">alert("Insert ")</script>';
		}else{
			echo '<script type="text/javascript">alert("You do not fill")</script>';
		}
		
		 mysqli_close($conn);
	 ?>
	 <a href="qlsv.php">Xem dữ liệu</a>
	  <a href="AddData.php">Add data</a>
	 
</body>
</html>