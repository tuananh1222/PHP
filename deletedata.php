<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$servername = "localhost";
		$username_sql = "root";
		$password_sql = "";
		$dbname = "qlsv";
		$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
		mysqli_query($conn, "set character set 'utf8'"); 			

		$st = isset($_POST['st'])?$_POST['st']:"";
		$strIn = "";
		$count = 1;
		foreach ($st as $key => $value) {
			if ($count < sizeof($st)) {
				$strIn = $strIn.$value.",";
			} else {
				$strIn = $strIn.$value;
			}
			$count++;
		}	
		$sql_delete = "delete from sinhvien  where id in (".$strIn.") ";
		
		if ($conn->query($sql_delete) === TRUE) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}
		mysqli_close($conn);
		header('Location: ConnectData.php')
	?>
	<a href="ConnectData.php">Return</a>
</body>
</html>		